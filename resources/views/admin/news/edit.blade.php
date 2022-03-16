@extends('admin.layouts.master')
@section('title','Update News : '.$news->title)

@section('content')
    <div>
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="template-demo">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-light bg-*">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('news.index')}}"> News  </a></li>
                            <li class="breadcrumb-item active" aria-current="page">Update News   <b> : :</b>   {{$news->title}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Update News  : {{$news->title}}

                        <div class="float-right">
                            <button  class="btn btn-outline-primary btn-xs  action-button" onclick="window.location.href='{{route('news.create')}}';" data-toggle="tooltip" data-placement="bottom"  title="Create News "> <i class="icon-plus"></i> </button>
                            <button class="btn btn-outline-primary btn-xs" onclick="window.location.href='{{route('news.index')}}';" data-toggle="tooltip" data-placement="bottom"  title="News  List"> <i class="icon-list"></i> </button>
                        </div>
                    </div>
                    <div class="card-body">

                        <form class="row cmxform" id="parsleyValidationForm" method="post" action="{{route('news.update',$news->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        @if($errors->any())
                            {{ implode('', $errors->all('<div>:message</div>')) }}
                        @endif


                        <!-- bootstrap-imageupload. -->



                            <div class="col-lg-3"></div>
                            <div class="form-group col-lg-6">
                                <div class="grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title d-flex">Upload Image

                                            </h4>
                                            <input type="file" name="image" data-default-file="{{$news->image}}" class="dropify" data-parsley-trigger="keyup" accept="image/jpeg, image/png, image/jpg" data-parsley-filemimetypes = 'image/jpeg, image/png'/>
                                            <div class="clearfix"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3"></div>

                            <div class="form-group col-lg-12">
                                <label>Select Category </label>
                                <select class="js-example-basic-single w-100" name="category_id">
                                    @foreach($categories as $cat)
                                        <option value="{{$cat->id}}" @if($cat->id == $news->category_id) selected @endif>{{$cat->name}}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group col-lg-6">
                                <label for="firstname">Title</label>
                                <input id="title" class="form-control" name="title" value="{{$news->title}}" type="text" data-parsley-trigger="keyup" required data-parsley-required-message= "*The title field is required.">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="lastname">Slug</label>
                                <input id="slug" class="form-control" name="slug" value="{{$news->slug}}" type="text" data-parsley-trigger="keyup"  required data-parsley-required-message= "*The slug field is required.">
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="lastname"> Video Link </label>
                                <input  class="form-control" name="video_link" value="{{$news->video_link}}" type="text" data-parsley-trigger="keyup"  required data-parsley-required-message= "*The slug field is required.">
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="description">Description</label>
                                <textarea name="description" id="summernoteEditor" cols="30" rows="10" data-parsley-trigger="keyup"   data-parsley-required-message= "*The description field is required."> {{$news->description}}</textarea>
                            </div>


                            <div class="form-group col-lg-12">
                                <div class="form-check form-check-flat form-check-success">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="hide" value="1" class="form-check-input" @if($news->hide) checked @endif>
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


