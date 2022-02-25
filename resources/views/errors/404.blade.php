@extends('website.layouts.master')
@section('title','Study Abroad -Nice Education')
@section('content')
    <main class="main notfound-page">
        <section class="banner--title notfound">
            <div class="container">
                <div class="wrapper">
                    <h2 class="title--section white">
                        <span class="title--large">Page Not Found! </span>
                    </h2>
                    <p>
                        Sorry! The page you are looking for does not exist.<br />
                        Please click on the button below to return to homepage.
                    </p>
                    <a href="/" class="button button-white">
                        <span>Homepage</span><i class="bi bi-chevron-right"></i>
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')

@endpush
