<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use resources\views\register;

class RegiterController extends Controller
{
    public function index (){
        return view('register');
    }
}

