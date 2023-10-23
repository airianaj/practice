<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloworldController extends Controller
{
    public function helloworld(){
        return view('helloworld');
    }

}
