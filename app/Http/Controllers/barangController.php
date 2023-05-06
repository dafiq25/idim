<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class barangController extends Controller
{
    public function index(){
        $side = 'barang';
        return view('barang.barang', compact('side'));
    }
}
