<?php

namespace App\Http\Controllers;

use App\Models\section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validaterdData = $request->validate([
            'nomor' => 'required',
            'nama_section' => 'required',
            'keterangan_section' => 'required',
        ]);
        section::create($validaterdData);
        return redirect('/pertanyaan')->with('success', 'Section berhasil ditambahkan');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\section  $section
     * @return \Illuminate\Http\Response
     */
    public function show(section $section)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit(section $section)
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, section $section)
    {
        $validatedData = $request->validate([
            'nomor' => 'required',
            'nama_section' => 'required',
            'keterangan_section' => 'required',
        ]);
        // $validatedData['deskripsi'] = $request['deskripsi'];
        $section->update($validatedData);
        return redirect('/pertanyaan')->with('success', 'Section telah diupdate');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy(section $section)
    {
        // echo '<pre>';print_r($section);exit;
        $section->delete();
        return redirect('/pertanyaan')->with('success', 'Section telah dihapus');
    }
}
