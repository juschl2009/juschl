<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PathController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function dsgvo() {
        return view('dsgvo');
    }
}
