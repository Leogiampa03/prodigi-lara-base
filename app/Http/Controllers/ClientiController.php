<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientiController extends Controller
{
    public function clientiView()
    {
        $nomeNonPassato = ['Mario','Luigi','Federico'];
        $cognomeNonPassato = ['Gerry','Catarri','Verace'];

        $TitoloClienti = ['Titolo Clienti'];
        return view('clienti', [
            "nomi"=> $nomeNonPassato,
            "cognomi"=> $cognomeNonPassato,
        ]);

    }
}
