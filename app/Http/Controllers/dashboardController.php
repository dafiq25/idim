<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    public function dashboard(){
        $side = 'dashboard';
        $pengguna = DB::table('pengguna')->where('status', 1)->count();
        $pembelian = DB::table('pembelian')->where('status', 1)->count();
        $penjualan = DB::table('penjualan')->where('status', 1)->count();
        $beli = DB::table('pembelian')->select('harga_beli')->where('status', 1)->get();
        $beliLength = DB::table('pembelian')->select('harga_beli')->where('status', 1)->count();
        $jual = DB::table('penjualan')->select('harga_jual')->where('status', 1)->get();
        $jualLength = DB::table('penjualan')->select('harga_jual')->where('status', 1)->count();

        $barang = DB::table('barang')->select('nama_barang')->where('status', 1)->get();
        $totalJual = 0;
        for ($i=0; $i < $jualLength; $i++) { 
            $totalJual += $jual[$i]->harga_jual;
        }

        $totalBeli = 0;
        for ($i=0; $i < $beliLength; $i++) { 
            $totalBeli += $beli[$i]->harga_beli;
        }

        if($totalBeli > $totalJual){
            $laba = ($totalBeli - $totalJual) *-1;
        } else {
            $laba = $totalBeli - $totalJual;
        }

        // dd($laba);
        return view('dashboard', compact('side', 'pengguna', 'pembelian', 'penjualan', 'laba', 'barang'));
    }
}
