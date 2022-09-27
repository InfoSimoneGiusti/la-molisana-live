<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
})->name('home');

Route::get('/prodotti', function () {

    $pasta = config('pasta-file'); //pasta-file è il nome del file dentro la cartella config

    $lunga = [];
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
    }

    return view('prodotti', compact("lunga", "corta", "cortissima")); //uguale a ['lunga' => $lunga, 'corta' => $corta, 'cortissima' => $cortissima]

})->name('prodotti');

Route::get('/news', function () {
    return view('news');
})->name('news');
