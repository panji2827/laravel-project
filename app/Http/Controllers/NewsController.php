<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show(){
        echo 'Lelah dengan semua ini';
    }
    public function create(){
        return 'Harus Bersabar';
    }
}
