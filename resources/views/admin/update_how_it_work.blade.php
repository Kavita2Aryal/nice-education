@extends('admin.layouts.master')
@section('title','How It Works')

@section('content')
    <div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Manage How Its Works
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table  class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($works as $key => $work)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                @if($work->image != null)
                                                    <td><img src="{{$work->image}}" alt=""></td>
                                                @else
                                                    <td><img src="{{asset('storage/images/no-image.jpg')}}" alt=""></td>
                                                @endif

                                                <td>{{$work->description}}</td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#howItWork-{{$work->id}}" class="btn btn-sm  btn-outline-success"  title="Edit" ><i class="mdi mdi-lead-pencil"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach


                                        </tbody>
                                    </table>

                                    @foreach($works as $key => $work)
                                        <div class="modal fade" id="howItWork-{{$work->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                             aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <form action="{{route('howItWork')}}" method="post" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel"><b>Manage How Its Works </b></h5>
                                                            <hr>
                                                        </div>
                                                        <div class="modal-body">

                                                            <div class="form-group col-lg-12">
                                                                <div class="grid-margin stretch-card">
                                                                    <input type="file" name="image" data-default-file="{{$work->image}}" class="dropify" data-parsley-trigger="keyup" accept="image/jpeg, image/png, image/jpg" data-parsley-filemimetypes = 'image/jpeg, image/png'/>
                                                                </div>

                                                            </div>


                                                            <div class="col-md-12">
                                                                <div class="form-group  label-floating">
                                                                    <label>
                                                                        Short Description
                                                                        {{--<small>*</small>--}}
                                                                    </label>
                                                                    <input type="hidden" name="id" value="{{$work->id}}">
                                                                    <input class="form-control" value="{{$work->description}}" name="description" type="text" required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-success">Save </button>
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
                    url:'/admin/service' + '/' + id,
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


