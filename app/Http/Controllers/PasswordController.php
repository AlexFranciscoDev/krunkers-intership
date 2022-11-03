<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordController extends Controller
{
    // Método para mostrar la vista donde cambias la contraseña
    public function displayChangePassword() {
        return view('changePassword');
    }
}
