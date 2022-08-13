<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class error extends Controller
{
    //return view('error');
    public function index()
    {
        return view(
            'error.index',
            ['title' => 'Error']
        );
    }
}
