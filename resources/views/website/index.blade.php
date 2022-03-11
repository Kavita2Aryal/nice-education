@extends('website.layouts.master')
@section('title','Nice Education')
@section('content')
    <main class="main home-page">
        <!-- screen -->
        @if($company->homepage_banner != null)
        <section class="screen">
            <div class="imageWrapper">
                <img src="{{asset('storage/images/company/homepage_banners/'.$company->homepage_banner)}}" alt=""/>
            </div>
            <div class="textWrapper">
                <div class="contain">
                    <h2 class="title--large">{{$company->banner_title}}</h2>
                    <p>{{$company->sub_text}}</p>
                    @if($company->btn_url != null)
                    <a href="{{$company->btn_url}}" class="button btn-outline button-white"><span>{{$company->btn_text}}</span><i class="bi bi-chevron-right"></i></a>
                    @endif
                </div>
            </div>
        </section>
        @endif


        <!-- screen half box -->

        <section class="box--screen">
            <div class="container">
                <div class="wrapper">
                    <article>
                        <h2 class="title--section">99%</h2>
                        <p>Visa Acceptance Rate</p>
                    </article>
                    <article>
                        <h2 class="title--section">10K+</h2>
                        <p>Satisfied Students</p>
                    </article>
                    <article>
                        <h2 class="title--section">50+</h2>
                        <p>Experienced Team Member</p>
                    </article>
                </div>
            </div>
        </section>


        <!-- smallBanner -->
        <!-- props
          *text
          *btnText
          *link
        -->
        <section class="banner--small ">
            <div class="container">
                <div class="wrapper">
                    <p class="left">
                        Are you
                        ready to begin your abroad study journey now?
                    </p>
                    <a href="{{route('contactUs')}}" class="button button-primary"><span>get a quote</span><i class="bi bi-chevron-right"></i></a>
                </div>
            </div>
        </section>
        <section class="welcome">
            <div class="container">
                <div class="grid">
                    <aside class="left">
                        <img src="{{asset('storage/images/company/homepage_welcome_images/'.$company->homepage_welcome_image)}}" alt=""/>
                    </aside>
                    <aside class="right">
                        <h2 class="title--section">
                            <span>Welcome</span><span class="title--indicator"></span>
                        </h2>
                        <div class="para">
                            {!! substr($about_us->description, 0, 800) !!}
                        </div>
                        <a href="{{route('aboutUs')}}" class="button btn-outline btn-black">
                            <span>About Us</span>
                            <i class="bi bi-chevron-right"></i>
                        </a>
                    </aside>
                </div>
            </div>
        </section>


        <!-- service -->
        <section class="services">
            <div class="container">

                <h2 class="title--section white">
                    <span>Services that we offer</span>

                    <span class="title--indicator indi-center"></span>
                </h2>
                <div class="row">
                    @foreach($services as $key=> $service)
                    @if($key < 6)
                    <article class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card__img">
                                <img src="{{$service->image}}" alt=""/>
                                <div
                                    class="card__bar"
                                    style="background-color: {{$service->bg_colour}}"
                                ></div>
                            </div>
                            <div class="card__body">
                                <h2 class="card__title">{{$service->title}}</h2>
                                <p>
                                    {!! $service->description !!}
                                </p>
                            </div>
                            <div class="card__action">
                                <a href="./services" title="learn more">Learn More</a>
                            </div>
                        </div>
                    </article>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>


        <!-- companies listing -->
        @if(count($universities)>0)
        <section class="companies">
            <div class="container">
                <div class="carousel">
                    @foreach($universities as $uni)
                    <div>
                        <img src="{{asset('storage/images/university/logos/'.$uni->logo)}}" alt="" />
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        @endif



        <!-- talrecent visa -->
        @if(count($visaAcceptances)>0)
        <section class="visa">
            <div class="container">
                <h2 class="title--section text-center mb-4">
                    <span>Recent Visa Acceptance</span>
                    <span class="title--indicator indi-center"></span>
                </h2>
                <div class="visaSlider">
                    @foreach($visaAcceptances as $visaAcceptance)
                    <div>
                        <div class="visa--card" style="background-image: url('{{asset('storage/images/visa-acceptance/background_images/'.$visaAcceptance->background_image)}}');">
                            <div class="user--img">
                                <img src="{{$visaAcceptance->image}}" alt=""/>
                            </div>
                            <div class="user--info">
                                <h4>{{$visaAcceptance->name}}</h4>
                                <ul>
                                    <li>{{$visaAcceptance->country}}</li>
                                    <li>{{$visaAcceptance->exam_score}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        @endif



        <!-- talk to proff -->
        <section class="banner--small ">
            <div class="container">
                <div class="wrapper">
                    <p class="left">
                        Talk to our
                        professional team now.
                    </p>
                    <a href="{{route('contactUs')}}" class="button button-primary"><span>Contact Us</span><i class="bi bi-chevron-right"></i></a>
                </div>
            </div>
        </section>


        @include('website.layouts.contactUsForm')

    </main>
@endsection
@push('scripts')
    <script>
        $(document).ready(function () {
            $(".companies .carousel").slick({
                dots: false,
                infinite: true,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 4,
                arrows: true,
                prevArrow:
                    "<button class='slick-prev'><i class='bi bi-chevron-left'></i></button>",
                nextArrow:
                    "<button class=' slick-next'><i class='bi bi-chevron-right'></i></button>",
                swipeToSlide: true,
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                        },
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            arrows: false,
                        },
                    },
                ],
            });
        });

        $(document).ready(function () {
            $(".visaSlider").slick({
                dots: true,
                arrows: false,
                infinite: false,
                speed: 300,
                slidesToShow: 3,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1.5,
                        },
                    },
                ],
            });
        });
    </script>
@endpush
