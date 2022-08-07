<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\HeaderOrderModel;
use App\Models\OutletModel;
use App\Models\ProductModel;
use App\Models\RegionalModel;
use App\Models\VendorModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $data['order'] = HeaderOrderModel::all();
        return view('management.order', $data);
    }

    public function create()
    {

        if (Auth::user()->role_code == 2) {
            $data['regional'] = RegionalModel::all();
        }
        if (Auth::user()->role_code == 3) {
            $data['outlet'] = OutletModel::all();
        }

        $data['product'] = ProductModel::all();
        $data['vendor'] = VendorModel::all();

        return view('management.order_form.create', $data);
    }
}
