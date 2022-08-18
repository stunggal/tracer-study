<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;
use App\Models\sub_jawaban;

class AjaxFORMCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['books'] = form::orderBy('pertanyaan_ke', 'asc')->paginate(15);
        $data['pilihan'] = sub_jawaban::orderBy('id', 'asc')->paginate(10);

        // return view('ajax-book-crud',$data);
        return view('kuisioner.master', $data, [
            'title' => 'Master Kuisioner',
        ]);
    }

    public function index1()
    {
        $data['books'] = form::orderBy('id', 'desc')->paginate(5);

        // return view('ajax-book-crud',$data);
        return view('ajax-book-crud', $data, [
            'title' => 'Master Kuisioner',
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book   =   form::updateOrCreate(
            [
                'id' => $request->id
            ],
            [
                'pertanyaan_ke' => $request->pertanyaan_ke,
                'pertanyaan' => $request->pertanyaan,
                'jenis_jawaban' => $request->jenis_jawaban,
                'nim_mhs' => $request->nim_mhs
            ]
        );

        return response()->json(['success' => true]);
    }

    public function pilihanJawaban(Request $request)
    {
        $pilihan   =   sub_jawaban::updateOrCreate(
            [
                'id' => $request->id
            ],
            [
                'id_pertanyaan' => $request->id_pertanyaan,
                'pilihan_jawaban' => $request->pilihan_jawaban,
            ]
        );

        return response()->json(['success' => true]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $where = array('id' => $request->id);
        $book  = form::where($where)->first();

        return response()->json($book);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $book = form::where('id', $request->id)->delete();

        return response()->json(['success' => true]);
    }

    public function destroyPilihan(Request $request)
    {
        $book = sub_jawaban::where('id', $request->id)->delete();

        return response()->json(['success' => true]);
    }
}
