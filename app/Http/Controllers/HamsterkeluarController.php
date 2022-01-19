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
        $hamster = hamstermasuk::all();
        return view('hamstermasuk.index', compact('hamster'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'hamster_id' => 'required',
            'jenis' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required'
        ]);

        $hamster = new hamsterstock;
        $hamster->hamster_id = $request->id;
        $hamster->jenis = $request->jenis;
        $hamster->jumlah = $request->jumlah;
        $hamster->tanggal = $request->tanggal;
        $hamster->save();
        return redirect()->route('hamstermasuk.index')->with('success', 'Data Berhasil Disimpan');
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
     * @param  \App\hamstermasuk  $hamstermasuk
     * @return \Illuminate\Http\Response
     */
    
}
