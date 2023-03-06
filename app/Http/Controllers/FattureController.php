<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FattureController extends Controller
{
    public function fattureView()
    {
        return view('fatture');
    }
}
