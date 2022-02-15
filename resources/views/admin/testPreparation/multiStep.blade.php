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
                        <form class="demo-form">
                            <div class="form-section">
                                <label for="firstname">First Name:</label>
                                <input type="text" class="form-control" name="firstname" required="">

                                <label for="lastname">Last Name:</label>
                                <input type="text" class="form-control" name="lastname" required="">
                            </div>

                            <div class="form-section">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="email" required="">
                            </div>

                            <div class="form-section">
                                <label for="color">Favorite color:</label>
                                <input type="text" class="form-control" name="color" required="">
                            </div>

                            <div class="form-section">
                                <label for="color">Favorite Food:</label>
                                <input type="text" class="form-control" name="color" required="">
                            </div>

                            <div class="form-navigation">
                                <button type="button" class="previous btn btn-info pull-left">&lt; Previous</button>
                                <button type="button" class="next btn btn-info pull-right">Next &gt;</button>
                                <input type="submit" class="btn btn-default pull-right">
                                <span class="clearfix"></span>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection




