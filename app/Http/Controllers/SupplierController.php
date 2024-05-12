<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    function index() {
        // $barang = Barang::all();
        $supplier = Supplier::where('status',1)->get();

        return view("supplier",[
            'supplier' => $supplier
        ]);
    }

    function insert(Request $request) {

        $data = new Supplier;
        $data->nama_supplier = $request->nama;
        $data->email = $request->email;
        $data->telp = $request->telp;
 
        $data->save();
        return redirect()->back();
    }

    function update(Request $request) {

        // dd($request);
        $data = Supplier::find($request->id);
        //intinya sama
        // $data = Barang::where('id_barang',$request->id);

        $data->nama_supplier = $request->nama;
        $data->email = $request->email;
        $data->telp = $request->telp;
 
        $data->save();
        return redirect()->back();
    }

    function delete(Request $request) {

        // dd($request);
        $data = Supplier::find($request->id);
        //intinya sama
        // $data = Barang::where('id_barang',$request->id);

        $data->status = 0;
 
        $data->save();
        return redirect()->back();
    }
}
