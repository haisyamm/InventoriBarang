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
                    Asset Detail
                </div>
                <div class="ps-1">
                    <div class="row" style="margin-top: 25px;">
                        <div class="col-md-4 form-group mb-3">
                            <label for="Asset Status" class="small fw-bolder text-uppercase">Asset Status</label>
                            <input type="text" name="" id="" class="form-control mt-1">
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Asset Deskription" class="small fw-bolder text-uppercase">Asset Deskription</label>
                            <input type="text" name="" id="" class="form-control mt-1" placeholder="Enter Assets Deskription">
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Asset Name" class="small fw-bolder text-uppercase">Asset Name</label>
                            <input type="text" name="" id="" class="form-control mt-1" placeholder="Enter Assets Name">
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Manufacturer" class="small fw-bolder text-uppercase">Manufacturer</label>
                            <input type="text" name="" id="" class="form-control mt-1">
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Model" class="small fw-bolder text-uppercase">Model</label>
                            <input type="text" name="" id="" class="form-control mt-1">
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Brand" class="small fw-bolder text-uppercase">Brand</label>
                            <input type="text" name="" id="" class="form-control mt-1">
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Supplier" class="small fw-bolder text-uppercase">Supplier</label>
                            <input type="text" name="" id="" class="form-control mt-1">
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Serial No" class="small fw-bolder text-uppercase">Serial No</label>
                            <input type="text" name="" id="" class="form-control mt-1">
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Qr Code" class="small fw-bolder text-uppercase">Qr Code</label>
                            <input type="text" name="" id="" class="form-control mt-1">
                        </div>
                    </div>
                </div>
                <div class="h3 fw-bolder mt-4 text-uppercase">
                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 mb-1" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="12" r="1"></circle>
                        <circle cx="12" cy="12" r="9"></circle>
                    </svg>
                    Assignee
                </div>
                <div class="ps-1">
                    <div class="row" style="margin-top: 25px;">
                        <div class="col-md-4 form-group mb-3">
                            <label for="Location" class="small fw-bolder text-uppercase">Location</label>
                            <input type="text" name="" id="" class="form-control mt-1">
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Sub Loacation" class="small fw-bolder text-uppercase">Sub Loacation</label>
                            <input type="text" name="" id="" class="form-control mt-1" placeholder="Enter Assets Deskription">
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Category" class="small fw-bolder text-uppercase">Category</label>
                            <input type="text" name="" id="" class="form-control mt-1" placeholder="Enter Assets Name">
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Type" class="small fw-bolder text-uppercase">Type</label>
                            <input type="text" name="" id="" class="form-control mt-1">
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Company" class="small fw-bolder text-uppercase">Company</label>
                            <input type="text" name="" id="" class="form-control mt-1">
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Department" class="small fw-bolder text-uppercase">Department</label>
                            <input type="text" name="" id="" class="form-control mt-1">
                        </div>
                        <div class="col-md-4 form-group mb-3">
                            <label for="Assignee" class="small fw-bolder text-uppercase">Assignee</label>
                            <input type="text" name="" id="" class="form-control mt-1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection