<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pembelianController extends Controller
{
    public function index() {
        $side = 'pembelian';
        $data = DB::table('pembelian')
        ->join('barang', 'pembelian.id_barang', '=', 'barang.id')
        ->join('supplier', 'pembelian.id_supplier', '=', 'supplier.id')
        ->where('pembelian.status', 1)->get();
        return view('pembelian.pembelian', compact('side', 'data'));
    }

    public function tambahPembelian() {
        $side = 'pembelian';
        $barang = DB::table('barang')->where('status', 1)->get();
        $supplier = DB::table('supplier')->where('status', 1)->get();
        return view('pembelian.tambahPembelian', compact('side', 'barang', 'supplier'));
    }

    public function insertPembelian(Request $req) {
        DB::table('pembelian')->insert([
            'id_barang' => $req->barang,
            'id_supplier' => $req->supplier,
            'harga_beli' => $req->hargaBeli,
            'jumlah_pembelian' => 1
        ]);
        return redirect('/pembelian');
    }
}
