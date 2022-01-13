<?php

namespace App\Http\Controllers;

use App\hamsterstock;
use Illuminate\Http\Request;

class HamsterstockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hamster = hamsterstock::all();
        return view('hasmter.index', compact('hamster'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hasmter.create');
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

        $hamster = new hamsterstock;
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
    public function show(hamsterstock $hamsterstock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hamsterstock  $hamsterstock
     * @return \Illuminate\Http\Response
     */
    public function edit(hamsterstock $hamsterstock,$id )
    {
        $hamster = hamsterstock::findOrFail($id);
        return view('hasmter.edit',compact('hamster'));
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

        $hamster = hamsterstock::findOrFail($id);
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
        $hamster = hamsterstock::findOrFail($id);
        $hamster->delete();
        return redirect()->route('hamster.index');
    }
}
