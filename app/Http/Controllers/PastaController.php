<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PastaController extends Controller
{


    public function listProducts() {

        $pasta = config('pasta-file'); //pasta-file è il nome del file dentro la cartella config

        /*$lunga = [];
        $corta = [];
        $cortissima = [];

        foreach($pasta as $formato) {
            if ($formato['tipo'] == 'lunga') {
                $lunga[] = $formato;
            } else if ( $formato['tipo'] == 'corta' ) {
                $corta[] = $formato;
            } else {
                $cortissima[] = $formato;
            }
        }*/
        //return view('prodotti', compact("lunga", "corta", "cortissima")); //uguale a ['lunga' => $lunga, 'corta' => $corta, 'cortissima' => $cortissima]

        return view('prodotti', ['formati' => $pasta]);
    }


    public function productDetail($id) {

        $pasta = config('pasta-file');
        $dettaglioPasta = $pasta[$id];

        return view('pagina-dettaglio', ['formato' => $dettaglioPasta ]);

    }

}


