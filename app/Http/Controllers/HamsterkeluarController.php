<?php

namespace App\Http\Controllers;

use App\hamsterkeluar;
use App\hamsterstock;
use Illuminate\Http\Request;

class HamsterkeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hamster = hamsterkeluar::with('hamsterstock')->get();
        return view('hamsterkeluar.index', compact('hamster'));
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
        return redirect()->route('hamsterkeluar.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\hamsterkeluar  $hamsterkeluar
     * @return \Illuminate\Http\Response
     */
    public function show(hamsterkeluar $hamsterkeluar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hamsterkeluar  $hamsterkeluar
     * @return \Illuminate\Http\Response
     */
    
}
