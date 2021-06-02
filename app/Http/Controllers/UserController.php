<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\User;

class UserController extends Controller
{
    public function insertRecord() {
        $phone = new Phone(); 
        $phone->phone = "123456789"; 
        $user = new User();
        $user->name = "Abu Saleh Faysal";
        $user->email = "asfaysal.bracu@gmail.com";
        $user->password = encrypt('secret');
        $user->save();
        $user->phone()->save($phone);
        return "Record has been created successfully!";
    }

    public function fetchPhoneByUser($id) {
        $phone = User::find($id)->phone;
        return $phone;
    }

}
