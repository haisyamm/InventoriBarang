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

        return view('assets.assets', $data);
    }

    public function my_assets()
    {
        $data['product'] = ProductModel::all();
        return view('assets.my_assets', $data);
    }

    public function create()
    {
        return view('assets.assets_form.create');
    }
}
