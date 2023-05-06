<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class penggunaController extends Controller
{
    public function index() {
        $side = 'pengguna';
        return view('pengguna.pengguna', compact('side'));
    }

    public function tambahPengguna() {
        $side = 'pengguna';
        return view('pengguna.tambahPengguna', compact('side'));
    }

    public function insertPengguna(Request $req) {

        DB::table('pengguna')->insert([
            'namaPengguna' => $req->namaPengguna,
            'namaDepan' => $req->namaDepan,
            'namaBelakang' => $req->namaBelakang,
            'password' => $req->password,
            'noHp' => $req->notelp,
            'alamat' => $req->alamat,
            'id_akses' => 1
        ]);

        return redirect('/pengguna');
        // dd($req->all());
    }
}
