<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller

{
    // Funzione per passare il tutto al file web per il return:
    public function index() {
        return view('HomePage');
    }
}
