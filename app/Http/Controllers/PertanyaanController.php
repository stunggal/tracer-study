<?php

namespace App\Http\Controllers;

use App\Models\jawaban;
use App\Models\pertanyaan;
use App\Models\section;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaans = pertanyaan::all();

        $pertanyaansSection1 = $pertanyaans->where('section', '1')->sortBy('nomor');
        $pertanyaansSection2 = $pertanyaans->where('section', '2')->sortBy('nomor');
        $pertanyaansSection3 = $pertanyaans->where('section', '3')->sortBy('nomor');
        $pertanyaansSection4 = $pertanyaans->where('section', '4')->sortBy('nomor');
        $pertanyaansSection5 = $pertanyaans->where('section', '5')->sortBy('nomor');
        $pertanyaansSection6 = $pertanyaans->where('section', '6')->sortBy('nomor');
        $pertanyaansSection7 = $pertanyaans->where('section', '7')->sortBy('nomor');
        $pertanyaansSection8 = $pertanyaans->where('section', '8')->sortBy('nomor');
        $pertanyaansSection9 = $pertanyaans->where('section', '9')->sortBy('nomor');

        $jawabans = jawaban::all()->sortBy('nomor');

        $section = section::all();



        // return view('ajax-book-crud',$data);
        return view('pertanyaan.index', [
            'title' => 'Master Kuisioner',
            'pertanyaans' => $pertanyaans,
            'pertanyaansSection1' => $pertanyaansSection1,
            'pertanyaansSection2' => $pertanyaansSection2,
            'pertanyaansSection3' => $pertanyaansSection3,
            'pertanyaansSection4' => $pertanyaansSection4,
            'pertanyaansSection5' => $pertanyaansSection5,
            'pertanyaansSection6' => $pertanyaansSection6,
            'pertanyaansSection7' => $pertanyaansSection7,
            'pertanyaansSection8' => $pertanyaansSection8,
            'pertanyaansSection9' => $pertanyaansSection9,
            'jawabans' => $jawabans,
            'section' => $section,
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
        $validaterdData = $request->validate([
            'pertanyaan' => 'required',
            'section' => 'required',
            'nomor' => 'required',
            'jenis' => 'in:paragraf,radio,combo,text,range',
        ]);
        pertanyaan::create($validaterdData);
        return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function show(pertanyaan $pertanyaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function edit(pertanyaan $pertanyaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pertanyaan $pertanyaan)
    {
        $validatedData = $request->validate([
            'nomor' => 'required',
            'pertanyaan' => 'required',
            'section' => 'required',
            'jenis' => 'in:paragraf,radio,combo,text,range',
        ]);
        $validatedData['deskripsi'] = $request['deskripsi'];
        $pertanyaan->update($validatedData);
        return redirect('/pertanyaan')->with('success', 'Pertanyaan telah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pertanyaan $pertanyaan)
    {
        $pertanyaan->delete();
        return redirect('/pertanyaan')->with('success', 'Pertanyaan telah dihapus');
    }
}
