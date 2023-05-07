<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class barangController extends Controller
{
    public function index() {
        $side = 'barang';
        $data = DB::table('barang')->get();
        return view('barang.barang', compact('side', 'data'));
    }

    public function tambahBarang() {
        $side = 'barang';
        $pengguna = DB::table('pengguna')->select('id', 'nama_pengguna')->where('status', 1)->get();
        // dd($pengguna);
        return view('barang.tambahBarang', compact('side', 'pengguna'));
    }

    public function insertBarang(Request $req) {
        DB::table('barang')->where('id', $req->id)->insert([
            'nama_barang' => $req->namaBarang,
            'keterangan' => $req->keterangan,
            'satuan' => $req->satuan,
            'id_pengguna' => $req->idPengguna
        ]);

        return redirect('/barang');
    }

    public function editBarang(Request $req) {
        $side="barang";
        $data = DB::table('barang')->where('id', $req->id)->get();
        $pengguna = DB::table('pengguna')->select('id', 'nama_pengguna')->where('status', 1)->get();
        $penggunaNow = DB::table('pengguna')->select('id', 'nama_pengguna')->where('id', $data[0]->id_pengguna)->get();
        // dd($penggunaNow[0]->id);
        return view('barang.editBarang', compact('side', 'data', 'pengguna', 'penggunaNow'));
    }

    public function updateBarang(Request $req) {
        $idPengguna = DB::table('pengguna')->select('id_pengguna')
        ->join('barang', 'pengguna.id', '=', 'barang.id_pengguna')
        ->where('barang.id', $req->id)->get();
        // dd($idPengguna);
        
        if(!$req->idPengguna){
            DB::table('barang')->where('id', $req->id)->update([
                'nama_barang' => $req->namaBarang,
                'keterangan' => $req->keterangan,
                'satuan' => $req->satuan,
                'id_pengguna' => $idPengguna[0]->id_pengguna
            ]);
        } else {
            DB::table('barang')->where('id', $req->id)->update([
                'nama_barang' => $req->namaBarang,
                'keterangan' => $req->keterangan,
                'satuan' => $req->satuan,
                'id_pengguna' =>$req->idPengguna
            ]);
        }

        return redirect('/barang');
    }

    public function deleteBarang(Request $req) {
        DB::table('barang')->where('id', $req->id)->update([
            'status' => 0
        ]);

        return redirect('/barang');
    }
}
