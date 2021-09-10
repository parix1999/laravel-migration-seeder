<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;


class Home extends Controller

{
    // Funzione per passare il tutto al file web per il return:
    public function index() {
        // return view('HomePage');

        $allTrip = Trip::all();
        
        // Devo passare i dati alla view, che si occupa di mostrarli cosi:
        // Specifico prima il file View e poi dentro compact ci metto i dati da passare:
        return view('HomePage', compact('allTrip'));

    }
}
