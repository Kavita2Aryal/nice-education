@extends('admin.layouts.master')
@section('title','Services')

@section('content')
    <div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Manage Services
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="order-listing" class="table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Priority</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($services as $key => $service)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td><img src="{{$service->image}}" alt=""></td>
                                                <td>{{$service->title}}</td>
                                                <td>
                                                    {{$service->priority}}
                                                </td>
                                                <td>
                                                    <a  class="btn btn-sm  btn-outline-success" href="{{route('service.edit',$service->id)}}" title="Edit" ><i class="mdi mdi-lead-pencil"></i></a>
                                                    <button  class="btn btn-sm btn-outline-danger" onclick="deleteFunction({{$service->id}})" title="Delete"><i class="mdi mdi-close"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach


                                        </tbody>
                                    </table>

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


