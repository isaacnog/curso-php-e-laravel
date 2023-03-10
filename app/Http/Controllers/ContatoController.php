<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    /*
    public function contato() {
        echo 'Nos contate pelo controller';
    }
    */

    public function contato() {
        return view('site.contato');
    }
}
