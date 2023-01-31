<?php

namespace App\Http\Controllers;

use App\Models\paket1;
use Illuminate\Http\Request;


class paket1controller extends Controller
{
    public function index1(){
        $paket1 = paket1::all();
       
        return view('paket1.index1')->with('paket1', $paket1);
    }

    public function add()
    {
        return view('paket1.add');
    }

    public function store2(Request $request){
        paket1::insert([
        'name' => $request->name,
        'harga' => $request->harga,
        ]);
        return redirect(route('paket1.index1'));
    }
    public function edd($id)
    {
        $paket1 = Paket1::whereId($id)->first();
        return view('Paket1.edd')->with('paket1', $paket1);
    }



    public function update1($id, Request $request)
    {

        Paket1::whereId($id)->update([
            'name' => $request->name,
           'harga' => $request->harga,
        ]);

        return redirect(route('paket1.index1'));
    }
    public function Delete($id){
        paket1::whereid($id)->Delete();
        return redirect()->back();
    }
}
