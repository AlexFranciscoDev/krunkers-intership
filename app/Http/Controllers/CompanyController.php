<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controllers;
use App\Models\User;
use App\Models\Company;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    public $companies;

    public function __construct() {
        $this->companyModel = new Company();
    }

    // Método de prueba para mostrar las empresas
    public function displayCompanies() {
        return view('company')->with(['companies' => $this->companyModel->get()]);
    }
}
