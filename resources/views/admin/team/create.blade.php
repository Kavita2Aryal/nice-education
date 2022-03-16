@extends('admin.layouts.master')
@section('title','Create Team')

@section('content')
    <div>

        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="template-demo">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-light bg-*">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{route('team.index')}}">Team </a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create Team</li>
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
                        Create Team
                        <button class="btn btn-outline-primary btn-xs float-right" onclick="window.location.href='{{route('team.index')}}';" data-toggle="tooltip" data-placement="bottom"  title="Team List"> <i class="icon-list"></i> </button>

                    </div>
                    <div class="card-body">
                        <form class="row cmxform" id="parsleyValidationForm" method="post" action="{{route('team.store')}}" enctype="multipart/form-data">
                        @csrf


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
                                <label for="firstname">Name</label>
                                <input  class="form-control" name="name" type="text" data-parsley-trigger="keyup" required data-parsley-required-message= "*The title field is required.">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="lastname">Designation</label>
                                <input  class="form-control" name="designation" type="text" data-parsley-trigger="keyup"  required data-parsley-required-message= "*The slug field is required.">
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="description">Message</label>
                                <textarea name="message" id="summernoteEditor" cols="30" rows="10" data-parsley-trigger="keyup"  required data-parsley-required-message= "*The description field is required."></textarea>
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


