<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pakettransaksi2;
use Illuminate\Support\Facades\DB;

class pakettransaksi2Controller extends Controller
{
    public function indexy(){
        $pakettransaksi2 = pakettransaksi2::all();
    
        return view('pakettransaksi2.indexy')->with('pakettransaksi2', $pakettransaksi2);
    }
    public function createy()
    {
        return view('pakettransaksi2.createy');
    }

    public function storey(Request $request)
    {

        pakettransaksi2::create([
            'name' => $request->name,
            'barang' => $request->barang,
            'paket' => $request->paket,
            'berat' => $request->berat,
            'grand_total' => $request->grand_total,
            'name_status' => $request->name_status,

        ]);
        return redirect(route('pakettransaksi2.indexy'));
    }

   

    public function edity($id)
    {
        $pakettransaksi2 = pakettransaksi2::whereId($id)->first();
        return view('pakettransaksi2.edity')->with('pakettransaksi2', $pakettransaksi2);
        
    }    
        public function update($id, Request $request)
       
       {
        pakettransaksi2::whereId($id)->update([ 
            'name' => $request->name,
            'barang' => $request->barang,
            'paket' => $request->paket,
            'berat' => $request->berat,
            'grand_total' => $request->grand_total,
            'name_status' => $request->name_status,
        ]);
        return redirect(route('pakettransaksi2.indexy'));
    }
    public function Delete($id)
    {
       DB::table('pakettransaksi2')->where('id',$id)->Delete();
       return redirect()->back();
    }
}
