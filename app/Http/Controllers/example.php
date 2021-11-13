<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class example extends Controller
{
    public function contacts(){

        return view ('/contacts');
    }
    public function home(){

        return view ('/home');
    }

    public function about(){

        return view ('/about');
    }
}
