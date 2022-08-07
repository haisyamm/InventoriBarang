<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class AssetsController extends Controller
{
    public function index()
    {
        $data['product'] = ProductModel::all();

        return view('master.assets', $data);
    }
}
