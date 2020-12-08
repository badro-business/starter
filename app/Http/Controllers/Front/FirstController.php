<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function show(){
        return "Show";
    }
//Laravel Controller Middleware ??? ????? (18) :
    public function __construct(){
        //$this->middleware('auth')->except('show');
    }
//laravel passing data to views from controller - ??? ???????? (22) :
    public function viewAffiche(){
        $data = [];
        $data['name'] = "hamza";
        $data['age'] = 25;
        return view('vue1', $data);
    }
    public function getIndex(){
        $obj = new \stdclass();
        
        return view('vue1', compact('obj'));
    }


}

