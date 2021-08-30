<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pedidosController extends Controller
{
    public function pedido () {
        return view('pedido');
    }
}
