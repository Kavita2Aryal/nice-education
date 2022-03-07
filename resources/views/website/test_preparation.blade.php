@extends('website.layouts.master')
@section('title','Test Preparation -Nice Education')
@section('content')
    <main class="main test-page">
        <!-- banner -->


        <section class="banner--title">
            <div class="container">
                <div class="wrapper">
                    <h2 class="title--section white">
                        <span class="title--large">{{$test->title}}</span>
                        <span class="title--indicator indi-center"></span>
                    </h2>
                </div>
            </div>
        </section>


        <!-- tabbox -->
        <section class="tabBox">
            <div class="container">
                <nav class="nice--tab">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button
                            class="nav-link active"
                            data-bs-toggle="tab"
                            data-bs-target="#nav-1"
                            type="button"
                            role="tab"
                            aria-controls="nav-counseling"
                            id="overview"
                        >
                            Overview
                        </button>
                        <button
                            class="nav-link"
                            data-bs-toggle="tab"
                            data-bs-target="#nav-2"
                            type="button"
                            role="tab"
                            id="preparation"
                        >
                            Preparation
                        </button>
                        <button
                            class="nav-link"
                            data-bs-toggle="tab"
                            data-bs-target="#nav-3"
                            type="button"
                            role="tab"
                            id="testformat"
                        >
                            Test Format
                        </button>

                        <button
                            class="nav-link"
                            data-bs-toggle="tab"
                            data-bs-target="#nav-4"
                            type="button"
                            role="tab"
                            id="faq2"
                        >
                            FAQs
                        </button>
                    </div>
                </nav>
            </div>
        </section>

        <!-- gg -->
        <div class="tabBox">
            <div class="tab-content" id="nav-tabContent">
                <!-----
                ==========================Overview Tab=============================================
                ------->
                <div class="tab-pane fade show active" id="nav-1" role="tabpanel">
                    <section class="whyStd">
                        <div class="container">
                            <h2 class="title--section text-center mb-4">
                                <span>{{$test->overview_title}}</span>
                                <span class="title--indicator indi-center"></span>
                            </h2>
                            <div class="parad"> {!! $test->overview_description !!}</div>

                            @if($test->document != null)
                            <div class="text-center mt-5">
                                <a class="button button-primary" href="{{$test->document}}" download> <span>Download Guide</span><i class="bi bi-chevron-right"></i></a>
                            </div>
                            @endif
                        </div>
                    </section>
                    <section class="education">
                        <div class="container">
                            <h2 class="title--section text-center mb-md-4">
                                <span>Types of {{$test->title}} exam</span>
                                <span class="title--indicator indi-center"></span>
                            </h2>
                            <div class="grid">
                                <aside class="left">
                                    @foreach($test->exams as $exam)
                                    <h2 class="title--section"><span>{{$exam->exam_title}}</span><span class="title--indicator"></span></h2>
                                    <p> {!! $exam->exam_detail !!} </p>
                                    @endforeach

                                </aside>
                                <aside class="right"><div class="image"><img src="{{asset('storage/images/test-preparation/overview_images/'.$test->overview_image)}}" alt="Overview Image"/></div></aside>
                            </div>
                        </div>
                    </section>
                </div>


                <!----
                =========================Preparation Tab =========================================
                 ----->
                <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-dguide-tab">
                    <section class="popularCourses start prepare">
                        <div class="container">
                            <h2 class="title--section text-center mb-4">
                                <span>{{$test->preparation_title}}</span>
                                <span class="title--indicator indi-center"></span>
                            </h2>
                            <div class="parad"> {!! $test->preparation_description !!} </div>
                            @if($test->document != null)
                                <div class="text-center mt-5">
                                    <a class="button button-primary" href="{{$test->document}}" download> <span>Download Guide</span><i class="bi bi-chevron-right"></i></a>
                                </div>
                            @endif
                        </div>
                        <div class="yellow">
                            <div class="container">
                                <h2 class="title--section text-center mb-4 mb-xl-5">
                                    <span>Recommended Books</span>
                                    <span class="title--indicator indi-center blackVariant"></span>
                                </h2>
                                <div class="grid">
                                    @foreach($test->books as $book)
                                    <aside>
                                        <h2 class="title">{{$book->book_title}}</h2>
                                        {!! $book->book_description !!}
                                    </aside>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- education -->
                    <section class="education">
                        <div class="container">
                            <h2 class="title--section text-center mb-md-4">
                                <span>{{$test->title}} Practice Test</span>
                                <span class="title--indicator indi-center"></span>
                            </h2>
                            <div class="grid mb">
                                <aside class="left">
                                    <h2 class="title--section"><span>{{$test->reading_practice_title}}</span><span class="title--indicator"></span></h2>
                                    <div class="para">
                                        {{$test->reading_practice}}
{{--                                        <a href="#!" target="_blank"><cite>TOEFL Reading Practice Test Sample- ETS TOEFL</cite></a>--}}
                                    </div>

                                    <h2 class="title--section"><span>{{$test->listening_practice_title}}</span><span class="title--indicator"></span></h2>
                                    <div class="para">
                                        {{$test->listening_practice}}
{{--                                        <a href="#!" target="_blank"><cite>TOEFL Listening Practice Test Sample- ETS TOEFL</cite></a>--}}
                                    </div>
                                </aside>
                                <aside class="right">
                                    <div class="image">
                                        <img src="{{asset('storage/images/test-preparation/preparation_right_images/'.$test->preparation_right_image)}}" alt=""/>
                                    </div>
                                </aside>
                            </div>
                            <div class="grid" style="flex-direction: row-reverse">
                                <aside class="left">
                                    <h2 class="title--section"><span>{{$test->writing_practice_title}}</span><span class="title--indicator"></span></h2>
                                    <div class="para">
                                        {!! $test->writing_practice !!}
{{--                                        <a href="#!" target="_blank"><cite>TOEFL Reading Practice Test Sample- ETS TOEFL</cite></a>--}}
                                    </div>

                                    <h2 class="title--section"><span>{{$test->speaking_practice_title}}</span><span class="title--indicator"></span></h2>
                                    <div class="para">
                                        {!! $test->speaking_practice !!}
{{--                                        <a href="#!" target="_blank"><cite>TOEFL Listening Practice Test Sample- ETS TOEFL</cite></a>--}}
                                    </div>
                                </aside>
                                <aside class="right">
                                    <div class="image">
                                        <img src="{{asset('storage/images/test-preparation/preparation_left_images/'.$test->preparation_left_image)}}" alt=""/>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </section>


                </div>


                <!----
                ========================Test Format ==============================================
                ------>
                <div class="tab-pane fade" id="nav-3" role="tabpanel">
                    <section class="document start">
                        <div class="container">
                            <h2 class="title--section text-center mb-4">
                                <span>{{$test->format_title}}</span>
                                <span class="title--indicator indi-center"></span>
                            </h2>
                            <div class="parad">{!! $test->format_description !!}</div>
                            @if($test->document != null)
                                <div class="text-center mt-5">
                                    <a class="button button-primary" href="{{$test->document}}" download> <span>Download Guide</span><i class="bi bi-chevron-right"></i></a>
                                </div>
                            @endif
                        </div>
                    </section>
                    <section class="exam--pattern">
                        <div class="container">
                            <h2 class="title--section text-center mb-4 mb-lg-5">
                                <span>{{$test->title}} Exam Pattern</span>
                                <span class="title--indicator indi-center"></span>
                            </h2>
                            <div class="row">
                                <div class="col-6 col-md-4 col-lg-3">
                                    <article class="card">
                                        <div class="card--top">
                                            <h2 class="title">Reading</h2>
                                        </div>
                                        <div class="card--body">
                                            <div class="para">
                                                {!! $test->reading_pattern !!}
                                            </div>

                                        </div>
                                    </article>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3">
                                    <article class="card">
                                        <div class="card--top">
                                            <h2 class="title">Listening</h2>
                                        </div>
                                        <div class="card--body">
                                            <div class="para">
                                               {!! $test->listening_pattern  !!}
                                            </div>

                                        </div>
                                    </article>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3">
                                    <article class="card">
                                        <div class="card--top">
                                            <h2 class="title">Writing</h2>
                                        </div>
                                        <div class="card--body">
                                            <div class="para">
                                                {!! $test->writing_pattern  !!}
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3">
                                    <article class="card">
                                        <div class="card--top">
                                            <h2 class="title">Speaking</h2>
                                        </div>
                                        <div class="card--body">
                                            <div class="para">
                                                {!! $test->speaking_pattern !!}
                                            </div>

                                        </div>
                                    </article>
                                </div>
                            </div>
{{--                            <div class="text-center">--}}
{{--                                <a href="#" target="_blank" class="normal-link">--}}
{{--                                    <cite>Understanding Your TOEFL iBT Scores</cite>--}}
{{--                                </a>--}}
{{--                            </div>--}}
                        </div>
                    </section>

                </div>


                <!-------
                ======================= FAQ ======================================================
                -------->
                <div class="tab-pane fade" id="nav-4" role="tabpanel">
                    <section class="faq start">
                        <div class="container">
                            <h2 class="title--section text-center mb-4">
                                <span>Frequently Asked Questions</span>
                                <span class="title--indicator indi-center"></span>
                            </h2>

                            <div class="accordion" id="accordionExample">
                                @foreach($test->faqs as $key =>  $faq)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne{{$key}}">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{$key}}">
                                        <span class="circle">
                                          <i class="bi bi-plus"></i>
                                          <i class="bi bi-dash"></i>
                                        </span>
                                            {{$faq->question}}
                                        </button>
                                    </h2>
                                    <div id="collapseOne{{$key}}" class="accordion-collapse collapse @if($key == 0) show @endif" aria-labelledby="headingOne{{$key}}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div>{!! $faq->answer !!}</div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>

        <!-- contact -->
        @include('website.layouts.contactUsForm')


        <!-- small banner -->
        <section class="banner--small ">
            <div class="container">
                <div class="wrapper">
                    <p class="left">
                        Having confusion? Talk to our professional team now.
                    </p>
                    <a href="{{route('contactUs')}}" class="button button-primary"><span>Contact Us</span><i class="bi bi-chevron-right"></i></a>
                </div>
            </div>
        </section>

    </main>
@endsection

@push('scripts')

@endpush
