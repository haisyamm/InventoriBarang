<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\HeaderOrderModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $data['order'] = HeaderOrderModel::all();
        return view('management.order', $data);
    }

    public function create()
    {
        $data['product'] = ProductModel::all();
        return view('management.order_form.create', $data);
    }
}
