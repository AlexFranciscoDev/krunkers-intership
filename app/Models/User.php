<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function saveUser($name, $lastName, $email, $group, $phone, $password, $userImage) {
        // Create a new User instance
        $newUser = new User();
        // Set the properties to the new user
        $newUser->name = $name;
        $newUser->lastName = $lastName;
        $newUser->email = $email;
        $newUser->group = $group;
        $newUser->phone = $phone;
        $newUser->password = $password;
        $newUser->userImg = '../imageUsers/'.$userImage;
        return $newUser->save();
    }

    public function scopeSearchUser($query, $email, $password) {
        return $query->where('email', '=', $email)->where('password', '=', $password)->get();
    }
}
