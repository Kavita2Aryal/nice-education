@extends('admin.layouts.master')
@section('title','Courses')

@section('content')
    <div>
        <div class="row">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header">
                        Add Course
                    </div>
                    <div class="card-body">
                        <form class="row cmxform" id="parsleyValidationForm" method="post" action="{{route('course.store')}}" enctype="multipart/form-data">
                        @csrf

                        <!-- bootstrap-imageupload. -->


                            <div class="form-group col-lg-12">
                                <label for="firstname">Course Name</label>
                                <input class="form-control" name="name"  type="text" data-parsley-trigger="keyup" required data-parsley-required-message= "*The name field is required.">
                            </div>


                            <div class="form-group col-lg-12">
                                <input class="btn btn-primary float-right" type="submit" value="Save">
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="card">
                    <div class="card-header">
                        Manage Courses
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="order-listing"  class="table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($courses as $key => $course)
                                            <tr>
                                                <td>{{++$key}}</td>

                                                <td>{{$course->name}}</td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#howItWork-{{$course->id}}" class="btn btn-sm  btn-outline-success"  title="Edit" ><i class="mdi mdi-lead-pencil"></i></a>
                                                    <button  class="btn btn-sm btn-outline-danger" onclick="deleteFunction({{$course->id}})" title="Delete"><i class="mdi mdi-close"></i></button>

                                                </td>
                                            </tr>
                                        @endforeach


                                        </tbody>
                                    </table>

                                    @foreach($courses as $key => $course)
                                        <div class="modal fade" id="howItWork-{{$course->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                             aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <form action="{{route('course.update',$course->id)}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('put')

                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel"><b>Update Course Name </b></h5>
                                                            <hr>
                                                        </div>
                                                        <div class="modal-body">

                                                            <div class="col-md-12">
                                                                <div class="form-group  label-floating">
                                                                    <label>
                                                                        Name
                                                                        {{--<small>*</small>--}}
                                                                    </label>
                                                                    <input class="form-control" value="{{$course->name}}" name="name" type="text" required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-success"> Update </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom-scripts')
    <script src="{{adminAssetsUrl('js/data-table.js')}}"></script>

    <script>
        function deleteFunction(id) {
            var csrf_token = $('meta[name="csrf-token"]').attr('content');

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then(function () {

                $.ajax({
                    url:'/admin/course' + '/' + id,
                    type : "POST",
                    data : {'_method' : 'DELETE', '_token' : csrf_token},

                    success:function(){

                        console.log('success');
                        location.reload();
                    },
                    error:function(){
                        swal({
                            title: 'Oops...',
                            text: data.message,
                            type: 'error',
                            timer: '1500'
                        })
                    }
                });

            });

        }
    </script>
@endpush

