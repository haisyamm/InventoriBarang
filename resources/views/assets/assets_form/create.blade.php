@extends('layouts.app_template')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="px-3">
            <h2>Add Asset</h2>
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
                    Delivery Order
                </div>
                <div class="ps-1">
                    <div class="row" style="margin-top: 25px;">
                        <div class="col-md-4 form-group mb-3">
                            <label for="Delivery Order Number" class="small fw-bolder text-uppercase">Delivery Order Number</label>
                            <input type="text" name="" id="" class="form-control mt-1" placeholder="Enter Delibery Order Number">
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Delivery Order Date" class="small fw-bolder text-uppercase">Delivery Order Date</label>
                            <input type="date" name="" id="" class="form-control mt-1" placeholder="Select Order Date">
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Company" class="small fw-bolder text-uppercase">Company</label>
                            <select name="company" id="company" class="form-control mt-1">
                                <option value="" selected disabled>Choose Company</option>
                                @foreach($company as $val)
                                <option value="{{ $val->id }}">{{ $val->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Department" class="small fw-bolder text-uppercase">Department</label>
                            <select name="department" id="department" class="form-control mt-1">
                                <option value="" selected disabled>Choose Department</option>
                                @foreach($department as $val)
                                <option value="{{ $val->id }}">{{ $val->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Vendor" class="small fw-bolder text-uppercase">Vendor</label>
                            <select name="vendor" id="vendor" class="form-control mt-1">
                                <option value="" selected disabled>Choose Vendor</option>
                                @foreach($vendor as $val)
                                <option value="{{ $val->id }}">{{ $val->name }}</option>
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
                    Asset Detail
                </div>
                <div class="ps-1">
                    <div class="row" style="margin-top: 25px;">
                        <div class="col-md-4 form-group mb-3">
                            <label for="Asset Status" class="small fw-bolder text-uppercase">Asset Status</label>
                            <select name="" id="" class="form-control mt-1">
                                <option value="" selected disabled>Choose Asset Status</option>
                                <option value="Broken">Broken</option>
                                <option value="Lost">Lost</option>
                            </select>
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Asset Name" class="small fw-bolder text-uppercase">Asset Name</label>
                            <input type="text" name="" id="" class="form-control mt-1" placeholder="Enter Asset Name">
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Asset Description" class="small fw-bolder text-uppercase">Asset Description</label>
                            <input type="text" name="" id="" class="form-control mt-1" placeholder="Enter Asset Description">
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Category" class="small fw-bolder text-uppercase">Category</label>
                            <input type="text" name="" id="" class="form-control mt-1" placeholder="Enter Category">
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Type" class="small fw-bolder text-uppercase">Type</label>
                            <input type="text" name="" id="" class="form-control mt-1" placeholder="Enter Type">
                        </div>
                    </div>
                </div>
                <div class="h3 fw-bolder mt-4 text-uppercase">
                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 mb-1" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="12" r="1"></circle>
                        <circle cx="12" cy="12" r="9"></circle>
                    </svg>
                    Warranty
                </div>
                <div class="ps-1">
                    <div class="row" style="margin-top: 25px;">
                        <div class="col-md-4 form-group mb-3">
                            <label for="Warranty Description" class="small fw-bolder text-uppercase">Warranty Description</label>
                            <input type="text" name="" id="" class="form-control mt-1" placeholder="Enter Warranty Description">
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Warranty Exp Date" class="small fw-bolder text-uppercase">Warranty Exp Date</label>
                            <input type="text" name="" id="" class="form-control mt-1" placeholder="Enter Exp Date">
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Warranty Period" class="small fw-bolder text-uppercase">Warranty Period</label>
                            <input type="text" name="" id="" class="form-control mt-1" placeholder="Enter Warranty Period">
                        </div>
                    </div>
                </div>
                <div class="h3 fw-bolder mt-4 text-uppercase">
                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 mb-1" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="12" r="1"></circle>
                        <circle cx="12" cy="12" r="9"></circle>
                    </svg>
                    Asset Files
                </div>
                <div class="ps-1">
                    <div class="row" style="margin-top: 25px;">
                        <div class="col-md-4 form-group mb-3">
                            <label for="Location" class="small fw-bolder">1. Upload Image</label>
                            <div>
                                <label for="image-file" class="upload-file-box w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <line x1="15" y1="8" x2="15.01" y2="8"></line>
                                        <rect x="4" y="4" width="16" height="16" rx="3"></rect>
                                        <path d="M4 15l4 -4a3 5 0 0 1 3 0l5 5"></path>
                                        <path d="M14 14l1 -1a3 5 0 0 1 3 0l2 2"></path>
                                    </svg>
                                    <div class="px-2 mt-2">
                                        <span class="small fw-bolder">Drag a file hire or click to upload file</span>
                                    </div>
                                </label>
                                <input type="file" name="" id="image-file" class="d-none">
                            </div>
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Location" class="small fw-bolder">2. Upload Video</label>
                            <div>
                                <label for="video-file" class="upload-file-box w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M17.011 9.385v5.128l3.989 3.487v-12z"></path>
                                        <path d="M3.887 6h10.08c1.468 0 3.033 1.203 3.033 2.803v8.196a0.991 .991 0 0 1 -.975 1.001h-10.373c-1.667 0 -2.652 -1.5 -2.652 -3l.01 -8.002a0.882 .882 0 0 1 .208 -.71a0.841 .841 0 0 1 .67 -.287z"></path>
                                    </svg>
                                    <div class="px-2 mt-2">
                                        <span class="small fw-bolder">Drag a file hire or click to upload file</span>
                                    </div>
                                </label>
                                <input type="file" name="" id="video-file" class="d-none">
                            </div>
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Location" class="small fw-bolder">3. Upload Document</label>
                            <div>
                                <label for="document-file" class="upload-file-box w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                        <line x1="12" y1="11" x2="12" y2="17"></line>
                                        <line x1="9" y1="14" x2="15" y2="14"></line>
                                    </svg>
                                    <div class="px-2 mt-2">
                                        <span class="small fw-bolder">Drag a file hire or click to upload file</span>
                                    </div>
                                </label>
                                <input type="file" name="" id="document-file" class="d-none">
                            </div>
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Location" class="small fw-bolder">4. Upload Other Files</label>
                            <div>
                                <label for="other-file" class="upload-file-box w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                        <path d="M12 17v.01"></path>
                                        <path d="M12 14a1.5 1.5 0 1 0 -1.14 -2.474"></path>
                                    </svg>
                                    <div class="px-2 mt-2">
                                        <span class="small fw-bolder">Drag a file hire or click to upload file</span>
                                    </div>
                                </label>
                                <input type="file" name="" id="other-file" class="d-none">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h3 fw-bolder mt-4 text-uppercase">
                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 mb-1" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="12" r="1"></circle>
                        <circle cx="12" cy="12" r="9"></circle>
                    </svg>
                    Order Status
                </div>
                <div class="ps-1">
                    <div class="row" style="margin-top: 25px;">
                        <div class="col-md-4 form-group mb-3">
                            <label for="Order Status" class="small fw-bolder text-uppercase">Order Status</label>
                            <input type="text" name="" id="" class="form-control mt-1" placeholder="Enter Order Status">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-light">Cancel</button>
                    <button class="btn btn-dark ms-3">Add</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection