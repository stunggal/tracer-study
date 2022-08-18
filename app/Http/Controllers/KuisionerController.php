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
        $data['books'] = form::orderBy('pertanyaan_ke', 'asc')->paginate(15);
        $data['pilihan'] = sub_jawaban::orderBy('id', 'asc')->paginate(10);

        // return view('ajax-book-crud',$data);
        return view('kuisioner.quis-main', $data, [
            'title' => 'Master Kuisioner',
        ]);
    }

}
