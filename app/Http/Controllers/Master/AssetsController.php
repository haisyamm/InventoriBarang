<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\CompanyModel;
use App\Models\DepartmentModel;
use App\Models\ProductModel;
use App\Models\VendorModel;
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
        $data['company'] = CompanyModel::all();
        $data['department'] = DepartmentModel::all();
        $data['vendor'] = VendorModel::all();

        return view('assets.assets_form.create', $data);
    }
}
