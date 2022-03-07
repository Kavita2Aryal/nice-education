@extends('admin.layouts.master')
@section('title','Study Abroad')

@section('content')

    <div class="preload"><img src="{{asset('images/loader.gif')}}"></div>
    <div class="content">
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
                        Create Study Abroad ( Country)
                    </div>
                    <div class="card-body">
                        <form class="cmxform demo-form" id="parsleyValidationForm" method="post" action="{{route('study-abroad.store')}}" enctype="multipart/form-data">
                        @csrf


                        <!-- bootstrap-imageupload. -->
                            <div class="form-section">
                                <div class="row">
                                    <div class="col-lg-3"></div>
                                    <div class="form-group col-lg-6">
                                        <div class="grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title d-flex">Upload Image for Eductaion System

                                                    </h4>
                                                    <input type="file" name="education_system_image" class="dropify" data-parsley-trigger="keyup" accept="image/jpeg, image/png, image/jpg" data-parsley-filemimetypes = 'image/jpeg, image/png' required/>
                                                    <div class="clearfix"></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3"></div>
                                    <div class="form-group col-lg-6">
                                        <label for="title">Country Name <span class="required"> * </span></label>
                                        <input id="title" class="form-control" name="country_name" value="{{old('country_name')}}" type="text" data-parsley-trigger="keyup" required="" data-parsley-required-message= "*The country name is required.">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="slug">Slug <span class="required"> * </span> </label>
                                        <input id="slug" class="form-control" name="slug" value="{{old('slug')}}" type="text" data-parsley-trigger="keyup" required=""  data-parsley-required-message= "*The slug field is required.">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="summernoteEditor">Why This Country </label>
                                        <textarea name="why_message" class="summernoteEditor"  cols="30" rows="5" required></textarea>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="summernoteEditor">Welcome Message ( Education System Tab ) </label>
                                        <textarea name="welcome_message" class="summernoteEditor"  cols="30" rows="5" required></textarea>
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <br>
                                        <label for="slug">Education System Title ( Education System Tab )  <span class="required"> * </span> </label>
                                        <input id="slug" class="form-control" name="education_system_title" value="{{old('education_system_title')}}" type="text"  >
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="summernoteEditor">Education System Description ( Education System Tab ) </label>
                                        <textarea name="education_system_description" class="summernoteEditor"  cols="30" rows="5"></textarea>
                                    </div>



                                </div>
                            </div>

                            <!-- Popular Courses -->
                            <div class="form-section">
                                @include('admin.studyAbroad.includes.popular_courses')
                            </div>

                            <!-- Document Required -->
                            <div class="form-section">
                                @include('admin.studyAbroad.includes.document_required')
                            </div>

                            <!--  Intake  Tab -->
                            <div class="form-section">
                                @include('admin.studyAbroad.includes.intake')
                            </div>

                            <!--  Work - visa  Tab -->
                            <div class="form-section">
                                @include('admin.studyAbroad.includes.work_visa')
                            </div>

                            <!-- Test Format -->
                            <div class="form-section">
                                @include('admin.studyAbroad.includes.faq')
                            </div>


                            <div class="form-navigation">
                                <button type="button" name="previousButton" class="previous btn btn-info float-left">&lt; Previous</button>
                                <button type="button" name="nextButton" class="next btn btn-info float-right">Next &gt;</button>
                                <button type="submit"  class="btn btn-primary float-right"> Save </button>
                                <span class="clearfix"></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection




