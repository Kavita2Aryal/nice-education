@extends('admin.layouts.master')
@section('title','Update '.$university->name)

@section('content')
    <div>

        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="template-demo">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-light bg-*">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{route('university.index')}}">Universities </a></li>
                            <li class="breadcrumb-item active" aria-current="page"> Update University  <b> : :</b>   {{$university->name}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">

                @if($errors->any)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{$error}}
                        </div>
                    @endforeach
                @endif

                <div class="card">
                    <div class="card-header">
                        Update University/College <b> : : </b> {{$university->name}}

                        <div class="float-right">
                            <button  class="btn btn-outline-primary btn-xs  action-button" onclick="window.location.href='{{route('university.create')}}';" data-toggle="tooltip" data-placement="bottom"  title="Create University"> <i class="icon-plus"></i> </button>
                            <button class="btn btn-outline-primary btn-xs" onclick="window.location.href='{{route('university.index')}}';" data-toggle="tooltip" data-placement="bottom"  title="University List"> <i class="icon-list"></i> </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="row cmxform" id="parsleyValidationForm" method="post" action="{{route('university.update',$university->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')


                        <!-- bootstrap-imageupload. -->

                            <div class="col-lg-3"></div>
                            <div class="form-group col-lg-6">
                                <div class="grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title d-flex">Upload Logo

                                            </h4>
                                            <input type="file" name="logo" data-default-file="{{asset('storage/images/university/logos/'.$university->logo)}}" class="dropify" data-parsley-trigger="keyup" accept="image/jpeg, image/png, image/jpg" data-parsley-filemimetypes = 'image/jpeg, image/png'/>
                                            <div class="clearfix"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3"></div>
                            <div class="form-group col-lg-6">
                                <label for="firstname">Name Of University/College</label>
                                <input class="form-control" name="name" value="{{$university->name}}" type="text" data-parsley-trigger="keyup" required data-parsley-required-message= "*The title field is required.">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="lastname">priority</label>
                                <input  class="form-control" name="priority" value="{{$university->priority}}" type="number" data-parsley-trigger="keyup"  required data-parsley-required-message= "*The slug field is required.">
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Select Country</label>
                                <select class="js-example-basic-single w-100" name="country_id">
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}" @if($university->country_id == $country->id ) selected @endif>{{$country->country_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-lg-12">
                                <div class="form-check form-check-flat form-check-success">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="status" value="1" class="form-check-input" @if($university->status) checked @endif>
                                        Active
                                        <i class="input-helper"></i>
                                    </label>
                                </div>
                            </div>


                            <div class="form-group col-lg-12">
                                <input class="btn btn-primary float-right" type="submit" value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




