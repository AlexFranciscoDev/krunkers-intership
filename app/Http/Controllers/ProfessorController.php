<?php

    namespace App\Http\Controllers;

    use App\Http\Controllers\Controllers;
    use App\Models\User;
    // use App\Models\Offer;


    // Clase de ofertaController
    class ProfessorController extends Controller {

        // Metodo para mostrar el perfil del alumno
        public function displayProfessorProfile() {
            return view('professorProfile');
        }
        
    }
?>