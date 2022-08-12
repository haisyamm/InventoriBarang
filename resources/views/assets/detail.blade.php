@extends('layouts.app_template')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="px-3 mb-3">
            <h2 class="text-capitalize mb-0 fw-bolder">{{ $assets->name }}</h2>
            <span class="fw-bold">Detail of asset ABC00{{ $assets->id }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body py-4 px-4">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card rounded-10">
                            <div class="card-body border-dashed rounded-10 pb-4">
                                <h4 class="text-muted text-uppercase">Asset ID</h4>
                                <h4 class="text-fw-bolder">ABC00{{ $assets->id }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                                <div class="h3 fw-bolder text-uppercase">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 mb-1" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="12" cy="12" r="9"></circle>
                                    </svg>
                                    Asset Detail
                                </div>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                                <div class="h3 fw-bolder text-uppercase">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 mb-1" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="12" cy="12" r="9"></circle>
                                    </svg>
                                    Delivery Order
                                </div>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">
                                <div class="h3 fw-bolder text-uppercase">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 mb-1" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="12" cy="12" r="9"></circle>
                                    </svg>
                                    Warranty
                                </div>
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade in active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <div class="h3 fw-bolder mt-4 text-uppercase">
                                <div class="ps-1">
                                    <div class="row" style="margin-top: 25px;">
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="Asset Status" class="small fw-bolder text-uppercase">Asset Status :</label>
                                            <span>{{ $assets->status }}</span>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="Asset Status" class="small fw-bolder text-uppercase">Asset Description :</label>
                                            <span>{{ $assets->description }}</span>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="Asset Status" class="small fw-bolder text-uppercase">Asset Category :</label>
                                            <span>{{ $assets->category }}</span>
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="Asset Status" class="small fw-bolder text-uppercase">Asset Type :</label>
                                            <span>{{ $assets->type }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="1">

                            </div>
                            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
        @push('script')
        <script>
            // On Button add clicked
            const onCreateAsset = () => {
                var dataBatch = getFormInput();
                requestServer({
                    url: url + '/master/assets/store',
                    data: dataBatch,
                    onSuccess: function(response) {
                        console.log(response);
                    }
                });
            }
        </script>
        @endpush