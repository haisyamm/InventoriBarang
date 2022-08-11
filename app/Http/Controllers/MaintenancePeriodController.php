<?php

namespace App\Http\Controllers;

use App\Models\AssetsModel;
use App\Models\DetailMaintenancePeriod;
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

        //Store to header maintenance period table
        $period['vendor_code'] = $request->vendor;
        $period['asset_id'] = $request->assets;
        $period['service_name'] = $request->service_name;
        $period['service_date'] = $request->service_date;
        $period['purchase_order'] = $request->purchase_order;
        $period['purchase_date'] = $request->purchase_date;
        $create_period = MaintenancePeriod::create($period);

        //Store to detail maintenance period table
        $create_detail_period = collect($request->task)->each(function ($val) use ($create_period) {
            $task['maintenance_period_id'] = $create_period->id;
            $task['task_name'] = $val['task_name'];
            $task['task_duration'] = $val['duration'];
            $task['due_date'] = $val['due_date'];
            $task['notes'] = $val['notes'];
            $task['status'] = $val['status'];
            DetailMaintenancePeriod::create($task);
        });

        return response()->json([
            'status' => 'Success',
            'data' => $create_period,
        ]);
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
