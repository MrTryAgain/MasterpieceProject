<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HiPageController extends Controller{    
    public function showAll() {
        return view('hiPage');
        }
}


