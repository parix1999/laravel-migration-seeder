<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;


class Home extends Controller

{
    // Funzione per passare il tutto alla view;
    public function index() {
        // return view('HomePage');

        $allTrip = Trip::all();
        $americanTrip = Trip::where('state', '=', 'United States')->get();
        $englandTrip = Trip::where('state', '=', 'England')->get();
        $irelandTrip = Trip::where('state', '=', 'Ireland')->get();
        $canedianTrip = Trip::where('state', '=', 'Canada')->get();

        // $americanTrip = Trip::table('Trips')->where('state', '=', 'United States')->get();
        
        // Devo passare i dati alla view, che si occupa di mostrarli cosi:
        // Specifico prima il file View e poi dentro compact ci metto i dati da passare:
        return view('HomePage', compact('allTrip', 'americanTrip', 'englandTrip', 'irelandTrip', 'canedianTrip'));

    }
}
