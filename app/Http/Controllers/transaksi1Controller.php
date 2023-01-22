<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaksi1;
use Illuminate\Support\Facades\DB;

class transaksi1Controller extends Controller
{
    public function index(){
        $transaksi1 = transaksi1::all();
    
        return view('transaksi1.index')->with('transaksi1', $transaksi1);
    }
    public function create()
    {
        return view('transaksi1.create');
    }

    public function store(Request $request)
    {

        transaksi1::create([
            'name' => $request->name,
            'barang' => $request->barang,
            'harga' => $request->harga,
            'berat' => $request->berat,
            'status' => $request->status,

        ]);
        return redirect(route('transaksi1.index'));
    }

   

    public function edit($id)
    {
        $transaksi1 = transaksi1::whereId($id)->first();
        return view('transaksi1.edit')->with('transaksi1', $transaksi1);
        
    }    
        public function update($id, Request $request)
       
       {
        transaksi1::whereId($id)->update([ 
            'name' => $request->name,
            'barang' => $request->barang,
            'harga' => $request->harga,
            'berat' => $request->berat,
            'status' => $request->status,
        ]);
        return redirect(route('transaksi1.index'));
    }
    public function Delete($id)
    {
       DB::table('transaksi1')->where('id',$id)->Delete();
       return redirect()->back();
    }
}
