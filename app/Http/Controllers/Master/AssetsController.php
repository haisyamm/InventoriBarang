<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\AssetsModel;
use App\Models\CompanyModel;
use App\Models\DeliveryOrderModel;
use App\Models\DepartmentModel;
use App\Models\ProductModel;
use App\Models\VendorModel;
use App\Models\WarrantyModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function store(Request $request)
    {
        // Store to delivery order table
        $delivery['company_id'] = $request->delivery_company_id;
        $delivery['department_id'] = $request->delivery_department_id;
        $delivery['vendor_id'] = $request->delivery_vendor_id;
        $delivery['order_number'] = $request->delivery_order_number;
        $delivery['order_date'] = $request->delivery_order_date;
        $create_delivery = DeliveryOrderModel::create($delivery);

        // Store to warranty table
        $warranty['description'] = $request->warranty_description;
        $warranty['exp_date'] = $request->warranty_exp_date;
        $warranty['period'] = $request->warranty_period;
        $create_warranty = WarrantyModel::create($warranty);

        //Store to assets table and get delivery id
        $assets['user_id'] = Auth::user()->id;
        $assets['warranty_id'] = $create_warranty->id;
        $assets['delivery_order_number'] = $request->delivery_order_number;
        $assets['name'] = $request->asset_name;
        $assets['description'] = $request->asset_description;
        $assets['category'] = $request->asset_category;
        $assets['type'] = $request->asset_type;
        $assets['status'] = $request->asset_status;
        $create_asset = AssetsModel::create($assets);

        $response = $create_asset;

        return response()->json([
            'status' => 'Success',
            'data' => $response,
        ]);
    }
}
