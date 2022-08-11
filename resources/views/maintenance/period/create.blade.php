@extends('layouts.app_template')
@section('content')
<div class="row">
        <div class="col-md-12">
                <div class="card mt-2">
                    <div class="row card-body">
                        <div class="col-md-6">
                            <h3>Service Name</h3>
                            <div class="form-group">
                                <input id="service_name" name="service_name" class="form-control" type="text"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3>Service Date</h3>
                            <div class="form-group">
                                <input id="service_date" name="service_date" class="form-control datepicker" type="text"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mt-2">
                    <div class="card-body">
                        <div>
                            <h3>Purchase Order</h3>
                            <div class="form-group">
                                <input id="purchase_order" name="purchase_order" class="form-control" type="text"/>
                            </div>
                        </div>
                        <div>
                            <h3>Purchase Date</h3>
                            <div class="form-group">
                                <input id="purchase_date" name="purchase_date" class="form-control datepicker" type="text"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mt-2">
                    <div class="card-body">
                        <div>
                            <h3>Vendor</h3>
                            <div class="form-group">
                                <select name="vendor_code" id="vendor_code" class="form-control">
                                    @foreach($vendor as $val)
                                    <option value="{{ $val->code }}">{{ $val->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div>
                            <h3>Asset</h3>
                            <div class="form-group">
                                <select name="vendor_code" id="vendor_code" class="form-control">
                                    @foreach($product as $val)
                                    <option value="{{ $val->code }}">{{ $val->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="row">
    <div class="col-md-12">
        <div class="card" style="height: 300px !important;">
            <div class="card-header d-flex justify-content-between">
                <h3 class="card-title">Task</h3>
            </div>
            <div class="table-responsive">
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
            <div class="card-footer d-flex align-items-center text-dark py-2">
                <p class="m-0 h2">Total</p>
                <div class="m-0 ms-auto">
                    <a href="#" class="btn btn-danger w-100">Save</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection