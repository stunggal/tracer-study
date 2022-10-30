<?php

namespace App\Http\Controllers;

use App\Models\jawaban;
use App\Models\pertanyaan;
use App\Models\respon;
use App\Models\section;
use Illuminate\Http\Request;

class ResponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = section::all();

        return view('respon.index', [
            'sections' => $sections,
            'title' => 'Respon',
        ]);
    }

    public function perSection($section)
    {
        $pertanyaans = pertanyaan::where('section', $section)->get();
        $jawabans = jawaban::all()->sortBy('nomor');
        $sections = section::all();

        return view('respon.perSection', [
            'title' => 'Main Kuisioner',
            'pertanyaans' => $pertanyaans,
            'section' => $sections,
            'jawabans' => $jawabans,
            'nomorsection' => $section,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\respon  $respon
     * @return \Illuminate\Http\Response
     */
    public function show(respon $respon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\respon  $respon
     * @return \Illuminate\Http\Response
     */
    public function edit(respon $respon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\respon  $respon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, respon $respon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\respon  $respon
     * @return \Illuminate\Http\Response
     */
    public function destroy(respon $respon)
    {
        //
    }
}
