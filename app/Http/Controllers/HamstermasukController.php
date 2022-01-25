<?php

namespace App\Http\Controllers;

use App\hamstermasuk;
use App\hamsterstock;
use Illuminate\Http\Request;

class HamstermasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hamstermasuk = hamstermasuk::with('hamsterstock')->get();
        return view('hamstermasuk.index', compact('hamstermasuk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hamstermasuk = hamstermasuk::all();
        $hamsterstock = hamsterstock::all();
        return view('hamstermasuk.create',compact('hamstermasuk','hamsterstock'));
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
            'jenis' => 'required',
            'tanggal' => 'required',
            'jumlah' => 'required',
            'hamster_id' => 'required'
        ]);

        $hamstermasuk = new hamstermasuk;
        $hamsterstock = hamsterstock::where(['id' => $request['hamster_id']])->first();
        $hamstermasuk->jenis = $request->jenis;
        $hamstermasuk->tanggal = $date->tanggal;
        $hamstermasuk->jumlah = $request->jumlah;
        $hamstermasuk->hamster_id = $request->hamster_id;
        $hamstermasuk->save();
        return redirect()->route('hamstermasukk.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\hamstermasuk  $hamstermasuk
     * @return \Illuminate\Http\Response
     */
    public function show(hamstermasuk $hamstermasuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hamsterstock  $hamsterstock
     * @return \Illuminate\Http\Response
     */
    public function edit(hamstermasuk $hamstermasuk,$id )
    {
        $hamster = hamstermasuk::findOrFail($id);
        return view('hamstermasuk.edit',compact('hamster'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\hamsterstock  $hamsterstock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required'
        ]);

        $hamster = hamstermasuk::findOrFail($id);
        $hamster->jenis = $request->jenis;
        $hamster->jumlah = $request->jumlah;
        $hamster->tanggal = $request->tanggal;
        $hamster->save();
        return redirect()->route('hamster.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hamsterstock  $hamsterstock
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hamster = hamstermasuk::findOrFail($id);
        $hamster->delete();
        return redirect()->route('hamstermasuk.index');
    }
}
