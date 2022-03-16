@extends('admin.layouts.master')
@section('title','Edit  Visa Acceptance')

@section('content')
    <div>

        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="template-demo">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-light bg-*">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('visa-acceptance.index')}}">Visa Acceptance </a></li>
                            <li class="breadcrumb-item active" aria-current="page">Update Visa Acceptance  <b> : :</b>   {{$student->name}}</li>
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
                        Update Visa Acceptance : {{$student->name}}

                        <div class="float-right">
                            <button  class="btn btn-outline-primary btn-xs  action-button" onclick="window.location.href='{{route('visa-acceptance.create')}}';" data-toggle="tooltip" data-placement="bottom"  title="Create Visa Acceptance"> <i class="icon-plus"></i> </button>
                            <button class="btn btn-outline-primary btn-xs" onclick="window.location.href='{{route('visa-acceptance.index')}}';" data-toggle="tooltip" data-placement="bottom"  title="Visa Acceptance List"> <i class="icon-list"></i> </button>
                        </div>
                    </div>

                    <div class="card-body">
                        <form class="row cmxform" id="parsleyValidationForm" method="post" action="{{route('visa-acceptance.update',$student->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <!-- bootstrap-imageupload. -->


                            <div class="form-group col-lg-6">
                                <div class="grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title d-flex">Background Image

                                            </h4>
                                            <input type="file" name="background_image" data-default-file="{{asset('storage/images/visa-acceptance/background_images/'.$student->background_image)}}" class="dropify" data-parsley-trigger="keyup" accept="image/jpeg, image/png, image/jpg" data-parsley-filemimetypes = 'image/jpeg, image/png'/>
                                            <div class="clearfix"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-lg-6">
                                <div class="grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title d-flex">Student Image

                                            </h4>
                                            <input type="file" name="image" data-default-file="{{$student->image}}" class="dropify" data-parsley-trigger="keyup" accept="image/jpeg, image/png, image/jpg" data-parsley-filemimetypes = 'image/jpeg, image/png'/>
                                            <div class="clearfix"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="firstname">Name Of Student</label>
                                <input class="form-control" name="name" value="{{$student->name}}" type="text" data-parsley-trigger="keyup" >
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="lastname">Exam & Score</label>
                                <input  class="form-control" name="exam_score" value="{{$student->exam_score}}" type="text" placeholder="ex IELTS - 8" data-parsley-trigger="keyup" >
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Select Country</label>
                                <select class="js-example-basic-single w-100" name="country">
                                    @foreach($countries as $country)
                                        <option value="{{$country->country_name}}" @if($country->country_name == $student->country) selected @endif>{{$country->country_name}}</option>
                                    @endforeach
                                </select>
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




