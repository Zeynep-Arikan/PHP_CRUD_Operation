<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function site()
    {

        // view dosyasında web sayfasına neyi çağırmak istiyorsan onu yaz
        return view('home');
    }
    
}
