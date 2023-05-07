<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class pelangganController extends Controller
{
    public function index() {
        $side = 'pelanggan';
        $data = DB::table('pelanggan')->where('status', 1)->get();
        return view('pelanggan.pelanggan', compact('side', 'data'));
    }

    public function tambahPelanggan() {
        $side = 'pelanggan';
        return view('pelanggan.tambahPelanggan', compact('side'));
    }

    public function insertPelanggan(Request $req) {
        DB::table('pelanggan')->insert([
            'nama_pelanggan' => $req->namaPelanggan,
            'total_spend' => 0,
            'tanggal_bergabung' => Carbon::now(),
        ]);

        return redirect('/pelanggan');
    }

    public function editPelanggan(Request $req) {
        $side = 'pelanggan';
        $data = DB::table('pelanggan')->where('id', $req->id)->get();
        return view('pelanggan.editPelanggan', compact('side', 'data'));
    }

    public function updatePelanggan(Request $req) {
        DB::table('pelanggan')->where('id', $req->id)->update([
            'nama_pelanggan' => $req->namaPelanggan,
        ]);

        return redirect('/pelanggan');
    }

    public function deletePelanggan(Request $req) {
        DB::table('pelanggan')->where('id', $req->id)->update([
            'status' => 0
        ]);

        return redirect('/pelanggan');
    }
}
