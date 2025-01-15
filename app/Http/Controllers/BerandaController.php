<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    //
    public function index() {
        $nama = 'Sajidan';
        $level = 'Admin';
        return view('home', compact('nama','level'));
    }
}
