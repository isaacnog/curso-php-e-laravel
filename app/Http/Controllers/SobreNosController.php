<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    /*
    public function sobrenos() {
        echo 'Sobre-nós. Agora pelo controller.';
    }
    */

    public function sobrenos() {
        return view('site.sobrenos');
    }
}
