@extends('admin.layouts.master')
@section('title','Create Service')

@section('content')
    <div>
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="template-demo">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-light bg-*">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{route('service.index')}}">Service </a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create Service</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Create Service
                        <button class="btn btn-outline-primary btn-xs float-right" onclick="window.location.href='{{route('service.index')}}';" data-toggle="tooltip" data-placement="bottom"  title="Service List"> <i class="icon-list"></i> </button>

                    </div>
                    <div class="card-body">
                        <form class="row cmxform" id="parsleyValidationForm" method="post" action="{{route('service.store')}}" enctype="multipart/form-data">
                        @csrf

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
                                            <input type="file" name="image" class="dropify" data-parsley-trigger="keyup" accept="image/jpeg, image/png, image/jpg" data-parsley-filemimetypes = 'image/jpeg, image/png'/>
                                            <div class="clearfix"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3"></div>
                            <div class="form-group col-lg-6">
                                <label for="firstname">Service Name</label>
                                <input id="firstname" class="form-control" name="name" type="text" data-parsley-trigger="keyup" required data-parsley-required-message= "*The service name field is required.">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="slug">Slug</label>
                                <input id="slug" class="form-control" name="slug" type="text" data-parsley-trigger="keyup"  required data-parsley-required-message= "*The slug field is required.">
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="lastname">Priority</label>
                                <input  class="form-control" name="priority" type="number" data-parsley-trigger="keyup"  required data-parsley-required-message= "*The priority field is required.">
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="lastname">Section Title</label>
                                <input  class="form-control" name="title" type="text" data-parsley-trigger="keyup"  required data-parsley-required-message= "*The title field is required.">
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="description">Description</label>
                                <textarea name="description" id="summernoteEditor" cols="30" rows="10" data-parsley-trigger="keyup"  required data-parsley-required-message= "*The description field is required."></textarea>
                            </div>

                            <div class="form-group col-lg-12">
                                <div class="form-check form-check-flat form-check-success">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="status" value="1" class="form-check-input" checked>
                                        Active
                                        <i class="input-helper"></i>
                                    </label>
                                </div>
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


