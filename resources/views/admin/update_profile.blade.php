@extends('admin.layouts.master')
@section('title','Update Profile')

@section('content')
    <div>
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
                        Update Profile
                    </div>
                    <div class="card-body">
                        <form class="row cmxform" id="parsleyValidationForm" method="post" action="{{route('profile')}}" enctype="multipart/form-data">
                        @csrf

                        <!-- bootstrap-imageupload. -->
                            <div class="form-group col-lg-6">
                                <div class="grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title d-flex">Profile

                                            </h4>
                                            @if($admin->image != null)
                                                <input type="file" name="image"  class="dropify" data-default-file="{{asset('storage/images/admin/images/'.$admin->image)}}" data-parsley-trigger="keyup" accept="image/jpeg, image/png, image/jpg" data-parsley-filemimetypes = 'image/jpeg, image/png'/>
                                            @else
                                                <input type="file" name="image"  class="dropify"  data-parsley-trigger="keyup" accept="image/jpeg, image/png, image/jpg" data-parsley-filemimetypes = 'image/jpeg, image/png'/>
                                            @endif
                                            <div class="clearfix"></div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-lg-6"></div>

                            <div class="form-group col-lg-6">
                                <label for="firstname">Name</label>
                                <input class="form-control" name="name" value="{{$admin->name}}" type="text" data-parsley-trigger="keyup" required data-parsley-required-message= "*The title field is required.">
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="lastname">Email</label>
                                <input  class="form-control" name="email" value="{{$admin->email}}" type="text" data-parsley-trigger="keyup"  required data-parsley-required-message= "*The email field is required.">
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


