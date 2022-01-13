<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Userscontroller extends Controller
{
    //
    function loadview(){
        return view('index');
    }
    function loadabout(){
        return view('about');
    }
    function loadservice(){
        return view('service');
    }
    function loadtest($user){
        return view('test',['user'=>$user]);
    }
}
