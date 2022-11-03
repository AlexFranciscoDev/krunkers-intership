<?php

    namespace App\Http\Controllers;

    use App\Http\Controllers\Controllers;
    use App\Models\User;
    use App\Models\Offer;
    use Carbon\Carbon;
    use Illuminate\Http\Request;
    use App\Http\Requests\OffersListRequest;
    use App\Http\Requests\CreateOfferRequest;
    use Illuminate\Support\Facades\DB;


    // Clase de ofertaController
    class OfferController extends Controller {

        public $offers;
        public $relatedOffers;
        public $filters;
        //private $pruebaWhere;

        public function __construct() {
            // Guardamos todas las ofertas de la base de datos
            $this->offerModel = new Offer();
            $this->filters = array(
                "areas" => array(
                    ["Informática", "informatica"],
                    ["Diseño", "diseno"],
                    ["Magisterio", "magisterio"],
                    ["Hosteleria", "hosteleria"],
                    ["Marketing", "marketing"]
                ),
                "cities" => array(
                    ["Barcelona", "barcelona"],
                    ["Madrid", "madrid"],
                    ["Valencia", "valencia"],
                    ["Bilbao", "bilbao"]
                )
            );
        }

        /*
            $filter = (
                // Nombre, value
                "tipo" => (["Rol", "rol"], ["Arcade", "arcade"])
                "precio" => (["Caro", "caro"])
            );
        */
        
        // Metodo para mostrar oferta
        public function displayOffer() {
            // Mostrar todas las ofertas: $this->offerModel->get();
            // Mostramos todas las ofertas
            return view('offers')->with(['offers' => $this->offerModel->offersCompany(),
                                        'filters' => $this->filters]);
        }

        // Display offer by keyword
        public function displayOfferKeyword(Request $request) {
            // Guardamos la palabra clave enviada por el usuario
            // keyword 
            $keyword = $request->input('keyword');
            return view('offers')->with(['offers' => $this->offerModel->keyword($keyword),
            'filters' => $this->filters]);
        }

        // Display offer by given filter
        
        public function displayOfferFilter(Request $request) {
            // order by date
            $order = $request->input('order');
            // date
            $datePublication = $request->input('datePublication');
            // typeWorkday
            $typeWorkday = $request->input('typeWorkday');
            // area
            $area = $request->input('area');
            // city
            $city = $request->input('city');
            // Create the query
            $offers = $this->offerModel->query();
            // Concatenate the queries
            $offers->date($datePublication);
            if (!empty($typeWorkday)) {
                $offers->typeWorkday($typeWorkday);
            }
            if (!empty($area)) {
                $offers->area($area);
            }
            if (!empty($city)) {
                $offers->city($city);
            }
            
            $offers->order($order);
            if ($request->ajax()) {
                return "AJAX";
            }
            return view('offers')->with(['offers' => $offers->get(),
            'filters' => $this->filters]);
        }

        // Metodo para la vista createOffer
        public function displayCreateOffer() {
            return view('createOffer');
        }

        // Display para la validación de crear oferta
        public function createOffer(CreateOfferRequest $request) {
            $name = $request->input("offerName");
            $description = $request->input("description");
            $area = $request->input("area");
            $city = $request->input("city");
            $typeWorkday = $request->input("typeWorkday");
            $requirements = $request->input("requirements");
            // Set a default idCOmpany
            $success = $this->offerModel->newOffer($name, $description, $area, $city, $typeWorkday, $requirements);
            return redirect()->action([OfferController::class, 'displayCreateOffer'], ['success' => $success]);
        }

        // Función para mostrar la vista de la descripción de la oferta
        public function displayOfferDescription(Request $request) {
            // Guardem la variable idOffer
            $idOffer = $request->input("idOffer");
            
            // $relatedOffers = $this->offerModel->query();
            // Cridem al model perquè agafi les ofertes relacionades
            // $relatedOffers->relatedOffers($idOffer);
            

            $offers = $this->offerModel->offerDescription($idOffer)->get();

            /*
            // Fem el join entre la tabla offers i companies
            $offers = DB::table('offers')->join('companies', 'offers.idCompany', '=', 'companies.idCompany')
                        ->select('offers.*', 'companies.name as c_name', 'companies.companyPhoto as c_photo')  
                        ->where('idOffer', '=', $idOffer)->get();
            
            // Guardem el camp area de la oferta
            $consulta = "SELECT area FROM offers WHERE idOffer = $idOffer";
            $area = DB::select($consulta);

            $relatedOffers = DB::table('offers')->join('companies', 'offers.idCompany', '=', 'companies.idCompany')
                                ->select('offers.*', 'companies.companyPhoto as c_photo')  
                                ->where('area', '=', $area[0]->area)->where('idOffer', '!=', $idOffer)->get();
            */


            // Retornem la vista
            return view('offerDescription', compact('offers'));
            
        }

        // Function to add favourite offers
        public function addToFavourites(OffersListRequest $request) {
            // Create the session variable favourites
            $favourites = $request->session()->get('favourites', []);
            // Save value from form
            array_push($favourites, $request->input('offername'));
            // Put the given value to the sessiono
            $request->session()->put('favourites', $favourites);
            // Redirect to page who sent the request
            return redirect(url()->previous());
        }

        // Function to remove the favourite offers
        public function removeFromFavourites(OffersListRequest $request) {
            // Delete all favourite offers
            $request->session()->flush();
            return redirect(url()->previous());
        }
    }
?>