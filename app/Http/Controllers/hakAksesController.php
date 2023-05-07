<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class hakAksesController extends Controller
{
    public function index() {
        $side = 'hakAkses';
        $data = DB::table('hakAKses')->where('status', 1)->get();
        return view('hakAKses.hakAkses', compact('side', 'data'));
    }

    public function tambahHakAkses() {
        $side = 'hakAkses';
        return view('hakAkses.tambahHakAkses', compact('side'));
    }

    public function insertHakAkses(Request $req) {
        DB::table('hakAkses')->insert([
            'nama_akses' => $req->namaAkses,
            'keterangan' => $req->keterangan
        ]);
        return redirect('hakAkses');
    }

    public function editHakAkses(Request $req) {
        $side = 'hakAkses';
        $data = DB::table('hakAkses')->where('id', $req->id)->get();

        return view('hakAkses.editHakAkses', compact('side', 'data'));
    }

    public function updateHakAkses(Request $req) {
        DB::table('hakAkses')->where('id', $req->id)->update([
            'nama_akses' => $req->namaAkses,
            'keterangan' => $req->keterangan
        ]);

        return redirect('/hakAkses');
    }

    public function deleteHakAkses(Request $req) {
        DB::table('hakAKses')->where('id', $req->id)->update([
            'status' => 0
        ]);
        return redirect('/hakAkses');
    }
}
