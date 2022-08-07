<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\VendorModel;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function index()
    {
        $data['vendor'] = VendorModel::all();

        return view('master.vendor', $data);
    }
}
