<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;
use App\Models\sub_jawaban;

class KuisionerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mainQuis()
    {
        $books = form::orderBy('pertanyaan_ke', 'asc')->paginate(150);
        $pilihan = sub_jawaban::orderBy('id', 'asc')->paginate(1000);

        return view('kuisioner.quis-main', [
            'books' => $books,
            'pilihan' => $pilihan,
        ], [
            'title' => 'Main Kuisioner',
        ]);
    }

    public function index()
    {
        $books = form::orderBy('pertanyaan_ke', 'asc')->paginate(150);

        return view('kuisioner.index', [
            'books' => $books,
        ], [
            'title' => 'Kuisioner',
        ]);
    }

}
