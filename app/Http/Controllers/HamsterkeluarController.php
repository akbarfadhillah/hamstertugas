<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hamsterkeluar;
use App\hamsterstock;

class HamsterkeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hamsterkeluar = hamsterkeluar::with('hamsterstock')->get();
        return view('hamsterkeluar.index', compact('hamsterkeluar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hamsterkeluar = hamsterkeluar::all();
        $hamsterstock = hamsterstock::all();
        return view('hamsterkeluar.create',compact('hamsterkeluar','hamsterstock'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'jumlah' => 'required',
            'hamster_id' => 'required'
        ]);

        $hamsterkeluar = new hamsterkeluar;
        $hamsterstock = hamsterstock::where(['id' => $request['hamster_id']])->first();
        $hamsterkeluar->tanggal = $request->tanggal;
        $hamsterkeluar->jumlah = $request->jumlah;
        $hamsterkeluar->hamster_id = $request->hamster_id;
        $hamsterkeluar->save();
        return redirect()->route('hamsterkeluar.index')->with('success', 'Data Berhasil Disimpan');
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
        $hamster = hamsterkeluar::findOrFail($id);
        return view('hamsterkeluar.edit',compact('hamster'));
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
        $request->validate([
            'jenis' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required'
        ]);

        $hamster = hamsterkeluar::findOrFail($id);
        $hamster->jenis = $request->jenis;
        $hamster->jumlah = $request->jumlah;
        $hamster->tanggal = $request->tanggal;
        $hamster->save();
        return redirect()->route('hamster.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hamster = hamsterkeluar::findOrFail($id);
        $hamster->delete();
        return redirect()->route('hamsterkeluar.index');
    }
}
