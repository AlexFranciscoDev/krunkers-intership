<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\LogInRequest;
use Illuminate\Database\QueryException;
use App\Exceptions\UploadFileException;
use App\Services\UploadFileService;


class UserController extends Controller
{
    // variable to store the user model
    public $userModel;
    private $error = '';
    private $uploadService;

    public function __construct()
    {
        // Inicialize the model
        $this->userModel = new User();
    }

    public function displayForm()
    {

        return view('registerUser');
    }

    // Function to create/register a new user 
    public function storeUser(StoreUserRequest $request, UploadFileService $UploadFileService)
    {
        $request->flash();
        $success = null;
        try {
            $file = $request->file('userImage');
            $this->uploadService = $UploadFileService;
            $this->uploadService->uploadFile($file);
            // Save the data from the user
            // Name
            $name = $request->input('name');
            // Last name
            $lastName = $request->input('lastName');
            // Email
            $email = $request->input('email');
            // Group
            $group = $request->input('group');
            // Phone number
            $phone = $request->input('phone');
            // Password
            $password = $request->input('password');
            // Password confimation
            $passwordConfirm = $request->input('passwordConfirm');
            // Image
            $image = $request->userImage->getClientOriginalName();
            $success = $this->userModel->saveUser($name, $lastName, $email, $group, $phone, $password, $image);
        } catch (UploadFileException $exception) {
            $this->error = $exception->message();
        }
         catch (QueryException $exception) {
            return back()->withError('Usuario con email '. $email . ' ya existe')->withInput();
        }
        return redirect()->action([UserController::class, 'displayForm'], ['success' => $success])->withError($this->error);
    }

    public function loginForm() {
        return view('login');
    }

    public function loginUser(LogInRequest $request) {
        // Save data from the user
        $email = $request->input('email');
        $password = $request->input('password');
        // $user = User::findOrFail($request->input('user_id'));
        //$user = User::findOrFail(1);
        $success = count($this->userModel->searchUser($email, $password)) == 1; 
        if ($success) {
        //if ($user) {
            //return 'usuari loguejat';
            return redirect()->action([UserController::class, 'loginForm'], ['success' => $success]);
        } else {
            return redirect()->action([UserController::class, 'loginForm'], ['success' => $success]);
        }
    }
    public function displayUsers() {
        $users = $this->userModel->get();
        return view('listUsers')->with(['users' => $users]);
    }
}
