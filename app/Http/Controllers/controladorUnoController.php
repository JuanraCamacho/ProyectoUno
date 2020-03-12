<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorUnoController extends Controller
{
    public function index(){
        return view("VistaUno");
    }
}
