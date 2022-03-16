@extends('admin.layouts.master')
@section('title','Update Category : '.$news_category->name)

@section('content')
    <div>
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="template-demo">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-light bg-*">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('news-category.index')}}"> News Category </a></li>
                            <li class="breadcrumb-item active" aria-current="page">Update News Category  <b> : :</b>   {{$news_category->name}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Update News Category : {{$news_category->name}}

                        <div class="float-right">
                            <button  class="btn btn-outline-primary btn-xs  action-button" onclick="window.location.href='{{route('news-category.create')}}';" data-toggle="tooltip" data-placement="bottom"  title="Create News Category"> <i class="icon-plus"></i> </button>
                            <button class="btn btn-outline-primary btn-xs" onclick="window.location.href='{{route('news-category.index')}}';" data-toggle="tooltip" data-placement="bottom"  title="News Category List"> <i class="icon-list"></i> </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="row cmxform" id="parsleyValidationForm" method="post" action="{{route('news-category.update',$news_category->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')


                        <!-- bootstrap-imageupload. -->

                            <div class="col-lg-3"></div>
                            <div class="form-group col-lg-6">
                                <div class="grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title d-flex">Upload Image

                                            </h4>
                                            <input type="file" name="image" data-default-file="{{$news_category->image}}" class="dropify" data-parsley-trigger="keyup" accept="image/jpeg, image/png, image/jpg" data-parsley-filemimetypes = 'image/jpeg, image/png'/>
                                            <div class="clearfix"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3"></div>
                            <div class="form-group col-lg-6">
                                <label for="firstname">Name</label>
                                <input id="title" class="form-control"  name="name" value="{{$news_category->name}}" type="text" data-parsley-trigger="keyup" required data-parsley-required-message= "*The title field is required.">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="lastname">Slug</label>
                                <input id="slug" class="form-control" name="slug" value="{{$news_category->slug}}" type="text" data-parsley-trigger="keyup"  required data-parsley-required-message= "*The slug field is required.">
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="lastname">Order</label>
                                <input class="form-control" name="order"  value="{{$news_category->order}}"  type="number" data-parsley-trigger="keyup"  required data-parsley-required-message= "*The slug field is required.">
                            </div>

                            <div class="clearfix"></div>

                            <div class="form-group col-lg-12">
                                <div class="form-check form-check-flat form-check-success">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="hide" value="1" class="form-check-input" @if($news_category->hide) checked @endif>
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


