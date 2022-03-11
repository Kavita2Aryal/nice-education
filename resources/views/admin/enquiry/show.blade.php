@extends('admin.layouts.master')
@section('title','Enquiry Detail')

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
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"> Dashboard </a></li>
                            <li class="breadcrumb-item active" aria-current="page"> Enquiry Detail </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Enquiry Detail

                        <div class="float-right">
                            <button class="btn btn-outline-primary btn-xs" onclick="window.location.href='{{route('enquiry.index')}}';" data-toggle="tooltip" data-placement="bottom"  title="Enquiry List"> <i class="icon-list"></i> </button>
                        </div>
                    </div>
                    <div class="card-body">



                        <!-- bootstrap-imageupload. -->

                        <form class="row cmxform" id="parsleyValidationForm" method="post"  enctype="multipart/form-data">

                            <div class="form-group col-lg-6">
                                <label for="firstname">Enquiry By</label>
                                <input class="form-control"  value="{{$enquiry->first_name}} {{$enquiry->last_name}}" readonly>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="lastname">Enquiry On date</label>
                                <input  name="slug" class="form-control" value="{{$enquiry->created_at->format('d-M-Y')}}  ({{Carbon\Carbon::parse($enquiry->created_at)->diffForHumans()}})" type="text" readonly>
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="firstname">Enquiry About</label>
                                <input class="form-control"  value="@foreach(json_decode($enquiry->question_about) as $data) {{$data}} , @endforeach" readonly>
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="firstname"> Preferred Country</label>
                                <input class="form-control"  value="@foreach(json_decode($enquiry->preferred_country) as $data)  {{$data}}, @endforeach" readonly>
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="description">Description</label>
                                <textarea  cols="30" rows="10" data-parsley-trigger="keyup" class="form-control" readonly>{{$enquiry->question}} </textarea>
                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


