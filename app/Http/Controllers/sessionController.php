<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class sessionController extends Controller
{
    public function setSession(Request $request){
        Session::put('name',"Nikhil Verma");
        return "session is set";
    }

    public function getSession(Request $request){
        $name = Session::get("name");
        return "session is {$name}";
    }

    public function removeSession(Request $request){
        Session::forget("name");
        return "session is deleted";
        
    }
}
