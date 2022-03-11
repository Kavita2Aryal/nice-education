@extends('admin.layouts.master')
@section('title','Enquiries')

@section('content')
    <div>

        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="template-demo">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-light bg-*">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manage Enquiries</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Enquiries

                        <button class="btn btn-outline-primary btn-xs float-right" onclick="window.location.href='{{route('page.create')}}';" data-toggle="tooltip" data-placement="bottom"  title="Create Page"> <i class="icon-plus"></i> </button>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="order-listing" class="table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Enquiry About</th>
                                            <th>Preferred Country</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($enquiries as $key => $enquiry)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$enquiry->first_name}} {{$enquiry->last_name}}</td>
                                                <td>

                                                    @foreach(json_decode($enquiry->question_about) as $data)
                                                        {{$data}},
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach(json_decode($enquiry->preferred_country) as $data)
                                                        {{$data}},
                                                    @endforeach
                                                </td>

                                                <td>
                                                    <a  class="btn btn-sm  btn-outline-success" href="{{route('enquiry.show',$enquiry->id)}}" title="Show" ><i class="mdi mdi-eye"></i></a>
                                                    <button  class="btn btn-sm btn-outline-danger" onclick="deleteFunction({{$enquiry->id}})" title="Delete"><i class="mdi mdi-close"></i></button>
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
                    url:'/admin/enquiry' + '/' + id,
                    type : "POST",
                    data : {'_method' : 'DELETE', '_token' : csrf_token},

                    success:function(){
                        location.reload();
                        console.log('success');

                    },
                    error:function(){
                        location.reload();
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


