@extends('admin.layouts.master')
@section('title','Update Password')

@section('content')
    <div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Update  Password
                    </div>
                    <div class="card-body">
                        <form class="row cmxform" id="parsleyValidationForm" method="post" action="{{route('password')}}" enctype="multipart/form-data">
                        @csrf

                                @if(\Session::has('error_message'))
                                    <div class="alert alert-danger col-lg-12">
                                        * {{\Session::get('error_message')}}
                                    </div>
                                @endif
                                @if ($errors->has('old_password'))
                                    <div class="alert alert-danger col-lg-12">
                                        * {{ $errors->first('old_password') }}
                                    </div>
                                @endif

                        <!-- bootstrap-imageupload. -->

                            <div class="form-group col-lg-12">
                                <label for="firstname">Old Password</label>
                                <input class="form-control" name="old_password"  type="password" data-parsley-trigger="keyup" required data-parsley-required-message= "*The old password field is required.">
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="lastname">New  Password</label>
                                <input  class="form-control"  name="new_password" type="password" data-parsley-trigger="keyup" required data-parsley-required-message= "*The new password field is required.">
                            </div>


                            <div class="form-group col-lg-12">
                                <input class="btn btn-primary float-right" type="submit" value=" Update ">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


