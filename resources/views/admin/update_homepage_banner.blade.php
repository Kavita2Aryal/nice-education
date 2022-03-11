@extends('admin.layouts.master')
@section('title','Manage Banner')

@section('content')
    <div>
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="template-demo">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-light bg-*">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manage Homepage Banner</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Manage Homepage Banner

                        @if($errors->any())
                            {{ implode('', $errors->all('<div>:message</div>')) }}
                        @endif

                    </div>
                    <div class="card-body">
                        <form class="row cmxform" id="parsleyValidationForm" method="post" action="{{route('manageBanner')}}" enctype="multipart/form-data">
                        @csrf
                            <div class="col-lg-3"></div>

                        <!-- bootstrap-imageupload. -->
                            <div class="form-group col-lg-6">
                                <div class="grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title d-flex">Upload Homepage Banner

                                            </h4>
                                            <input type="file" name="homepage_banner"  class="dropify" data-default-file="{{asset('storage/images/company/homepage_banners/'.$company->homepage_banner)}}" data-parsley-trigger="keyup" accept="image/jpeg, image/png, image/jpg" data-parsley-filemimetypes = 'image/jpeg, image/png'/>
                                            <div class="clearfix"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3"></div>

                            <div class="form-group col-lg-6">
                                <input type="hidden" name="name" value="{{$company->name}}">
                                <input type="hidden" name="email" value="{{$company->email}}">
                                <input type="hidden" name="address" value="{{$company->address}}">
                                <label for="firstname">Banner Title</label>
                                <input class="form-control" name="banner_title" value="{{$company->banner_title}}" type="text" data-parsley-trigger="keyup" required data-parsley-required-message= "*The title field is required.">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="lastname"> Sub Text</label>
                                <input  class="form-control" value="{{$company->sub_text}}" name="sub_text" type="text" data-parsley-trigger="keyup">
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="lastname">Button Text</label>
                                <input  class="form-control" name="btn_text" value="{{$company->btn_text}}" type="text" data-parsley-trigger="keyup"  required data-parsley-required-message= "*The email field is required.">
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="lastname">Button URL</label>
                                <input  class="form-control" name="btn_url" value="{{$company->btn_url}}"  type="text" data-parsley-trigger="keyup">
                            </div>



                            <div class="form-group col-lg-12">
                                <input class="btn btn-primary float-right" type="submit" value="Save">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


