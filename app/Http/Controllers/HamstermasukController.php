<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hamstermasuk;
use App\hamsterstock;

class HamstermasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hamster = hamstermasuk::with('hamstermasuk')->get();
        return view('hamstermasuk.index', compact('hamster'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hamstermasuk.create');
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
            'harga' => 'required',
            'stok' => 'required'
        ]);

        $hamster = new hamstermasuk;
        $hamster->jenis = $request->jenis;
        $hamster->harga = $request->harga;
        $hamster->stok = $request->stok;
        $hamster->save();
        return redirect()->route('hamster.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\hamsterstock  $hamsterstock
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
        return view('hamster.edit',compact('hamster'));
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
            'harga' => 'required',
            'stok' => 'required'
        ]);

        $hamster = hamstermasuk::findOrFail($id);
        $hamster->jenis = $request->jenis;
        $hamster->harga = $request->harga;
        $hamster->stok = $request->stok;
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
        return redirect()->route('hamster.index');
    }
}
