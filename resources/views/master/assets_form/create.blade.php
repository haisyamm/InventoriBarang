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
                            <input type="text" name="" id="" class="form-control mt-1" placeholder="Enter Order Date">
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Company" class="small fw-bolder text-uppercase">Company</label>
                            <input type="text" name="" id="" class="form-control mt-1" placeholder="Enter Company">
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Department" class="small fw-bolder text-uppercase">Department</label>
                            <input type="text" name="" id="" class="form-control mt-1" placeholder="Enter Department">
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Vendor" class="small fw-bolder text-uppercase">Vendor</label>
                            <input type="text" name="" id="" class="form-control mt-1" placeholder="Enter Vendor">
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
                            <input type="text" name="" id="" class="form-control mt-1">
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Asset Name" class="small fw-bolder text-uppercase">Asset Name</label>
                            <input type="text" name="" id="" class="form-control mt-1" placeholder="Enter Asset Name">
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Asset Deskription" class="small fw-bolder text-uppercase">Asset Deskription</label>
                            <input type="text" name="" id="" class="form-control mt-1" placeholder="Enter Asset Deskription">
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
                            <div class="upload-file-box">
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
                            </div>
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Location" class="small fw-bolder">2. Upload Video</label>
                            <div class="upload-file-box">
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
                            </div>
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Location" class="small fw-bolder">3. Document</label>
                            <div class="upload-file-box">
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
                            </div>
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Location" class="small fw-bolder">4. Upload Other Files</label>
                            <div class="upload-file-box">
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
                            </div>
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