<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Master extends Controller
{
    public function capitec(){
        return view('loans.capitec');
    }
}
