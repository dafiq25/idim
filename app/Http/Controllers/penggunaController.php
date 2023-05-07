<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class penggunaController extends Controller
{
    public function index() {
        $side = 'pengguna';
        $data = DB::table('pengguna')->where('status', 1)->get();
        return view('pengguna.pengguna', compact('side', 'data'));
    }

    public function tambahPengguna() {
        $side = 'pengguna';
        $hak = DB::table('hakAkses')->select('id', 'nama_akses')->where('status', 1)->get();
        return view('pengguna.tambahPengguna', compact('side', 'hak'));
    }

    public function insertPengguna(Request $req) {

        DB::table('pengguna')->insert([
            'nama_pengguna' => $req->namaPengguna,
            'nama_depan' => $req->namaDepan,
            'nama_belakang' => $req->namaBelakang,
            'password' => $req->password,
            'noHp' => $req->notelp,
            'alamat' => $req->alamat,
            'id_akses' => 1
        ]);

        return redirect('/pengguna');
        // dd($req->all());
    }

    public function editPengguna(Request $req) {
        $side = 'pengguna';
        $data = DB::table('pengguna')->where('id', $req->id)->get();
        return view('pengguna.editPengguna', compact('side', 'data'));
    }

    public function updatePengguna(Request $req) {
        // dd($req->all());
        $data = DB::table('pengguna')->where('id', $req->id)->update([
            'nama_pengguna' => $req->namaPengguna,
            'nama_depan' => $req->namaDepan,
            'nama_belakang' => $req->namaBelakang,
            'password' => $req->password,
            'noHp' => $req->notelp,
            'alamat' => $req->alamat
        ]);
        return redirect('/pengguna');
    }

    public function deletePengguna(Request $req) {
        DB::table('pengguna')->where('id', $req->id)->update([
            'status' => 0
        ]);

        return redirect('/pengguna');
    }
}
