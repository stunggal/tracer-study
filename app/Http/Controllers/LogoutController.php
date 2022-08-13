<?php

namespace App\Http\Controllers;

use App\Models\logout;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //logout view
        return view(
            'logout.index',
            ['title' => 'Logout']
        );
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
     * @param  \App\Models\logout  $logout
     * @return \Illuminate\Http\Response
     */
    public function show(logout $logout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\logout  $logout
     * @return \Illuminate\Http\Response
     */
    public function edit(logout $logout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\logout  $logout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, logout $logout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\logout  $logout
     * @return \Illuminate\Http\Response
     */
    public function destroy(logout $logout)
    {
        //
    }
}
