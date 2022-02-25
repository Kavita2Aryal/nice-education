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
                        <form id="create_form"
                              action="{{ route('test-preparation.store') }}"
                              method="post" enctype="multipart/form-data">
                            @csrf
                            @if (isset($course))
                                @method('PUT')
                            @endif
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-icon" data-background-color="rose">
                                        <i class="material-icons">note_add</i>
                                    </div>
                                    <div class="card-content">
                                        <h4 class="card-title">{{isset($course) ? 'Edit Course' : 'Add Course'}}</h4>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group ">
                                                    <label class="control-label">
                                                        Name
                                                        <small style="color:red;">*</small>
                                                    </label>
                                                    <input class="form-control" id="name" name="name" placeholder="Enter Course Name" type="text"
                                                           required="true" value="{{isset($course) ? $course->name : old('name')}}"
                                                           data-parsley-trigger="keyup" required="" data-parsley-maxlength="255" />
                                                    @if ($errors->has('name'))
                                                        <p class="text-danger">{{$errors->first('name')}}</p>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Slug<small style="color:red;" style="color:red;">*</small></label>
                                                    <input type="text" class="form-control" id="slug" class="slug" name="slug"
                                                           value="{{isset($course) ? $course->slug : old('slug')}}" data-parsley-trigger="keyup" required=""
                                                           data-parsley-maxlength="510">
                                                    @if ($errors->has('slug'))
                                                        <p class="text-danger">{{$errors->first('slug')}}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group ">
                                                    <label class="control-label">
                                                        Course Length
                                                    </label>
                                                    <input class="form-control" name="course_length" placeholder="Enter Course Length" type="text"
                                                           data-parsley-trigger="keyup" data-parsley-maxlength="255"
                                                           value="{{isset($course) ? $course->course_length : old('course_length')}}" />
                                                    @if ($errors->has('course_length'))
                                                        <p class="text-danger">{{$errors->first('course_length')}}</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>






                                        <div class="appendHere">
                                            <div id="clone" class="hide">
                                                <br>
                                                <div class="row" style="background: #dddd; transition-duration: 5s;
              transition-delay: 2s;">
                                                    <div class="col-md-12">
                                                        <button class="btn btn-danger pull-right">Remove Content</button>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group ">
                                                            <label class="control-label">
                                                                Name
                                                                <small style="color:red;">*</small>
                                                            </label>
                                                            <input class="form-control" name="title[]" placeholder="Enter Content Title" type="text"
                                                                   value="{{isset($course) ? $course->title : old('title')}}" {{-- data-parsley-trigger="keyup"
                        required="" data-parsley-maxlength="255" --}} style="background: #fff" />
                                                            @if ($errors->has('title'))
                                                                <p class="text-danger">{{$errors->first('title')}}</p>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <label class="col-sm-2 label-on-left">Description
                                                        <small style="color:red;">*</small>
                                                    </label>
                                                    <div class="col-sm-12">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label"></label>
                                                            <textarea name="description[]" rows="20" ></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row increment mb-4" style="background: #dddd">
                                                <div class="col-md-12">
                                                    <div class="form-group ">
                                                        <label class="control-label">
                                                            Title
                                                            <small style="color:red;">*</small>
                                                        </label>
                                                        <input class="form-control" id="title" name="title[]" placeholder="Enter Content Title" type="text"
                                                               required="true" value="{{isset($course) ? $course->title : old('title')}}"
                                                               data-parsley-trigger="keyup" required="" data-parsley-maxlength="255" style="background: #fff" />
                                                        @if ($errors->has('name'))
                                                            <p class="text-danger">{{$errors->first('name')}}</p>
                                                        @endif
                                                    </div>
                                                </div>

                                                <label class="col-sm-2 label-on-left">Description</label>
                                                <div class="col-sm-12">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label"></label>
                                                        <textarea name="description[]" rows="20" class="description" data-parsley-trigger="keyup"
                                                                  required="">
                            {{isset($course)? $course->description : old('description')}}
                    </textarea>
                                                    </div>
                                                </div>
                                            </div>


                                            {{-- append here --}}
                                        </div>
                                        <br>
                                        {{-- <br> --}}
                                        <div class="row" style="background: #dddd">
                                            <div class="col-md-12">
                                                <button class="btn btn-info pull-right">Add Content</button>
                                            </div>
                                        </div>

                                        <br>

                                        <div class="form-footer text-right">
                                            <button type="submit" class="btn btn-rose btn-fill">Save</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header card-header-icon" data-background-color="rose">
                                        <i class="material-icons">image</i>
                                    </div>
                                    <div class="card-content">
                                        <h4 class="card-title">Featured Image<small style="color:red;">*</small> (size: )</h4>
                                        <center>
                                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    <img src="{{isset($course) ? $course->imageUrl() : asset('backend/assets/img/placeholder.jpg')}}"
                                                         alt="...">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div>
                  <span class="btn btn-rose btn-round btn-file">
                    <span class="fileinput-new">Select image</span>
                    <span class="fileinput-exists">Change</span>
                    <input type="file" name="featured_image" required="" parsley-filemaxsize="1.5"
                           data-parsley-errors-container="#image-validation-error-block" />

                  </span>
                                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i
                                                            class="fa fa-times"></i> Remove</a>
                                                    <div style="display: block">
                                                        <div class="mt-5" id="image-validation-error-block"></div>
                                                    </div>
                                                    @if ($errors->has('featured_image'))
                                                        <p class="text-danger">{{$errors->first('featured_image')}}</p>
                                                    @endif


                                                </div>
                                            </div>
                                        </center>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="referer" value="{{ request()->headers->get('referer')}}">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom-scripts')

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.7.6/tinymce.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.11.3/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.11.3/adapters/jquery.js"></script>
    <script>
        $(document).ready(function() {
            // validation
            $('#create_form').parsley();
            // slug generator
            $('#name').keyup(function() {
                var str = $(this).val();
                var trims = $.trim(str)
                var slug = trims.replace(/[^a-z0-9]/gi, '-').replace(/-+/g, '-').replace(/^-|-$/g, '')
                $("#slug").val(slug.toLowerCase());
            })

            // Ckeditor initialization
            $('.description').ckeditor();

            $('.description').attr('required', '');


            var count = 1;
            // add ckeditor
            $(".btn-info").click(function(){
                event.preventDefault();

                var $fieldHTML = $('<div>',
                    {
                        'html': $("#clone").html()
                    });
                // insert new group after last one
                $('.appendHere').append($fieldHTML);
                // instantiate ckeditor on new textarea

                $fieldHTML.find('input').attr("data-parsley-trigger","keyup");
                $fieldHTML.find('input').attr("required","");
                $fieldHTML.find('textarea').attr("data-parsley-trigger","keyup");
                $fieldHTML.find('textarea').attr("data-parsley-errors-container","#cell-phone-validation-error-block"+count);
                $fieldHTML.find('textarea').attr("data-parsley-error-message","This field is required");
                $fieldHTML.find('textarea').after(`<div class="margin-top10" id="cell-phone-validation-error-block${count}"></div>`);

                $fieldHTML.find('textarea').ckeditor();
                $fieldHTML.find('textarea').attr("required","");
                count++;
            });

            //remove content
            $("body").on("click",".btn-danger",function(){
                event.preventDefault();
                $(this).closest('.row').parent().remove();
            });
        });

    </script>

@endpush
