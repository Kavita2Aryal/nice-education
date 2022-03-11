@extends('website.layouts.master')
@section('title',$study->country_name.'-Nice Education')
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
                        <span class="title--large">Study in {{$study->country_name}}</span>
                        <span class="title--indicator indi-center"></span>
                    </h2>
                </div>
            </div>
        </section>


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
                            id="edu"
                        >
                            Educational<br />
                            System
                        </button>
                        <button
                            class="nav-link"
                            data-bs-toggle="tab"
                            data-bs-target="#nav-2"
                            type="button"
                            role="tab"
                            id="popc"
                        >
                            Popular <br />
                            Courses
                        </button>
                        <button
                            class="nav-link"
                            data-bs-toggle="tab"
                            data-bs-target="#nav-3"
                            type="button"
                            role="tab"
                            id="ddr"
                        >
                            Documents <br />
                            Required
                        </button>

                        <button
                            class="nav-link"
                            data-bs-toggle="tab"
                            data-bs-target="#nav-4"
                            type="button"
                            role="tab"
                            id="intake"
                        >
                            Intakes
                        </button>
                        <button
                            class="nav-link"
                            data-bs-toggle="tab"
                            data-bs-target="#nav-5"
                            type="button"
                            role="tab"
                            id="psw"
                        >
                            Post Study
                            <br />Work Visa
                        </button>
                        <button
                            class="nav-link"
                            data-bs-toggle="tab"
                            data-bs-target="#nav-6"
                            type="button"
                            role="tab"
                            id="faq"
                        >
                            FAQs
                        </button>
                    </div>
                </nav>
            </div>
        </section>
        <div class="tabBox">
            <div class="tab-content" id="nav-tabContent">
                <!-------------- EDUCATION SYSTEM TAB -------------------------------->
                <div class="tab-pane fade show active" id="nav-1" role="tabpanel">
                    <section class="whyStd">
                        <div class="container">
                            <h2 class="title--section text-center mb-4">
                                <span>Why {{$study->country_name}}?</span>
                                <span class="title--indicator indi-center"></span>
                            </h2>
                            <div class="parad">
                                {!! $study->why_message !!}
                            </div>
                        </div>
                    </section>
                    <section class="education">
                        <div class="container">
                            <h2 class="title--section text-center mb-md-4">
                                <span>Educational System</span>
                                <span class="title--indicator indi-center"></span>
                            </h2>
                            <div class="grid">
                                <aside class="left">
                                    <h2 class="title--section">
                                        <span>Welcome</span><span class="title--indicator"></span>
                                    </h2>
                                    {!! $study->welcome_message !!}
                                    <h2 class="title--section">
                                        <span>{{$study->education_system_title}}</span><span class="title--indicator"></span>
                                    </h2>
                                    {!! $study->education_system_description !!}
                                </aside>
                                <aside class="right">
                                    <div class="image">
                                        <img
                                            src="{{asset('storage/images/study-abroad/education_system_images/'.$study->education_system_image)}}"
                                            alt=""
                                        />
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </section>


                </div>
                <!-------------- EDUCATION SYSTEM TAB -------------------------------->


                <!-------------- Popular Courses TAB -------------------------------->
                <div
                    class="tab-pane fade"
                    id="nav-2"
                    role="tabpanel"
                    aria-labelledby="nav-dguide-tab"
                >
                    <section class="popularCourses start">
                        <div class="container">
                            <h2 class="title--section text-center mb-4">
                                <span>{{$study->popular_course_title}}</span>
                                <span class="title--indicator indi-center"></span>
                            </h2>
                            <div class="parad">
                                {!! $study->popular_course_description !!}
                            </div>
                        </div>
                        <div class="yellow">
                            <div class="container">
                                <ul>
                                    @foreach($courses as $course)
                                    <li> {{$course->name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </section>
                    <section class="duration">
                        <div class="container">
                            <h2 class="title--section text-center mb-4">
                                <span>Course Duration</span>
                                <span class="title--indicator indi-center"></span>
                            </h2>

                            <div class="grid">
                                <div class="item">
                                    <h2 class="title">3 years</h2>
                                    <p>Bachelor Degree</p>
                                </div>
                                <div class="item">
                                    <h2 class="title">4 years</h2>
                                    <p>Bachelor Degree(Hons)</p>
                                </div>
                                <div class="item">
                                    <h2 class="title">6 months</h2>
                                    <p>Graduate Certificate</p>
                                </div>
                                <div class="item">
                                    <h2 class="title">12 months</h2>
                                    <p>Bachelor Degree</p>
                                </div>
                                <div class="item">
                                    <h2 class="title">1-2 years</h2>
                                    <p>Bachelor Degree(Hons)</p>
                                </div>
                                <div class="item">
                                    <h2 class="title">1-2 years</h2>
                                    <p>Graduate Certificate</p>
                                </div>
                                <div class="item">
                                    <h2 class="title">3 years</h2>
                                    <p>Graduate Certificate</p>
                                </div>
                            </div>
                        </div>
                    </section>


                </div>
                <!-------------- Popular Courses TAB -------------------------------->

                <!-------------- Documents Required TAB ----------------------------->
                <div class="tab-pane fade" id="nav-3" role="tabpanel">
                    <section class="document start">
                        <div class="container">
                            <h2 class="title--section text-center mb-4">
                                <span>{{$study->document_required_title}}</span>
                                <span class="title--indicator indi-center"></span>
                            </h2>
                            <div class="parad">
                                {!! $study->document_required_description !!}
                            </div>
                            <div class="files--lists">
                                <div class="list--grid">
                                    @foreach($documents as $document)
                                    <div class="list--item">
                                        <svg
                                            width="32"
                                            height="32"
                                            viewBox="0 0 32 32"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32Z"
                                                fill="#00345A"
                                            ></path>
                                            <path
                                                d="M25.8184 10.6371L23.6833 8.46934C23.5673 8.35137 23.379 8.35137 23.2582 8.46934L13.4183 18.4822L8.80516 13.7879C8.68922 13.67 8.50083 13.67 8.38007 13.7879L6.18217 16.0196C6.12903 16.0786 6.09521 16.1523 6.09521 16.2359C6.09521 16.3145 6.12903 16.3931 6.18217 16.4472L13.143 23.5305C13.201 23.5895 13.2734 23.619 13.3555 23.619C13.4328 23.619 13.5101 23.5895 13.5633 23.5305L25.8136 11.0696C25.9343 10.9517 25.9343 10.7551 25.8184 10.6371Z"
                                                fill="white"
                                            ></path>
                                        </svg>
                                        <span>{{$document->name}}</span>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
                <!-------------- Documents Required TAB ----------------------------->

                <!-------------- Intakes TAB ---------------------------------------->
                <div class="tab-pane fade" id="nav-4" role="tabpanel">
                    <section class="intakes start">
                        <div class="container">
                            <h2 class="title--section text-center mb-4">
                                <span>{{$study->intake_title}}</span>
                                <span class="title--indicator indi-center"></span>
                            </h2>
                            <div class="parad">
                                {!! $study->intake_description !!}
                            </div>
                        </div>
                        <div class="photos">
                            <div class="image">
                                <img
                                    src="{{asset('storage/images/study-abroad/first_intake_images/'.$study->first_intake_image)}}"
                                    alt=""
                                />
                                <div class="wrapper white">
                                    <h2 class="title">First Intake</h2>
                                    <p>{{$study->first_intake_session}}</p>
                                </div>
                            </div>
                            <div class="image">
                                <img
                                    src="{{asset('storage/images/study-abroad/second_intake_images/'.$study->second_intake_image)}}"
                                    alt=""
                                />
                                <div class="wrapper white">
                                    <h2 class="title">Second Intake</h2>
                                    <p>{{$study->second_intake_session}}</p>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
                <!-------------- Intakes TAB ---------------------------------------->

                <!-------------- Post Visa Work TAB---------------------------------->
                <div class="tab-pane fade" id="nav-5" role="tabpanel">
                    <section class="postStudy start">
                        <div class="container">
                            <h2 class="title--section text-center mb-4">
                                <span>{{$study->work_visa_section_title}}</span>
                                <span class="title--indicator indi-center"></span>
                            </h2>
                            <div class="parad">
                                {!! $study->work_visa_section_description !!}
                            </div>
                        </div>
                        <div class="yellow">
                            <div class="container">
                                {!! $study->yellow_section_content !!}
                            </div>
                        </div>
                        <div class="welcome weare">
                            <div class="container">
                                <div class="grid">
                                    <aside class="right">
                                        <h2 class="title--sm"><span>{{$study->title_below_yellow_section}}</span><span class="title--indicator"></span>
                                        </h2>
                                        <div class="para">
                                           {!! $study->description_below_yellow_section !!}
                                        </div>
                                    </aside>
                                    <aside class="left">
                                        <img src="{{asset('storage/images/study-abroad/image_below_yellow_sections/'.$study->image_below_yellow_section)}}" alt=""/>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </section>


                </div>
                <!-------------- Post Visa Work TAB --------------------------------->

                <!-------------- FAQ TAB -------------------------------------------->
                <div class="tab-pane fade" id="nav-6" role="tabpanel">
                    <section class="faq start">
                        <div class="container">
                            <h2 class="title--section text-center mb-4">
                                <span>Frequently Asked Questions</span>
                                <span class="title--indicator indi-center"></span>
                            </h2>

                            <div class="accordion" id="accordionExample">
                                @foreach($faqs as $key =>  $faq)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne-{{$faq->id}}">
                                        <button
                                            class="accordion-button"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne-{{$faq->id}}"
                                        >
                                        <span class="circle">
                                          <i class="bi bi-plus"></i>
                                          <i class="bi bi-dash"></i>
                                        </span>
                                            {{$faq->question}}
                                        </button>
                                    </h2>
                                    <div
                                        id="collapseOne-{{$faq->id}}"
                                        class="accordion-collapse collapse @if($key == 0) show @endif"
                                        aria-labelledby="headingOne-{{$faq->id}}"
                                        data-bs-parent="#accordionExample"
                                    >
                                        <div class="accordion-body">
                                            <div>
                                                {!! $faq->answer !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </section>

                </div>
                <!-------------- FAQ TAB --------------------------------------------->


            </div>
        </div>
        <!-- talk to proff -->
        <section class="banner--small ">
            <div class="container">
                <div class="wrapper">
                    <p class="left">
                        Having
                        confusion? Talk to our professional team now.
                    </p>
                    <a href="{{route('contactUs')}}" class="button button-primary"><span>Contact Us</span><i class="bi bi-chevron-right"></i>
                    </a>
                </div>
            </div>
        </section>

    </main>
@endsection

@push('scripts')

@endpush
