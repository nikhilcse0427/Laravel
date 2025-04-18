<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
class cookieController extends Controller
{
    public function setCookie(){
        Cookie::queue('name','Nikhil Verma',1);
        Cookie::queue('roll','8',1);
        return "Cookie is set";
    }

    public function getCookie(){
        $name=Cookie::get('name');
        $roll=Cookie::get('roll');
        return "cookies is {$name} and {$roll}";
    }

    public function removeCookie(){
        Cookie::expire('name');
        Cookie::expire('roll');
    }
}
