@extends('layouts.app_template')
@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card" style="height: calc(100vh - 20%) !important;">
            <div class="card-body" style="overflow-y: auto;">
                <div class="input-icon">
                    <span class="input-icon-addon">
                        <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="10" cy="10" r="7"></circle>
                            <line x1="21" y1="21" x2="15" y2="15"></line>
                        </svg>
                    </span>
                    <input type="text" value="" class="form-control" placeholder="Enter product code" aria-label="Search in website">
                </div>
                <div class="mt-3">
                    <h3 class="mb-0">Search Result</h3>
                </div>
                <div class="mt-2">
                    @foreach($product as $val)
                    <div class="d-flex justify-content-between align-items-center px-2 py-2 border-bottom">
                        <div class="d-flex align-items-center">
                            <span class="me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-box" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"></polyline>
                                    <line x1="12" y1="12" x2="20" y2="7.5"></line>
                                    <line x1="12" y1="12" x2="12" y2="21"></line>
                                    <line x1="12" y1="12" x2="4" y2="7.5"></line>
                                </svg>
                            </span>
                            <div>
                                <h3 class="m-0">{{ $val->name }}</h3>
                                <small>{{ $val->code }}</small>
                            </div>
                        </div>
                        <div>
                            <span class="badge badge-red d-inline-block cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="6" cy="19" r="2"></circle>
                                    <circle cx="17" cy="19" r="2"></circle>
                                    <path d="M17 17h-11v-14h-2"></path>
                                    <path d="M6 5l14 1l-1 7h-13"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card" style="height: 300px !important;">
            <div class="card-header d-flex justify-content-between">
                <h3 class="card-title">Cart</h3>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                        <tr>
                            <th class="w-1">#</th>
                            <th>Code</th>
                            <th>Name</th>
                            <th class="text-center">Qty</th>
                            <th class="text-end">Purchase Price</th>
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
                    <h2 class="h1">30.000.000</h2>
                </div>
            </div>
        </div>
        <hr class="my-3">
        <div class="row">
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
                            <!-- If regional exist -->
                            @if(isset($regional))
                            <h3>Regional</h3>
                            <div class="form-group">
                                <select name="regional_id" id="regional_id" class="form-control">
                                    @foreach($regional as $val)
                                    <option value="{{ $val->id }}">{{ $val->regional }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @endif
                        </div>
                        <!-- If outlet exist -->
                        @if(isset($outlet))
                        <div>
                            <h3>Outlet</h3>
                            <div class="form-group">
                                <select name="outlet_id" id="outlet_id" class="form-control">
                                    @foreach($outlet as $val)
                                    <option value="{{ $val->id }}">{{ $val->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mt-2">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h3>Order Date</h3>
                            <strong>{{ Date('d M Y') }}</strong>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h3>Total products</h3>
                            <strong>10 Product</strong>
                        </div>
                        <hr>
                        <a href="#" class="btn btn-danger w-100">Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection