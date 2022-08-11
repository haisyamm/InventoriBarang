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
            <div class="card-body py-4 px-4">
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
                <div class="d-flex justify-content-between mt-4">
                    <div class="h3 fw-bolder text-uppercase">
                        <svg xmlns="http://www.w3.org/2000/svg" class="me-1 mb-1" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="12" cy="12" r="1"></circle>
                            <circle cx="12" cy="12" r="9"></circle>
                        </svg>
                        Task
                    </div>
                    <div>
                        <a href="#" class="btn btn-icon border-dashed bg-dark-lt">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="12" r="9"></circle>
                                <line x1="9" y1="12" x2="15" y2="12"></line>
                                <line x1="12" y1="9" x2="12" y2="15"></line>
                            </svg>
                        </a>
                    </div>
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
                                    <span class="text-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M8.56 3.69a9 9 0 0 0 -2.92 1.95"></path>
                                            <path d="M3.69 8.56a9 9 0 0 0 -.69 3.44"></path>
                                            <path d="M3.69 15.44a9 9 0 0 0 1.95 2.92"></path>
                                            <path d="M8.56 20.31a9 9 0 0 0 3.44 .69"></path>
                                            <path d="M15.44 20.31a9 9 0 0 0 2.92 -1.95"></path>
                                            <path d="M20.31 15.44a9 9 0 0 0 .69 -3.44"></path>
                                            <path d="M20.31 8.56a9 9 0 0 0 -1.95 -2.92"></path>
                                            <path d="M15.44 3.69a9 9 0 0 0 -3.44 -.69"></path>
                                        </svg>
                                    </span>
                                </td>
                                <td>Task Maintenance</td>
                                <td>2 Sec</td>
                                <td class="text-center">11-Aug-2022</td>
                                <td class="text-center">Notes Description</td>
                                <td class="text-end">Running</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-light">Cancel</button>
                    <button class="btn btn-dark ms-3" onclick="onCreateAsset()">Add</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection