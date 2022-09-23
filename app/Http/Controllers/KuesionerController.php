<?php

namespace App\Http\Controllers;

use App\Models\form;
use App\Models\kuesioner;
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
        $books = form::orderBy('pertanyaan_ke', 'asc')->paginate(150);

        return view('kuesioner.index', [
            'books' => $books,
            'title' => 'Kuisioner',
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
