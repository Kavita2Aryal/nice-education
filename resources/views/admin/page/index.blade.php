@extends('admin.layouts.master')
@section('title','Pages')

@section('content')
    <div>

        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="template-demo">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-light bg-*">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{route('page.index')}}">Page </a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manage Pages</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Manage Page

{{--                        <button class="btn btn-outline-primary btn-xs float-right" onclick="window.location.href='{{route('page.create')}}';" data-toggle="tooltip" data-placement="bottom"  title="Create Page"> <i class="icon-plus"></i> </button>--}}

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
                                            <th>Page</th>
                                            <th>Created At</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($pages as $key => $page)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td><img src="{{$page->image}}" alt=""></td>
                                            <td>{{$page->title}}</td>
                                            <td>
                                                {{$page->created_at->format('d-M-Y')}}
                                            </td>
                                            <td>
                                                <a  class="btn btn-sm  btn-outline-success" href="{{route('page.edit',$page->id)}}" title="Edit" ><i class="mdi mdi-lead-pencil"></i></a>
                                                <button  class="btn btn-sm btn-outline-danger" onclick="deleteFunction({{$page->id}})" title="Delete"><i class="mdi mdi-close"></i></button>
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
                    url:'/admin/page' + '/' + id,
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


