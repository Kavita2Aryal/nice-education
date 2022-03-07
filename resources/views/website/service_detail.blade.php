@extends('website.layouts.master')
@section('title',$service->title.'-Nice Education')
@section('content')
    <main class="main service-page">
        <!-- titleBanner -->
        <!-- props
          *text
          -->
        <section class="banner--title">
            <div class="container">
                <div class="wrapper">
                    <h2 class="title--section white">
                        <span class="title--large">Our Services</span>
                        <span class="title--indicator indi-center"></span>
                    </h2>
                </div>
            </div>
        </section>


        <section class="tabBox">
            <nav class="nice--tab">
                <div class="nav nav-tabs service-tab" id="nav-tab" role="tablist">
                    @foreach($services as $ser)
                    <button
                        class="nav-link @if($ser->id == $service->id) active @endif"
                        id="nav-counseling-tab-{{$ser->id}}"
                        data-bs-toggle="tab"
                        data-bs-target="#nav-counseling-{{$ser->id}}"
                        onclick="window.location.href='{{route('serviceDetail',['id'=>$ser->id,'slug'=>$ser->slug])}}'"
                        type="button"
                        role="tab"
                        aria-controls="nav-counseling-{{$ser->id}}"
                        aria-selected="true"
                    >
                        {!! str_replace(" ", "<br/>", $ser->name) !!}
                    </button>
                    @endforeach
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div
                    class="tab-pane fade show active"
                    id="nav-counseling"
                    role="tabpanel"
                    aria-labelledby="nav-counseling-tab"
                >
                    <section class="careerCounsel">
                        <div class="container">
                            <h2 class="title--section text-center mb-4 mb-xl-5">
                                <span>{{$service->title}}</span>
                                <span class="title--indicator indi-center"></span>
                            </h2>
                            <div class="parad">
                                {!! $service->description !!}
                            </div>
                        </div>

                    </section>

                    @if($service->id == 1)
                        @include('website.layouts.how_it_works')
                    @endif

                    @if($service->id == 2)
                        @include('website.layouts.required_documents')
                    @endif

                    @if($service->id ==6)
                        @include('website.layouts.visa_acceptance_ways')
                    @endif

                    @if($service->id ==4)
                        @include('website.layouts.interview_yellow_section')
                    @endif

                    <section class="banner--small light">
                        <div class="container">
                            <div class="wrapper">
                                <p class="left">
                                    Having confusion? Talk to
                                    our professional team now.
                                </p>
                                <a href="{{route('contactUs')}}" class="button button-primary"><span>Contact Us</span><i class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </section>


                </div>

            </div>
        </section>

        <!-- contact -->
        @include('website.layouts.contactUsForm')

    </main>
@endsection

@push('scripts')

@endpush
