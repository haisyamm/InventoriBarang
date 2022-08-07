<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\OutletModel;
use Illuminate\Http\Request;

class OutletController extends Controller
{
    public function index()
    {
        $data['outlet'] = OutletModel::all();
        return view('master.outlet', $data);
    }
}
