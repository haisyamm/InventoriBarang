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
                    <ul class="nav nav-tabs nav-tabs-alt" data-bs-toggle="tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#tabs-assets-detail" class="nav-link h2 fw-bolder active" data-bs-toggle="tab" aria-selected="true" role="tab">
                                <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="12" cy="12" r="9"></circle>
                                </svg>
                                Asset Detail
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#tabs-delivery-order" class="nav-link h2 fw-bolder" data-bs-toggle="tab" aria-selected="true" role="tab">
                                <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="12" cy="12" r="9"></circle>
                                </svg>
                                Delivery Order
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#tabs-warranty" class="nav-link h2 fw-bolder" data-bs-toggle="tab" aria-selected="true" role="tab">
                                <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="12" cy="12" r="9"></circle>
                                </svg>
                                warranty
                            </a>
                        </li>
                    </ul>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tabs-assets-detail" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <div class="py-2 px-3 rounded-10 bg-dark-lt">
                                                <h3 class="mb-0">Asset Name</h3>
                                                <h3 class="text-capitalize text-muted">{{ $assets->name ?? '-' }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <div class="py-2 px-3 rounded-10 bg-dark-lt">
                                                <h3 class="mb-0">Asset Description</h3>
                                                <h3 class="text-capitalize text-muted">{{ $assets->description ?? '-' }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <div class="py-2 px-3 rounded-10 bg-dark-lt">
                                                <h3 class="mb-0">Asset Category</h3>
                                                <h3 class="text-capitalize text-muted">{{ $assets->category ?? '-' }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <div class="py-2 px-3 rounded-10 bg-dark-lt">
                                                <h3 class="mb-0">Asset Type</h3>
                                                <h3 class="text-capitalize text-muted">{{ $assets->type ?? '-' }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <div class="py-2 px-3 rounded-10 bg-dark-lt">
                                                <h3 class="mb-0">Asset Status</h3>
                                                <h3 class="text-capitalize text-muted">{{ $assets->status ?? '-' }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-delivery-order" role="tabpanel">
                                <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                            </div>
                            <div class="tab-pane" id="tabs-warranty" role="tabpanel">
                                <div>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque ipsa, qui consequatur et quasi obcaecati cum provident, nesciunt dolorem fugit harum maiores necessitatibus commodi voluptas molestias voluptatibus ex deserunt! Earum.</div>
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