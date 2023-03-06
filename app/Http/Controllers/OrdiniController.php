<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdiniController extends Controller
{
    public function ordiniView()
    {
        return view('ordini');
    }
}
