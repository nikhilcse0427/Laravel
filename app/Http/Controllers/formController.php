<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

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
        $gender = $request->input('phNum');

        // echo  "name: $name<br>";
        // echo  "email: $email<br>";
        // echo  "password: $password<br>";
        // echo  "state: $state<br>";
        // echo  "country: $country<br>";
        // echo  "phNum: $phoneNum<br>";
        // echo  "gender: $gender";

        //insert query
        $customer = new Customer;
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->password = bcrypt($request->input('password')); // Hash the password
        $customer->state = $request->input('state');
        $customer->country = $request->input('country');
        $customer->gender = $request->input('gender');
        $customer->PhoneNum = $request->input('phNum'); // Ensure column name matches database
        $customer->save();
    }

}
