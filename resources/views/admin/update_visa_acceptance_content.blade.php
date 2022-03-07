@extends('admin.layouts.master')
@section('title','Update Visa Acceptance')

@section('content')
    <div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Update Content (Yellow Background Section) of Service Visa Acceptance
                    </div>
                    <div class="card-body">
                        <form class="row cmxform" id="parsleyValidationForm" method="post" action="{{route('manageVisaAcceptanceContent')}}" enctype="multipart/form-data">
                        @csrf



                        <!-- bootstrap-imageupload. -->
                            <div class="form-group col-lg-6">
                                <div class="grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title d-flex">Upload Image -1

                                            </h4>
                                            <input type="file" name="visa_acceptance_image1" data-default-file="{{asset('storage/images/company/visa_acceptance_image1s/'.$company->visa_acceptance_image1)}}" class="dropify" data-parsley-trigger="keyup" accept="image/jpeg, image/png, image/jpg" data-parsley-filemimetypes = 'image/jpeg, image/png'/>
                                            <div class="clearfix"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-lg-6">
                                <div class="grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title d-flex">Upload Image -2

                                            </h4>
                                            <input type="file" name="visa_acceptance_image2" data-default-file="{{asset('storage/images/company/visa_acceptance_image2s/'.$company->visa_acceptance_image2)}}" class="dropify" data-parsley-trigger="keyup" accept="image/jpeg, image/png, image/jpg" data-parsley-filemimetypes = 'image/jpeg, image/png'/>
                                            <div class="clearfix"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="firstname"> Description -1</label>
                                <input type="hidden" name="name" value="{{$company->name}}">
                                <input type="hidden" name="email" value="{{$company->email}}">
                                <input type="hidden" name="address" value="{{$company->address}}">
                                <textarea class="form-control" name="visa_acceptance_description1" id="" cols="30" rows="10">{{$company->visa_acceptance_description1}}</textarea>
                            </div>


                            <div class="form-group col-lg-6">
                                <label for="firstname">Description -2</label>
                                <textarea class="form-control" name="visa_acceptance_description2" id="" cols="30" rows="10">{{$company->visa_acceptance_description2}}</textarea>
                            </div>


                            <div class="form-group col-lg-12">
                                <input class="btn btn-primary float-right" type="submit" value=" Update ">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




