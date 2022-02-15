@extends('admin.layouts.master')
@section('title','Test Preparation')

@section('content')
    <div>
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
                                            <input id="title" class="form-control" name="title" type="text" data-parsley-trigger="keyup" required data-parsley-required-message= "*The title field is required.">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="lastname">Slug</label>
                                        <input id="slug" class="form-control" name="slug" type="text" data-parsley-trigger="keyup"  required data-parsley-required-message= "*The slug field is required.">
                                    </div>
                                </div>
                            </div>

                            <!-- Test Overview -->
                            <div class="form-section">
                                <div class="row">
                                    <div class="col-md-12 tab-title">
                                        Test Preparation Overview
                                    </div>

                                    <div class="col-lg-3"></div>
                                    <div class="form-group col-lg-6">
                                        <div class="grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title d-flex">Upload Image

                                                    </h4>
                                                    <input type="file" name="test_image" class="dropify" data-parsley-trigger="keyup" accept="image/jpeg, image/png, image/jpg" data-parsley-filemimetypes = 'image/jpeg, image/png'/>
                                                    <div class="clearfix"></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3"></div>

                                    <div class="form-group col-md-12">
                                        <label for="email">Title </label>
                                        <input type="text" class="form-control" name="overview_title" required="">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="summernoteEditor">Description </label>
                                        <textarea name="overview_description" id="summernoteEditor" cols="30" rows="5" required></textarea>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label class="card-title"> Add Exam Type </label>
                                        <br>
                                        <button type="button" class="btn btn-xs btn-success pull-right addTest"> <i class="ti-plus"></i> </button>
                                    </div>
                                </div>
                                <div class="appendHere">
                                    <div id="clone" style="display: none">
                                        <br>
                                        <div class="row" style="background: #dddd; transition-duration: 5s;transition-delay: 3s; margin-bottom: 5px;padding: 10px">

                                            <div class="form-group col-md-12">
                                                <label>Course Title</label>
                                                <input type="text" class="form-control" value=" " name="course_title[]">
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label> Course Description </label>
                                                <textarea name="course_description[]" id="summernoteEditor2" cols="30" rows="5"> Enter Course Detail Here.....</textarea>
                                            </div>

                                            <div class="form-group col-md-12">
                                                <button type="button" class="btn btn-xs btn-danger pull-right remove-section"><i class="mdi mdi-delete"></i></button>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Test Preparation -->
                            <div class="form-section">
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" name="email">
                                </div>

                            </div>





{{--                      <input class="btn btn-primary float-right" type="submit" value="Save">--}}
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
    <script>
        $(document).ready(function(){

            $('#summernoteEditor2').summernote({
                height: 150,
            });

            //Add item
            $(".addTest").click(function(){
                var $fieldHTML = $('<div>',
                    {
                        'html': $("#clone").html()
                    });
                // insert new group after last one
                $('.appendHere').append($fieldHTML);
                // instantiate ckeditor on new textarea

                $fieldHTML.find('input').attr("required","");
                $fieldHTML.find('textarea').attr("required","");

            });


            //remove content
            $("body").on("click",".remove-section",function(){
                event.preventDefault();
                $(this).closest('.row').parent().remove();
            });
        });
    </script>

@endpush


