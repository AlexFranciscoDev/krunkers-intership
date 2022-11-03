<?php

    namespace App\Http\Controllers;

    use App\Http\Controllers\Controllers;
    use App\Models\User;
    // use App\Models\Offer;


    // Clase de ofertaController
    class EmailController extends Controller {

        // Metodo para mostrar la vista donde cambia el email
        public function displayChangeEmail() {
            return view('changeEmail');
        }
        
    }
?>