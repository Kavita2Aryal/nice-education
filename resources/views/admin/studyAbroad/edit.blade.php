@extends('admin.layouts.master')
@section('title',$study->country_name.':: Study Abroad')

@section('content')

    <div class="preload"><img src="{{asset('images/loader.gif')}}"></div>
    <div class="content">

        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="template-demo">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-light bg-*">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{route('study-abroad.index')}}">Study Abroad </a></li>
                            <li class="breadcrumb-item active" aria-current="page">Update Study Abroad :: {{$study->country_name}} </li>
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
                        Study Abroad ( Country) <b> : : {{$study->country_name}} </b>

                        <div class="float-right">
                            <button  class="btn btn-outline-primary btn-xs  action-button" onclick="window.location.href='{{route('study-abroad.create')}}';" data-toggle="tooltip" data-placement="bottom"  title="Create Study Abroad"> <i class="icon-plus"></i> </button>
                            <button class="btn btn-outline-primary btn-xs" onclick="window.location.href='{{route('study-abroad.index')}}';" data-toggle="tooltip" data-placement="bottom"  title="Study Abroad List"> <i class="icon-list"></i> </button>
                        </div>

                    </div>
                    <div class="card-body">
                        <form class="cmxform demo-form" id="parsleyValidationForm" method="post" action="{{route('study-abroad.update',$study->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')



                        <!-- bootstrap-imageupload. -->
                            <div class="form-section">
                                <div class="row">
                                    <div class="col-lg-3"></div>
                                    <div class="form-group col-lg-6">
                                        <div class="grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title d-flex">Update Image for Education System

                                                    </h4>
                                                    <input type="file" name="education_system_image" data-default-file="{{asset('storage/images/study-abroad/education_system_images/'.$study->education_system_image)}}" class="dropify" data-parsley-trigger="keyup" accept="image/jpeg, image/png, image/jpg" data-parsley-filemimetypes = 'image/jpeg, image/png'/>
                                                    <div class="clearfix"></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3"></div>
                                    <div class="form-group col-lg-6">
                                        <label for="title">Country Name <span class="required"> * </span></label>
                                        <input id="title" class="form-control" name="country_name" value="{{$study->country_name}}" type="text" data-parsley-trigger="keyup" required="" data-parsley-required-message= "*The country name is required.">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="slug">Slug <span class="required"> * </span> </label>
                                        <input id="slug" class="form-control" name="slug" value="{{$study->slug}}" type="text" data-parsley-trigger="keyup" required=""  data-parsley-required-message= "*The slug field is required.">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="summernoteEditor">Why This Country </label>
                                        <textarea name="why_message" class="summernoteEditor"  cols="30" rows="5" required> {{$study->why_message}}</textarea>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="summernoteEditor">Welcome Message ( Education System Tab ) </label>
                                        <textarea name="welcome_message" class="summernoteEditor"  cols="30" rows="5" required> {{$study->welcome_message}} </textarea>
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <br>
                                        <label for="slug">Education System Title ( Education System Tab )  <span class="required"> * </span> </label>
                                        <input id="slug" class="form-control" name="education_system_title" value="{{$study->education_system_title}}" type="text"  >
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="summernoteEditor">Education System Description ( Education System Tab ) </label>
                                        <textarea name="education_system_description" class="summernoteEditor"  cols="30" rows="5"> {{$study->education_system_description}} </textarea>
                                    </div>



                                </div>
                            </div>

                            <!-- Popular Courses -->
                            <div class="form-section">
                                @include('admin.studyAbroad.includes.edit_popular_courses')
                            </div>

                            <!-- Document Required -->
                            <div class="form-section">
                                @include('admin.studyAbroad.includes.edit_document_required')
                            </div>

                            <!--  Intake  Tab -->
                            <div class="form-section">
                                @include('admin.studyAbroad.includes.edit_intake')
                            </div>

                            <!--  Work - visa  Tab -->
                            <div class="form-section">
                                @include('admin.studyAbroad.includes.edit_work_visa')
                            </div>

                            <!-- FAQ Format -->
                            <div class="form-section">
                                @include('admin.studyAbroad.includes.edit_faq')
                            </div>


                            <div class="form-navigation">
                                <button type="button" name="previousButton" class="previous btn btn-info float-left">&lt; Previous</button>
                                <button type="button" name="nextButton" class="next btn btn-info float-right">Next &gt;</button>
                                <button type="submit"  class="btn btn-primary float-right"> Update  </button>
                                <span class="clearfix"></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


    @foreach($faqs as $key => $faq)
        <div class="modal fade" id="faqDetail-{{$faq->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="{{route('faqUpdate',$faq->id)}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Manage How Its Works </b></h5>
                            <hr>
                        </div>
                        <div class="modal-body">


                            <div class="col-md-12">
                                <div class="form-group  label-floating">
                                    <label>
                                        Question
                                        {{--<small>*</small>--}}
                                    </label>
                                    <input class="form-control" value="{{$faq->question}}" name="question" type="text" required />
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group  label-floating">
                                    <label>
                                        Answer
                                        {{--<small>*</small>--}}
                                    </label>

                                    <textarea name="answer" id="" cols="30" rows="10" class="form-control summernoteEditor"> {!! $faq->answer !!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success"> Update </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
@endsection




