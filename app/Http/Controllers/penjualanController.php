<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class penjualanController extends Controller
{
    public function index() {
        $side = 'penjualan';
        $data = DB::table('penjualan')
        ->join('barang', 'penjualan.id_barang', '=', 'barang.id')
        ->join('pelanggan', 'penjualan.id_pelanggan', '=', 'pelanggan.id')
        ->where('penjualan.status', 1)->get();

        return view('penjualan.penjualan', compact('side', 'data'));
    }

    public function tambahPenjualan() {
        $side = 'penjualan';
        $barang = DB::table('barang')->where('status', 1)->get();
        $pelanggan = DB::table('pelanggan')->where('status', 1)->get();
        return view('penjualan.tambahPenjualan', compact('side', 'barang', 'pelanggan'));
    }

    public function insertPenjualan(Request $req) {
        DB::table('penjualan')->insert([
            'id_barang' => $req->barang,
            'id_pelanggan' => $req->pelanggan,
            'harga_jual' => $req->hargaJual,
            'jumlah_penjualan' => 1
        ]);
        $totalSpend = DB::table('pelanggan')->where('id', $req->pelanggan)->select('total_spend')->get();
        DB::table('pelanggan')->where('id', $req->pelanggan)->update([
            'total_spend' => $totalSpend[0]->total_spend + $req->hargaJual
        ]);

        return redirect('/penjualan');
    }

    public function beliPaket(){
        DB::table('penjualan')->insert([

        ]);
    }
}
