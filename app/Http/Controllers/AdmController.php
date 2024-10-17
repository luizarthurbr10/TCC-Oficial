<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmController extends Controller
{
    public function homeAdministrador(){
        if(session('nivel')==='admin'){
            return view('pages.homeAdm');
        }else{
            return view('home');
        }
    }
}
