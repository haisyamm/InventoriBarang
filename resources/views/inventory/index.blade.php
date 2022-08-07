@extends('layouts.app_template')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <ul class="nav nav-tabs nav-tabs-alt" data-bs-toggle="tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <a href="#tabs-inventory-detail" class="nav-link active" data-bs-toggle="tab" aria-selected="true" role="tab">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-3d" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                            <path d="M12 13.5l4 -1.5"></path>
                            <path d="M8 11.846l4 1.654v4.5l4 -1.846v-4.308l-4 -1.846z"></path>
                            <path d="M8 12v4.2l4 1.8"></path>
                        </svg>
                        <span class="mx-2">Inventory Detail</span>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#tabs-check-in" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-import" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                            <path d="M5 13v-8a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5.5m-9.5 -2h7m-3 -3l3 3l-3 3"></path>
                        </svg>
                        <span class="mx-2">Check-In</span>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#tabs-check-out" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-export" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                            <path d="M11.5 21h-4.5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v5m-5 6h7m-3 -3l3 3l-3 3"></path>
                        </svg>
                        <span class="mx-2">Check-Out</span>
                    </a>
                </li>
            </ul>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active show" id="tabs-inventory-detail" role="tabpanel">
                        <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                    </div>
                    <div class="tab-pane" id="tabs-check-in" role="tabpanel">
                        <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                    </div>
                    <div class="tab-pane" id="tabs-check-out" role="tabpanel">
                        <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio facilis est ipsum minima odit aperiam, repudiandae fugit ex sequi dignissimos adipisci, esse veniam fuga voluptas autem. Iure ut aspernatur voluptatum.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection