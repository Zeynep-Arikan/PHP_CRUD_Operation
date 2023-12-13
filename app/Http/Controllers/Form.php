<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form extends Controller
{
    
    public function formsayfasi(){
        dd(asset('/bootstrap-5.3.2-dist/js/bootstrap.js'),url('/bootstrap-5.3.2-dist/js/bootstrap.js'));
        return view("form");
    }
}
