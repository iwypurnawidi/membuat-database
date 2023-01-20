<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class pelanggancontroller extends Controller
{
    public function index(){
        $pelanggan = pelanggan::all();
       
        return view('pelanggan.index')->with('pelanggan', $pelanggan);
    }
    public function create()
    {
        return view('pelanggan.create');
    }

    public function store(Request $request)
    {
        pelanggan::create([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
        ]);
        return redirect(route('pelanggan.index'));
    }
    public function edit($id)
    {
        $pelanggan = Pelanggan::whereId($id)->first();
        return view('Pelanggan.edit')->with('pelanggan', $pelanggan);
    }



    public function update($id, Request $request)
    {

        Pelanggan::whereId($id)->update([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
        ]);

        return redirect(route('pelanggan.index'));
    }
    public function delete($id)
    {
        Pelanggan::whereId($id)->delete();
        return redirect()->back();
    }

   
}
