<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    /*
    public function principal() {
        echo 'Olá, estamos no controller. Seja bem-vindo';
    }
    */

    public function principal() {
        return view('site.principal');
    }
}
