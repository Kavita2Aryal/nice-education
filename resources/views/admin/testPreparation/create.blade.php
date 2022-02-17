@extends('admin.layouts.master')
@section('title','Test Preparation')

@section('content')

    <div class="preload"><img src="{{asset('images/loader.gif')}}"></div>
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Create Test Preparation
                    </div>
                    <div class="card-body">
                        <form class="cmxform demo-form" id="parsleyValidationForm" method="post" action="{{route('service.store')}}" enctype="multipart/form-data">
                        @csrf
                        <!-- bootstrap-imageupload. -->
                            <div class="form-section">
                                <div class="row">
                                    <div class="col-lg-3"></div>
                                    <div class="form-group col-lg-6">
                                            <div class="grid-margin stretch-card">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title d-flex">Upload Image

                                                        </h4>
                                                        <input type="file" name="banner_image" class="dropify" data-parsley-trigger="keyup" accept="image/jpeg, image/png, image/jpg" data-parsley-filemimetypes = 'image/jpeg, image/png'/>
                                                        <div class="clearfix"></div>

                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="col-lg-3"></div>
                                    <div class="form-group col-lg-6">
                                            <label for="firstname">Test Preparation Title</label>
                                            <input id="title" class="form-control" name="title" type="text" data-parsley-trigger="keyup"  data-parsley-required-message= "*The title field is required.">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="lastname">Slug</label>
                                        <input id="slug" class="form-control" name="slug" type="text" data-parsley-trigger="keyup"   data-parsley-required-message= "*The slug field is required.">
                                    </div>
                                </div>
                            </div>

                            <!-- Test Overview -->
                            <div class="form-section">
                                @include('admin.testPreparation.includes.overview')
                            </div>

                            <!-- Test Preparation -->
                            <div class="form-section">
                                @include('admin.testPreparation.includes.preparation')
                            </div>

                            <!-- Test Format -->
                            <div class="form-section">
                                @include('admin.testPreparation.includes.testFormat')
                            </div>

                            <!-- Faq -->
                            <div class="form-section">
                                @include('admin.testPreparation.includes.faq')
                            </div>


                                <div class="form-navigation">
                                    <button type="button" class="previous btn btn-info float-left">&lt; Previous</button>
                                    <button type="button" class="next btn btn-info float-right">Next &gt;</button>
                                    <button type="submit" class="btn btn-primary float-right"> Save </button>
                                    <span class="clearfix"></span>

                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom-scripts')


@endpush


