@extends('admin.layouts.master')
@section('title','Manage Website')

@section('content')
    <div>

        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="template-demo">
                    <nav aria-label="breadcrumb">
                                <ol class="breadcrumb bg-light bg-*">
                                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Manage Website</li>
                                </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                        Manage Website


                    </div>
                    <div class="card-body">
                        <form class="row cmxform" id="parsleyValidationForm" method="post" action="{{route('manageWebsite')}}" enctype="multipart/form-data">
                        @csrf

                        <!-- bootstrap-imageupload. -->
                            <div class="form-group col-lg-4">
                                <div class="grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title d-flex">Upload Logo

                                            </h4>
                                            <input type="file" name="logo"  class="dropify" data-default-file="{{asset('storage/images/company/logos/'.$company->logo)}}" data-parsley-trigger="keyup" accept="image/jpeg, image/png, image/jpg" data-parsley-filemimetypes = 'image/jpeg, image/png'/>
                                            <div class="clearfix"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-lg-4">
                                <div class="grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title d-flex">Upload Favicon

                                            </h4>
                                            <input type="file" name="fav_icon" class="dropify" data-default-file="{{asset('storage/images/company/fav_icons/'.$company->fav_icon)}}" data-parsley-trigger="keyup" accept="image/jpeg, image/png, image/jpg" data-parsley-filemimetypes = 'image/jpeg, image/png'/>
                                            <div class="clearfix"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-lg-4">
                                <div class="grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title d-flex">Homepage Welcome Image

                                            </h4>
                                            <input type="file" name="homepage_welcome_image" class="dropify" data-default-file="{{asset('storage/images/company/homepage_welcome_images/'.$company->homepage_welcome_image)}}" data-parsley-trigger="keyup" accept="image/jpeg, image/png, image/jpg" data-parsley-filemimetypes = 'image/jpeg, image/png'/>
                                            <div class="clearfix"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="firstname">Name</label>
                                <input class="form-control" name="name" value="{{$company->name}}" type="text" data-parsley-trigger="keyup" required data-parsley-required-message= "*The title field is required.">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="lastname">Established Date</label>
                                <input  class="form-control" value="{{$company->established_date}}" name="established_date" type="date" data-parsley-trigger="keyup">
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="lastname">Email</label>
                                <input  class="form-control" name="email" value="{{$company->email}}" type="text" data-parsley-trigger="keyup"  required data-parsley-required-message= "*The email field is required.">
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="lastname">Alternate Email</label>
                                <input  class="form-control" name="alternate_email" value="{{$company->alternate_email}}"  type="text" data-parsley-trigger="keyup">
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="lastname"> Phone </label>
                                <input  class="form-control" name="phone" value="{{$company->phone}}" type="text" data-parsley-trigger="keyup" >
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="lastname"> Mobile </label>
                                <input  class="form-control" name="mobile" type="text" value="{{$company->mobile}}" data-parsley-trigger="keyup"  required>
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="lastname"> Facebook Url </label>
                                <input  class="form-control"  value="{{$company->facebook_url}}" name="facebook_url" type="text">
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="lastname"> Instagram Url </label>
                                <input  class="form-control" value="{{$company->instagram_url}}" name="instagram_url" type="text" >
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="lastname"> Linkedin Url </label>
                                <input  class="form-control" value="{{$company->linkedin_url}}" name="linkedin_url" type="text">
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="lastname"> Whatsapp Number With Country Code ( For student to contact consultancy ) </label>
                                <input  class="form-control" value="{{$company->whatsapp_number}}" name="whatsapp_number" type="text">
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="lastname"> Address </label>
                                <input  class="form-control" value="{{$company->address}}"  name="address" type="text" data-parsley-trigger="keyup"  required data-parsley-required-message= "*The address field is required.">
                            </div>

                            <div class="form-group col-lg-12">
                                <label>Map Url</label>
                                <textarea name="map_url" class="form-control"  cols="30" rows="5" > {{$company->map_url}} </textarea>
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="description">Our Mission</label>
                                <textarea name="our_mission" class="summernoteEditor" cols="30" rows="10"> {{$company->our_mission}} </textarea>
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="description">Our Vision</label>
                                <textarea name="our_vision" class="summernoteEditor" cols="30" rows="10"> {{$company->our_vision}} </textarea>
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="description">Footer Text</label>
                                <textarea name="footer_text" class="summernoteEditor" cols="30" rows="10"> {{$company->footer_text}} </textarea>
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


