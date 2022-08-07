<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\RegionalModel;
use Illuminate\Http\Request;

class RegionalController extends Controller
{
    public function index()
    {
        $data['regional'] = RegionalModel::all();
        return view('master.regional', $data);
    }
}
