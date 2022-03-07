@extends('website.layouts.master')
@section('title','Study Abroad -Nice Education')
@section('content')
    @php
    $company = \App\Models\Company::first();
    $countries = \App\Models\StudyAbroad::select('country_name')->get();
    $test_preparations = \App\Models\TestPreparation::select('id','title','slug')->get();
    $services = \App\Models\Service::select('id','image','name','slug','title','description','bg_colour')->orderBy('priority','asc')->get();
    $universities = \App\Models\University::orderBy('priority','desc')->get();;
    @endphp
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
