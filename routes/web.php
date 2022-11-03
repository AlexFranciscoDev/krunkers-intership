<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OfertaController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\CompanyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});

/****** RUTAS RELACIONADAS CON OFERTAS ******/

// Route display offers
Route::get('offers', [OfferController::class, 'displayOffer']);
// Ruta crear oferta
Route::get('createOffer', [OfferController::class, 'displayCreateOffer']);
// Ruta para la validación de crear oferta
Route::post('resultCreateOffer', [OfferController::class, 'createOffer']) -> name('offers.addOffer');
// Ruta mostrar descripción oferta
Route::get('offerDescription', [OfferController::class, 'displayOfferDescription']);
// Ruta para añadir ofertas a favoritos
Route::post('offers/addToFavourites', [OfferController::class, 'addToFavourites']) ->name('offers.addToFavourites');
// Ruta para eliminar ofertas de favoritos
Route::get('offers/removeFavourites', [OfferController::class, 'removeFromFavourites']) ->name('offers.removeFromFavourites');
/****** RUTAS RELACIONADAS CON FILTROS ******/

// Route to display offer by keyword
Route::post('resultKeyword', [OfferController::class, 'displayOfferKeyword']);

// Route display result by filters
// Route::post('resultFilter', [OfferController::class, 'displayOfferFilter']);

// Route to display offer by filters
Route::post('resultFilter', [OfferController::class, 'displayOfferFilter']);

// Route::post('resultFilter', [OfferController::class, 'displayOfferFilter']);
//Route::post('resultFilter', [OfferController::class, 'displayOfferArea']);


/****** RUTAS RELACIONADAS CON LOGIN I REGISTRO ******/

// Route register page
Route::get('/register', [UserController::class, 'displayForm']);
// Route to store the data from the user
Route::post('/storeUser', [UserController::class, 'storeUser']) -> name('users.addUser');

// Route login
Route::get('/login', [UserController::class, 'loginForm']);
// Route to get the information of the user and login
Route::post('/loginUser', [UserController::class, 'loginUser']);


/****** RUTAS RELACIONADAS CON ESTUDIANTES ******/

// Ruta mostrar studentProfile
Route::get('studentProfile', [StudentController::class, 'displayStudentProfile']);


/****** RUTAS RELACIONADAS CON PROFESORES ******/

// Ruta mostrar professorProfile
Route::get('professorProfile', [ProfessorController::class, 'displayProfessorProfile']);


/****** RUTAS RELACIONADAS CON AJUSTES ******/

// Ruta mostrar settings
Route::get('settings', [SettingsController::class, 'displaySettings']);
// Ruta mostrar cambio de email
Route::get('changeEmail', [EmailController::class, 'displayChangeEmail']);
// Ruta mostrar cambio de email
Route::get('changePassword', [PasswordController::class, 'displayChangePassword']);


/****** RUTAS RELACIONADAS CON EMPRESAS ******/

// Ruta de prueba para mostrar las empresas
Route::get('company', [CompanyController::class, 'displayCompanies']);



Route::get('users', [UserController::class, 'displayUsers']);