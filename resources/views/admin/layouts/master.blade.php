<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">

    <!-- plugin css -->
    <link rel="stylesheet" href="{{adminAssetsUrl('plugins/@mdi/font/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{adminAssetsUrl('plugins/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{adminAssetsUrl('plugins/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{adminAssetsUrl('plugins/simple-line-icons/css/simple-line-icons.css')}}">

    <!-- end plugin css -->



    <link rel="stylesheet" href="{{adminAssetsUrl('plugins/summernote/summernote-bs4.css')}}">
    <link rel="stylesheet" href="{{adminAssetsUrl('plugins/dropify/css/dropify.min.css')}}">
    <link rel="stylesheet" href="{{adminAssetsUrl('plugins/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">

    @stack('plugin-styles')

<!-- common css -->
    <link rel="stylesheet" href="{{adminAssetsUrl('css/app.css')}}">
<!-- end common css -->

    <link rel="stylesheet" href="{{myAsset('css/custom.css')}}">


    @stack('style')
</head>
<body class="sidebar-fixed" data-base-url="{{url('/')}}">

<div class="container-scroller" id="app">
    @include('admin.layouts.header')
    <div class="container-fluid page-body-wrapper">
        @include('admin.layouts.settings-panel')
        @include('admin.layouts.sidebar')
        <div class="main-panel">
            <div class="content-wrapper">
                @yield('content')
            </div>
            @include('admin.layouts.footer')
        </div>
    </div>
</div>

<!-- base js -->
<script src="{{asset('js/app.js')}}"></script>
<script src="{{adminAssetsUrl('plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<!-- end base js -->

<!-- plugin js -->
<script src="{{adminAssetsUrl('plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{adminAssetsUrl('plugins/dropify/js/dropify.min.js')}}"></script>
<script src="{{adminAssetsUrl('plugins/datatables.net/jquery.dataTables.min.js')}}"></script>
<script src="{{adminAssetsUrl('plugins/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@stack('plugin-scripts')
<!-- end plugin js -->

<!-- common js -->
<script src="{{adminAssetsUrl('js/off-canvas.js')}}"></script>
<script src="{{adminAssetsUrl('js/hoverable-collapse.js')}}"></script>
<script src="{{adminAssetsUrl('js/misc.js')}}"></script>
<script src="{{adminAssetsUrl('js/settings.js')}}"></script>
<script src="{{adminAssetsUrl('js/todolist.js')}}"></script>

<!-- end common js -->

<!-- Parsley Validation -->
<script>
    window.ParsleyConfig = {
        errorsWrapper: '<div></div>',
        errorTemplate: '<div class="parsley" role="alert"></div>',
        errorClass: 'has-error',
        successClass: 'has-success'
    };
</script>
<script src="http://parsleyjs.org/dist/parsley.js"></script>

<!-- end Parsley Validation -->
<script src="{{adminAssetsUrl('js/dropify.js')}}"></script>
<script src="{{myAsset('js/custom.js')}}"></script>
<script>
    @if(Session::has('success'))
    Toast.fire({
        icon: 'success',
        title: '{{Session::get('success')}}'
    })
    @endif
</script>
@stack('custom-scripts')
</body>
</html>
