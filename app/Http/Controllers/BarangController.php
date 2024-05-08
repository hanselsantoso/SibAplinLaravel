<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    function index() {
        // $barang = Barang::all();
        $barang = Barang::where('status_barang',1)->get();

        return view("list",[
            'barang' => $barang
        ]);
    }

    function insert(Request $request) {

        $data = new Barang;
        $data->nama_barang = $request->nama;
        $data->harga_barang = $request->harga;
        $data->stok_barang = $request->stok;
 
        $data->save();
        return redirect()->back();
    }

    function update(Request $request) {

        // dd($request);
        $data = Barang::find($request->id);
        //intinya sama
        // $data = Barang::where('id_barang',$request->id);

        $data->nama_barang = $request->nama;
        $data->harga_barang = $request->harga;
        $data->stok_barang = $request->stok;
 
        $data->save();
        return redirect()->back();
    }

    function delete(Request $request) {

        // dd($request);
        $data = Barang::find($request->id);
        //intinya sama
        // $data = Barang::where('id_barang',$request->id);

        $data->status_barang = 0;
 
        $data->save();
        return redirect()->back();
    }
}
