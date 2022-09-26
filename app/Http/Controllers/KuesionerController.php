<?php

namespace App\Http\Controllers;

use App\Models\form;
use App\Models\jawaban;
use App\Models\kuesioner;
use App\Models\pertanyaan;
use App\Models\section;
use Illuminate\Http\Request;

class KuesionerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = section::all();

        return view('kuesioner.index', [
            'sections' => $sections,
            'title' => 'Kuisioner',
        ]);
    }

    public function pertanyaan($section)
    {
        $pertanyaans = pertanyaan::where('section', $section)->get();
        $jawabans = jawaban::all()->sortBy('nomor');
        $sections = section::all();

        return view('kuisioner.quis-main', [
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
     * @param  \App\Models\kuesioner  $kuesioner
     * @return \Illuminate\Http\Response
     */
    public function show(kuesioner $kuesioner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kuesioner  $kuesioner
     * @return \Illuminate\Http\Response
     */
    public function edit(kuesioner $kuesioner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kuesioner  $kuesioner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kuesioner $kuesioner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kuesioner  $kuesioner
     * @return \Illuminate\Http\Response
     */
    public function destroy(kuesioner $kuesioner)
    {
        //
    }
}
