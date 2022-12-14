<?php

namespace App\Http\Controllers;

use App\Models\dashboard;
use App\Models\section;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_users = User::all();

        $sections = section::all();

        // section 0
        $data_registeredUser = $data_users->count();
        $data_haveFilledOutTheForm = $data_users->where('isFilledOutTheForm', '1')->count();

        // section 1 & 2
        // graduated
        $data_parameterTahunAll = [];
        foreach ($data_users as $data) {
            array_push($data_parameterTahunAll, $data->tahun_lulus);
        }
        $data_parameterTahun = array_unique($data_parameterTahunAll);
        asort($data_parameterTahun);
        $data_graduated_tahun = [];
        $data_graduated_value = [];
        foreach ($data_parameterTahun as $data) {
            $count_data_tahun = $data_users->where('tahun_lulus', $data)->count();
            array_push($data_graduated_tahun, $data);
            array_push($data_graduated_value, $count_data_tahun);
        }

        $dataYangUdahNgisiFormPerProdi = [];
        $prodiArray = ['saa', 'afi', 'iqt', 'pai', 'pba', 'tbi', 'pm', 'hes', 'mnj', 'ei', 'hi', 'ilkom', 'ti', 'agro', 'tip', 'farmasi', 'gizi', 'kkk'];
        foreach ($prodiArray as $item) {
            $dataValueUdahNgisiForm = $data_users->where('program_studi', $item);
            array_push($dataYangUdahNgisiFormPerProdi, count($dataValueUdahNgisiForm));
        }

        // return $dataYangUdahNgisiFormPerProdi;




        $dataArray = [];
        $dataArray['data_registeredUser'] = $data_registeredUser;
        $dataArray['data_haveFilledOutTheForm'] = $data_haveFilledOutTheForm;
        $dataArray['data_parameterTahun'] = $data_parameterTahun;
        $dataArray['data_graduated_value'] = $data_graduated_value;
        $dataArray['data_graduated_tahun'] = $data_graduated_tahun;
        $dataArray['dataYangUdahNgisiFormPerProdi'] = $dataYangUdahNgisiFormPerProdi;

        // return dahsboard.index
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'dataArray' => $dataArray,
            'sections' => $sections,
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
     * @param  \App\Models\dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(dashboard $dashboard)
    {
        //
    }
}
