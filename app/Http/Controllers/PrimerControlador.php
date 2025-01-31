<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    function index(){
        return view('contact', ['name' => 'Andres']);
    }

    function index2(){
        return view('contact', ['name' => 'Pedro']);
    }

    function index3(){
        return view('contact', ['name' => 'Juan']);
    }
}
