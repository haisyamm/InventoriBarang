<?php

namespace App\Http\Controllers;

use App\Models\AssetsModel;
use App\Models\MaintenancePeriod;
use App\Models\ProductModel;
use App\Models\VendorModel;
use Illuminate\Http\Request;

class MaintenancePeriodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['period'] = MaintenancePeriod::all();
        return view('maintenance.period.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data['assets'] = AssetsModel::all();
        $data['vendor'] = VendorModel::all();

        return view('maintenance.period.create', $data);
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
     * @param  \App\Models\MaintenancePeriod  $maintenancePeriod
     * @return \Illuminate\Http\Response
     */
    public function show(MaintenancePeriod $maintenancePeriod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MaintenancePeriod  $maintenancePeriod
     * @return \Illuminate\Http\Response
     */
    public function edit(MaintenancePeriod $maintenancePeriod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MaintenancePeriod  $maintenancePeriod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaintenancePeriod $maintenancePeriod)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MaintenancePeriod  $maintenancePeriod
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaintenancePeriod $maintenancePeriod)
    {
        //
    }
}
