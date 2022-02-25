@extends('website.layouts.master')
@section('title','Nice Education')
@section('content')
    <main class="main home-page">
        <!-- screen -->
        <section class="screen">
            <div class="imageWrapper">
                <img
                    src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1000&q=80 "
                    alt=""
                />
            </div>
            <div class="textWrapper">
                <div class="contain">
                    <h2 class="title--large">Take a Right Step</h2>
                    <p>with Nice Education Consultancy</p>
                    <a href="#!" class="button btn-outline button-white">
                        <span>Know More</span>
                        <i class="bi bi-chevron-right"></i>
                    </a>
                </div>
            </div>
        </section>


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
                    <a href="#!" class="button button-primary">
        <span>get a quote</span
        ><i class="bi bi-chevron-right"></i>
                    </a>
                </div>
            </div>
        </section>
        <section class="welcome">
            <div class="container">
                <div class="grid">
                    <aside class="left">
                        <img
                            src="https://images.unsplash.com/photo-1526781480235-d79b4866aa9c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1000&q=80"
                            alt=""
                        />
                    </aside>
                    <aside class="right">
                        <h2 class="title--section">
                            <span>Welcome</span><span class="title--indicator"></span>
                        </h2>
                        <div class="para">
                            <p>
                                Nice Education Consultancy Pvt. Ltd. is an experienced professional
                                in Abroad Study Field and has vast knowledge in the respected field.
                                If you are here than you are in the most successful consultant. From
                                the past history of our company you will know about us. Most of the
                                student and their parents had get satisfaction from us helping
                                students to reach their goals. Nice Education assist students or
                                parents in making educational decisions and giving advice for test
                                preparation, visa preparation documentations etc.
                            </p>
                            <p>
                                Our Company’s field of Activity is study abroad (Academic and
                                Language program). Counseling, Recruitment, Enrollment and visa
                                documentation support as well as test preparation classes.
                            </p>
                        </div>
                        <a href="#!" class="button btn-outline btn-black">
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
                    <article class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card__img">
                                <img
                                    src="https://images.unsplash.com/photo-1506784926709-22f1ec395907?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1468&q=80"
                                    alt=""
                                />
                                <div
                                    class="card__bar"
                                    style="background-color: rgba(252, 227, 0, 0.26)"
                                ></div>
                            </div>
                            <div class="card__body">
                                <h2 class="card__title">Career Counseling</h2>
                                <p>
                                    Nice Education team receives a participate way to deal with
                                    guiding. It places most extreme need on its understudy’s subjects
                                    and nations of intrigue.
                                </p>
                            </div>
                            <div class="card__action">
                                <a href="./services" title="learn more">Learn More</a>
                            </div>
                        </div>
                    </article>
                    <article class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card__img">
                                <img
                                    src="https://images.unsplash.com/photo-1562240020-ce31ccb0fa7d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                                    alt=""
                                />
                                <div
                                    class="card__bar"
                                    style="background-color: rgba(206, 90, 90, 0.5)"
                                ></div>
                            </div>
                            <div class="card__body">
                                <h2 class="card__title">Documentation Guidance</h2>
                                <p>
                                    Nice Education team receives a participate way to deal with
                                    guiding. It places most extreme need on its understudy’s subjects
                                    and nations of intrigue.
                                </p>
                            </div>
                            <div class="card__action">
                                <a href="./services#nav-dguide-tab" title="learn more"
                                >Learn More</a
                                >
                            </div>
                        </div>
                    </article>
                    <article class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card__img">
                                <img
                                    src="https://images.unsplash.com/photo-1502301197179-65228ab57f78?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=685&q=80"
                                    alt=""
                                />
                                <div
                                    class="card__bar"
                                    style="background-color: rgba(196, 255, 216, 0.5)"
                                ></div>
                            </div>
                            <div class="card__body">
                                <h2 class="card__title">Travel Arrangement</h2>
                                <p>
                                    Nice Education team receives a participate way to deal with
                                    guiding. It places most extreme need on its understudy’s subjects
                                    and nations of intrigue.
                                </p>
                            </div>
                            <div class="card__action">
                                <a href="./services#nav-ta-tab" title="learn more">Learn More</a>
                            </div>
                        </div>
                    </article>
                    <article class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card__img">
                                <img
                                    src="https://images.unsplash.com/photo-1529119513315-c7c361862fc7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    alt=""
                                />
                                <div
                                    class="card__bar"
                                    style="background-color: rgba(158, 214, 255, 0.5)"
                                ></div>
                            </div>
                            <div class="card__body">
                                <h2 class="card__title">Interview Assistance</h2>
                                <p>
                                    Nice Education team receives a participate way to deal with
                                    guiding. It places most extreme need on its understudy’s subjects
                                    and nations of intrigue.
                                </p>
                            </div>
                            <div class="card__action">
                                <a href="./services#nav-ia-tab" title="learn more">Learn More</a>
                            </div>
                        </div>
                    </article>
                    <article class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card__img">
                                <img
                                    src="https://images.unsplash.com/photo-1580048915913-4f8f5cb481c4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                                    alt=""
                                />
                                <div
                                    class="card__bar"
                                    style="background-color: rgba(162, 242, 124, 0.5)"
                                ></div>
                            </div>
                            <div class="card__body">
                                <h2 class="card__title">Finance Assistance</h2>
                                <p>
                                    Nice Education team receives a participate way to deal with
                                    guiding. It places most extreme need on its understudy’s subjects
                                    and nations of intrigue.
                                </p>
                            </div>
                            <div class="card__action">
                                <a href="./services#nav-fa-tab" title="learn more">Learn More</a>
                            </div>
                        </div>
                    </article>
                    <article class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card__img">
                                <img
                                    src="https://images.unsplash.com/photo-1518544866330-4e716499f800?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
                                    alt=""
                                />
                                <div
                                    class="card__bar"
                                    style="background-color: rgba(252, 227, 0, 0.26)"
                                ></div>
                            </div>
                            <div class="card__body">
                                <h2 class="card__title">Visa Assistance</h2>
                                <p>
                                    Nice Education team receives a participate way to deal with
                                    guiding. It places most extreme need on its understudy’s subjects
                                    and nations of intrigue.
                                </p>
                            </div>
                            <div class="card__action">
                                <a href="./services#nav-va-tab" title="learn more">Learn More</a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>


        <!-- companies listing -->
        <section class="companies">
            <div class="container">
                <div class="carousel">
                    <div>
                        <img src="{{asset('frontend/images/companies/Troy_University_logo.png')}}" alt="" />
                    </div>
                    <div>
                        <img src="{{asset('frontend/images/companies/Page-1.png')}}" alt="" />
                    </div>
                    <div>
                        <img src="{{asset('frontend/images/companies/IIBIT-Logo4.png')}}" alt="" />
                    </div>
                    <div>
                        <img src="{{asset('frontend/images/companies/wentworth.png')}}" alt="" />
                    </div>
                    <div>
                        <img src="{{asset('frontend/images/companies/Troy_University_logo.png')}}" alt="" />
                    </div>
                    <div>
                        <img src="{{asset('frontend/images/companies/Page-1.png')}}" alt="" />
                    </div>
                    <div>
                        <img src="{{asset('frontend/images/companies/IIBIT-Logo4.png')}}" alt="" />
                    </div>
                    <div>
                        <img src="{{asset('frontend/images/companies/wentworth.png')}}" alt="" />
                    </div>
                </div>
            </div>
        </section>




        <!-- talrecent visa -->
        <section class="visa">
            <div class="container">
                <h2 class="title--section text-center mb-4">
                    <span>Recent Visa Acceptance</span>
                    <span class="title--indicator indi-center"></span>
                </h2>

                <div class="visaSlider">
                    <div>
                        <div
                            class="visa--card"
                            style="
            background-image: url('https://images.unsplash.com/photo-1524820197278-540916411e20?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2390&q=80');
          "
                        >
                            <div class="user--img">
                                <img
                                    src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3387&q=80"
                                    alt=""
                                />
                            </div>
                            <div class="user--info">
                                <h4>Ankit Shrestha</h4>
                                <ul>
                                    <li>AUSTRALIA</li>
                                    <li>IELTS- 8</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div
                            class="visa--card"
                            style="
            background-image: url('https://images.unsplash.com/photo-1510265382668-7b564935d7b5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3264&q=80');
          "
                        >
                            <div class="user--img">
                                <img
                                    src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1061&q=80"
                                    alt=""
                                />
                            </div>
                            <div class="user--info">
                                <h4>Anna KC</h4>
                                <ul>
                                    <li>AMERICA</li>
                                    <li>TOEFL- 8</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div
                            class="visa--card"
                            style="
            background-image: url('https://images.unsplash.com/photo-1542704792-e30dac463c90?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2340&q=80');
          "
                        >
                            <div class="user--img">
                                <img
                                    src="https://images.unsplash.com/photo-1607346256330-dee7af15f7c5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2406&q=80"
                                    alt=""
                                />
                            </div>
                            <div class="user--info">
                                <h4>Birat Adhikari</h4>
                                <ul>
                                    <li>CANADA</li>
                                    <li>IELPTETS- 79</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div
                            class="visa--card"
                            style="
            background-image: url('https://images.unsplash.com/photo-1524820197278-540916411e20?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2390&q=80');
          "
                        >
                            <div class="user--img">
                                <img
                                    src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3387&q=80"
                                    alt=""
                                />
                            </div>
                            <div class="user--info">
                                <h4>Ankit Shrestha</h4>
                                <ul>
                                    <li>AUSTRALIA</li>
                                    <li>IELTS- 8</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div
                            class="visa--card"
                            style="
            background-image: url('https://images.unsplash.com/photo-1510265382668-7b564935d7b5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3264&q=80');
          "
                        >
                            <div class="user--img">
                                <img
                                    src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1061&q=80"
                                    alt=""
                                />
                            </div>
                            <div class="user--info">
                                <h4>Anna KC</h4>
                                <ul>
                                    <li>AMERICA</li>
                                    <li>TOEFL- 8</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div
                            class="visa--card"
                            style="
            background-image: url('https://images.unsplash.com/photo-1542704792-e30dac463c90?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2340&q=80');
          "
                        >
                            <div class="user--img">
                                <img
                                    src="https://images.unsplash.com/photo-1607346256330-dee7af15f7c5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2406&q=80"
                                    alt=""
                                />
                            </div>
                            <div class="user--info">
                                <h4>Birat Adhikari</h4>
                                <ul>
                                    <li>CANADA</li>
                                    <li>IELPTETS- 79</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-- talk to proff -->
        <section class="banner--small ">
            <div class="container">
                <div class="wrapper">
                    <p class="left">
                        Talk to our
                        professional team now.
                    </p>
                    <a href="#!" class="button button-primary"><span>Contact Us</span><i class="bi bi-chevron-right"></i></a>
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
