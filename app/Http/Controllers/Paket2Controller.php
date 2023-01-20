<?php

namespace App\Http\Controllers;
use App\Models\pakettransaksi2;
use Illuminate\Http\Request;

class Paket2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil = pakettransaksi2::all();
        return view('pakettransaksi2.indexy', compact('mobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mobil = new pakettransaksi2;
        return view('pakettransaksi2.createy' , compact('mobil'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mobil = new pakettransaksi2;
        $mobil->name = $request->name;
        $mobil->barang = $request->barang;
        $mobil->paket = $request->paket;
        $mobil->berat = $request->berat;
        $mobil->grand_total = $request->grand_total;
        $mobil->name_status = $request->name_status;
        $mobil->save();

        return redirect('pakettransaksi2');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobil = pakettransaksi2::find($id);
        return view('pakettransaksi2.edity', compact('mobil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = pakettransaksi2::find($id);
        $mobil->name = $request->name;
        $mobil->barang = $request->barang;
        $mobil->paket = $request->paket;
        $mobil->berat = $request->berat;
        $mobil->grand_total = $request->grand_total;
        $mobil->name_status = $request->name_status;
        $mobil->save();

        return redirect('pakettransaksi2');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
            $model = pakettransaksi2::find($id);
            $model->delete();
            return redirect('pakettransaksi2');
        
    }
}
