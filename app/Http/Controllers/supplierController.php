<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class supplierController extends Controller
{
    public function index() {
        $side = 'supplier';
        $data = DB::table('supplier')->where('status', 1)->get();

        return view('supplier.supplier', compact('side', 'data'));
    }

    public function tambahSupplier() {
        $side = 'supplier';
        return view('supplier.tambahSupplier', compact('side'));
    }

    public function insertSupplier(Request $req) {
        DB::table('supplier')->insert([
            'nama_suplier' => $req->namaSupplier,
            'alamat' => $req->alamatSupplier,
            'kontak' => $req->kontakSupplier
        ]);
        
        return redirect('/supplier');
    }
}
