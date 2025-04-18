<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    public function showForm(){
        return view('form');
    }

    public function displayForm(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $state = $request->input('state');
        $country = $request->input('country');
        $gender = $request->input('gender');
        $phoneNum = $request->input('phNum');

        echo  "name: $name<br>";
        echo  "email: $email<br>";
        echo  "password: $password<br>";
        echo  "state: $state<br>";
        echo  "country: $country<br>";
        echo  "phNum: $phoneNum<br>";
        echo  "gender: $gender";
    }

}
