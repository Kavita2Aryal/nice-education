@extends('admin.layouts.master')
@section('title','Create Visa Acceptance')

@section('content')
    <div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Create Visa Acceptance
                    </div>
                    <div class="card-body">
                        <form class="row cmxform" id="parsleyValidationForm" method="post" action="{{route('visa-acceptance.store')}}" enctype="multipart/form-data">
                        @csrf


                        <!-- bootstrap-imageupload. -->


                            <div class="form-group col-lg-6">
                                <div class="grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title d-flex">Background Image

                                            </h4>
                                            <input type="file" name="background_image" class="dropify" data-parsley-trigger="keyup" accept="image/jpeg, image/png, image/jpg" data-parsley-filemimetypes = 'image/jpeg, image/png'/>
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
                                            <input type="file" name="image" class="dropify" data-parsley-trigger="keyup" accept="image/jpeg, image/png, image/jpg" data-parsley-filemimetypes = 'image/jpeg, image/png'/>
                                            <div class="clearfix"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="firstname">Name Of Student</label>
                                <input class="form-control" name="name" type="text" data-parsley-trigger="keyup" >
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="lastname">Exam & Score</label>
                                <input  class="form-control" name="exam_score" type="text" placeholder="ex IELTS - 8" data-parsley-trigger="keyup" >
                            </div>

                            <div class="form-group col-lg-6">
                                    <label>Select Country</label>
                                    <select class="js-example-basic-single w-100" name="country">
                                        @foreach($countries as $country)
                                        <option value="{{$country->country_name}}">{{$country->country_name}}</option>
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




