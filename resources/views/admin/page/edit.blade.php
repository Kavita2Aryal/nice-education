@extends('admin.layouts.master')
@section('title','Update Page')

@section('content')
    <style>
        button.action-button{
            padding : 5990px !important;
        }
    </style>
    <div>
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="template-demo">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-light bg-*">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('page.index')}}">Page </a></li>
                            <li class="breadcrumb-item active" aria-current="page">Update Page  <b> : :</b>   {{$page->title}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Update Page : {{$page->title}}

                        <div class="float-right">
                        <button  class="btn btn-outline-primary btn-xs  action-button" onclick="window.location.href='{{route('page.create')}}';" data-toggle="tooltip" data-placement="bottom"  title="Create Page"> <i class="icon-plus"></i> </button>
                        <button class="btn btn-outline-primary btn-xs" onclick="window.location.href='{{route('page.index')}}';" data-toggle="tooltip" data-placement="bottom"  title="Page List"> <i class="icon-list"></i> </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="row cmxform" id="parsleyValidationForm" method="post" action="{{route('page.update',$page->id)}}" enctype="multipart/form-data">
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
                                            <input type="file" name="image" class="dropify" data-default-file="{{$page->image}}" data-parsley-trigger="keyup" accept="image/jpeg, image/png, image/jpg" data-parsley-filemimetypes = 'image/jpeg, image/png'/>
                                            <div class="clearfix"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3"></div>
                            <div class="form-group col-lg-6">
                                <label for="firstname">Page Title</label>
                                <input id="title" class="form-control" name="title" value="{{$page->title}}" type="text" data-parsley-trigger="keyup" required data-parsley-required-message= "*The title field is required.">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="lastname">Slug</label>
                                <input id="slug" class="form-control" name="slug" value="{{$page->slug}}" type="text" data-parsley-trigger="keyup"  required data-parsley-required-message= "*The slug field is required.">
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="description">Description</label>
                                <textarea name="description" id="summernoteEditor" cols="30" rows="10" data-parsley-trigger="keyup"  required data-parsley-required-message= "*The description field is required."> {{$page->description}}</textarea>
                            </div>

                            <div class="form-group col-lg-12">
                                <div class="form-check form-check-flat form-check-success">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="status" value="1" class="form-check-input" @if($page->status) checked @endif >
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


