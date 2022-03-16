@extends('admin.layouts.master')
@section('title','Update Team')

@section('content')
    <div>

        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="template-demo">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-light bg-*">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('team.index')}}">Team </a></li>
                            <li class="breadcrumb-item active" aria-current="page">Update Team  <b> : : </b>   {{$team->name}}</li>
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
                        Update Team : {{$team->name}}

                        <div class="float-right">
                            <button  class="btn btn-outline-primary btn-xs  action-button" onclick="window.location.href='{{route('team.create')}}';" data-toggle="tooltip" data-placement="bottom"  title="Create Team"> <i class="icon-plus"></i> </button>
                            <button class="btn btn-outline-primary btn-xs" onclick="window.location.href='{{route('team.index')}}';" data-toggle="tooltip" data-placement="bottom"  title="Team List"> <i class="icon-list"></i> </button>
                        </div>

                    </div>
                    <div class="card-body">
                        <form class="row cmxform" id="parsleyValidationForm" method="post" action="{{route('team.update',$team->id)}}" enctype="multipart/form-data">
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
                                            <input type="file" name="image" data-default-file="{{$team->image}}" class="dropify" data-parsley-trigger="keyup" accept="image/jpeg, image/png, image/jpg" data-parsley-filemimetypes = 'image/jpeg, image/png'/>
                                            <div class="clearfix"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3"></div>
                            <div class="form-group col-lg-6">
                                <label for="firstname">Name</label>
                                <input  class="form-control" name="name" value="{{$team->name}}" type="text" data-parsley-trigger="keyup" required data-parsley-required-message= "*The title field is required.">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="lastname">Designation</label>
                                <input  class="form-control" name="designation" value="{{$team->designation}}" type="text" data-parsley-trigger="keyup"  required data-parsley-required-message= "*The slug field is required.">
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="description">Message</label>
                                <textarea name="message" id="summernoteEditor" cols="30" rows="10" data-parsley-trigger="keyup"   data-parsley-required-message= "*The description field is required.">{!! $team->message !!}</textarea>
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


