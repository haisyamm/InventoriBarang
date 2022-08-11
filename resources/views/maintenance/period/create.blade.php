@extends('layouts.app_template')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="px-3">
            <h2>Add Maintenance Period</h2>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="h3 fw-bolder text-uppercase">
                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 mb-1" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="12" r="1"></circle>
                        <circle cx="12" cy="12" r="9"></circle>
                    </svg>
                    Maintenance
                </div>
                <div class="ps-1">
                    <div class="row" style="margin-top: 25px;">
                        <div class="col-md-6 form-group mb-3">
                            <label for="Service Name" class="small fw-bolder text-uppercase">Service Name</label>
                            <input type="text" name="service_name" id="service_name" class="form-control mt-1" placeholder="Enter Service Name">
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label for="Service Date" class="small fw-bolder text-uppercase">Service Date</label>
                            <input type="date" name="service_date" id="service_date" class="form-control mt-1" placeholder="Enter Service Date">
                        </div>
                    </div>
                </div>
                <div class="ps-1">
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-6 form-group mb-3">
                            <label for="Purchase Order" class="small fw-bolder text-uppercase">Purchase Order</label>
                            <input type="text" name="purchase_order" id="purchase_order" class="form-control mt-1" placeholder="Enter Purchase Order">
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label for="Purchase Date" class="small fw-bolder text-uppercase">Purchase Date</label>
                            <input type="text" name="purchase_date" id="purchase_date" class="form-control mt-1" placeholder="Enter Purchase Date">
                        </div>
                    </div>
                </div>
                <div class="ps-1">
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-6 form-group mb-3">
                            <label for="Vendor" class="small fw-bolder text-uppercase">Vendor</label>
                            <select name="vendor_code" id="vendor_code" class="form-control">
                                @foreach($vendor as $val)
                                <option value="{{ $val->code }}">{{ $val->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label for="Assets" class="small fw-bolder text-uppercase">Assets</label>
                            <select name="vendor_code" id="vendor_code" class="form-control">
                                @foreach($product as $val)
                                <option value="{{ $val->code }}">{{ $val->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="h3 fw-bolder mt-4 text-uppercase">
                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 mb-1" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="12" r="1"></circle>
                        <circle cx="12" cy="12" r="9"></circle>
                    </svg>
                    Maintenance
                </div>
                <div class="table-responsive border mt-1" style="height: 200px; overflow-y: auto;">
                    <table class="table card-table table-vcenter text-nowrap datatable">
                        <thead>
                            <tr>
                                <th class="w-1">#</th>
                                <th>Task Name</th>
                                <th>Duration</th>
                                <th class="text-center">Due Date</th>
                                <th class="text-center">Notes</th>
                                <th class="text-end">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product as $val)
                            <tr>
                                <td>
                                    <span class="text-red">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <line x1="4" y1="7" x2="20" y2="7"></line>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                        </svg>
                                    </span>
                                </td>
                                <td>{{ $val->code }}</td>
                                <td>{{ $val->name }}</td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <span class="border p-2">+</span>
                                        <h4 class="my-0 mx-3">5</h4>
                                        <span class="border p-2">-</span>
                                    </div>
                                </td>
                                <td class="text-end">{{ App\Models\GlobalModel::currency_format($val->purchase_price) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection