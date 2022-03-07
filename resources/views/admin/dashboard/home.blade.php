@extends('admin.layouts.master')
@section('title','Dashboard')

@push('plugin-styles')
    <link rel="stylesheet" href="{{adminAssetsUrl('plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}">
@endpush

@section('content')
    <div>
        <div class="row">
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title text-md-center text-xl-left"> Recent Visa Acceptance </p>
                        <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">3</h3>
                            <i class="ti-settings menu-icon icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                        </div>
                        <hr>
                        <a href="{{ route('visa-acceptance.index') }}" style="text-decoration: none">
                        <p class="mb-0 mt-2 text-warning text-center font-weight-bolder"> <i class="icon-eye"></i>  View All</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title text-md-center text-xl-left"> Universities</p>
                        <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">3</h3>
                            <i class="icon-graduation menu-icon icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                        </div>
                        <hr>
                        <a href="{{ route('university.index') }}" style="text-decoration: none">
                            <p class="mb-0 mt-2 text-warning text-center font-weight-bolder"> <i class="icon-eye"></i>  View All</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title text-md-center text-xl-left">Test Preparation</p>
                        <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">4</h3>
                            <i class="icon-note menu-icon icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                        </div>
                        <hr>
                        <a href="{{ route('test-preparation.index') }}" style="text-decoration: none">
                        <p class="mb-0 mt-2 text-warning text-center font-weight-bolder"> <i class="icon-eye"></i>  View All</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title text-md-center text-xl-left">Today's Enquiry</p>
                        <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">2</h3>
                            <i class="icon-speech menu-icon icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                        </div>
                        <hr>
                        <a href="{{ route('enquiry.index') }}" style="text-decoration: none">
                            <p class="mb-0 mt-2 text-warning text-center font-weight-bolder"> <i class="icon-eye"></i>  View All</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('plugin-scripts')
    <script src="{{adminAssetsUrl('plugins/chartjs/chart.min.js')}}"></script>
    <script src="{{adminAssetsUrl('plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{adminAssetsUrl('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>

@endpush
