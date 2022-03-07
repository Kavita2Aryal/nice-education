@extends('website.layouts.master')
@section('title','About Us -Nice Education')
@section('content')
    <main class="main about-page">
        <!-- titleBanner -->
        <!-- props
          *text
          -->
        <section class="banner--title">
            <div class="container">
                <div class="wrapper">
                    <h2 class="title--section white">
                        <span class="title--large">About us</span>
                        <span class="title--indicator indi-center"></span>
                    </h2>
                </div>
            </div>
        </section>


        <!-- what we are -->
        <section class="welcome weare">
            <div class="container">
                <div class="grid">
                    <aside class="right">
                        <h2 class="title--section">
                            <span>{{$about_us->title}}</span><span class="title--indicator"></span>
                        </h2>
                        <div class="para">
                            {!! $about_us->description !!}
                        </div>
                        <a href="#!" class="button button-primary">
                            <span>get a quote</span>
                            <i class="bi bi-chevron-right"></i>
                        </a>
                    </aside>
                    @if($about_us->image != null)
                    <aside class="left">
                        <img src="{{$about_us->image}}" alt=""/>
                    </aside>
                    @endif
                </div>
            </div>
        </section>


        <!-- why nice -->
        <section class="whynice">
            <div class="container">
                <h2 class="title--section mb-4 mb-lg-5 text-center">
                    <span>Why Nice Education?</span>
                    <span class="title--indicator indi-center"></span>
                </h2>
                <div class="row">
                    @foreach($whyUs as $key => $data)
                    <article class="col-12 col-sm-6 col-xl-3">
                        <div class="info--card">
                            <div class="illustration">
                                {!! $data->icon !!}
                            </div>

                            <div class="illus--data">
                                <h4>{{$data->title}}</h4>
                                {!! $data->description !!}
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </section>


        <!-- exp -->
        <section class="banner--small exp">
            <div class="container">
                <div class="wrapper">
                    <p class="left">
                        More than 10 Years of <br />
                        Experience
                    </p>
                    <div class="right">
                        <div class="grid">
                            <div>
                                <h2 class="title">99%</h2>
                                <p class="text">Visa Acceptance Rate</p>
                            </div>
                            <div>
                                <h2 class="title">50+</h2>
                                <p class="text">Experienced Team Member</p>
                            </div>
                            <div>
                                <h2 class="title">10K+</h2>
                                <p class="text">Satisfied students</p>
                            </div>
                            <div>
                                <h2 class="title">100</h2>
                                <p class="text">Partner institutions</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- mission -->
        <section class="mission">
            <div class="container">
                <div class="wrapper">
                    <aside class="left">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="nav_1" role="tabpanel">
                                <h2 class="title--section">
                                    <span>Our Mission</span><span class="title--indicator"></span>
                                </h2>
                                <div class="para">
                                    {!! $company->our_mission !!}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav_2" role="tabpanel">
                                <h2 class="title--section">
                                    <span>Our Vision</span><span class="title--indicator"></span>
                                </h2>
                                <div class="para">
                                    {!! $company->our_vision !!}
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-start">
                            <div class="nav" role="tablist">
                                <a
                                    class="nav-link active"
                                    data-bs-toggle="pill"
                                    type="button"
                                    role="tab"
                                    href="#nav_1"
                                >
                                    <div>
                                        <svg
                                            width="44"
                                            height="44"
                                            viewBox="0 0 44 44"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M38.0018 10.1226C38.1308 10.1656 38.2693 10.1718 38.4016 10.1405C38.534 10.1093 38.655 10.0418 38.7512 9.94558L43.7855 4.91124C43.8817 4.81509 43.9492 4.69407 43.9804 4.56174C44.0117 4.42941 44.0054 4.29099 43.9625 4.16199C43.9195 4.03299 43.8414 3.91851 43.7371 3.83136C43.6327 3.74421 43.5061 3.68785 43.3715 3.66858L40.7113 3.28846L40.3314 0.628491C40.3122 0.493893 40.2558 0.367317 40.1686 0.262945C40.0815 0.158572 39.967 0.0805246 39.838 0.037545C39.709 -0.00543459 39.5706 -0.0116486 39.4383 0.0195992C39.3059 0.0508471 39.1849 0.118322 39.0888 0.214467L34.0544 5.24881C33.9583 5.34498 33.8908 5.46604 33.8596 5.59841C33.8284 5.73078 33.8347 5.86923 33.8778 5.99822L34.6499 8.3146L33.2789 9.68556C29.4768 6.15474 24.4408 4.25721 19.254 4.40111C14.0673 4.54501 9.14423 6.71884 5.54371 10.455C1.94319 14.1912 -0.0471251 19.1913 0.000847499 24.3798C0.0488201 29.5683 2.13125 34.5308 5.80024 38.1998C9.46923 41.8687 14.4317 43.9512 19.6202 43.9991C24.8087 44.0471 29.8088 42.0568 33.545 38.4563C37.2812 34.8558 39.455 29.9327 39.5989 24.746C39.7428 19.5592 37.8453 14.5232 34.3144 10.7211L35.6851 9.3504L38.0018 10.1226ZM38.1419 24.1648C38.1482 28.3762 36.7043 32.4614 34.0532 35.7336C31.402 39.0059 27.7051 41.2656 23.5839 42.133C19.4628 43.0004 15.1686 42.4226 11.4234 40.4966C7.67809 38.5707 4.71004 35.4141 3.01816 31.5574C1.32627 27.7007 1.01369 23.3792 2.13298 19.3192C3.25226 15.2592 5.73516 11.7083 9.16428 9.26348C12.5934 6.81862 16.7597 5.62884 20.9628 5.89415C25.1659 6.15946 29.1495 7.86368 32.244 10.7203L29.1262 13.8383C26.4203 11.4023 22.8702 10.1192 19.2321 10.2624C15.594 10.4055 12.1557 11.9637 9.64959 14.6048C7.14349 17.2459 5.76776 20.7612 5.8155 24.4018C5.86323 28.0423 7.33067 31.5204 9.90516 34.0948C12.4796 36.6693 15.9577 38.1368 19.5982 38.1845C23.2388 38.2322 26.7541 36.8565 29.3952 34.3504C32.0363 31.8443 33.5945 28.406 33.7376 24.7679C33.8808 21.1298 32.5977 17.5797 30.1618 14.8738L33.2797 11.756C36.408 15.1306 38.1449 19.5632 38.1419 24.1648ZM19.3175 24.6825C19.3855 24.7505 19.4662 24.8045 19.555 24.8413C19.6438 24.8781 19.7391 24.897 19.8352 24.897C19.9314 24.897 20.0266 24.8781 20.1154 24.8413C20.2043 24.8045 20.285 24.7505 20.3529 24.6825L23.4124 21.623C24.0533 22.5235 24.3324 23.6319 24.1944 24.7285C24.0564 25.8252 23.5114 26.8299 22.6674 27.5436C21.8235 28.2572 20.7421 28.6277 19.6378 28.5816C18.5336 28.5355 17.4869 28.0762 16.7054 27.2946C15.9238 26.5131 15.4645 25.4664 15.4184 24.3622C15.3723 23.2579 15.7428 22.1765 16.4564 21.3326C17.1701 20.4886 18.1748 19.9436 19.2715 19.8056C20.3681 19.6676 21.4765 19.9467 22.377 20.5876L19.3175 23.6471C19.2495 23.715 19.1955 23.7957 19.1587 23.8846C19.1219 23.9734 19.1029 24.0686 19.1029 24.1648C19.1029 24.2609 19.1219 24.3562 19.1587 24.445C19.1955 24.5338 19.2495 24.6145 19.3175 24.6825ZM23.4216 19.543C22.2406 18.6254 20.7542 18.1925 19.2652 18.3323C17.7762 18.4722 16.3965 19.1744 15.407 20.2958C14.4176 21.4172 13.8927 22.8737 13.9394 24.3685C13.9861 25.8633 14.6008 27.2842 15.6583 28.3417C16.7158 29.3992 18.1367 30.0139 19.6315 30.0606C21.1263 30.1073 22.5828 29.5824 23.7042 28.593C24.8256 27.6035 25.5278 26.2238 25.6677 24.7348C25.8075 23.2458 25.3746 21.7594 24.457 20.5784L29.1267 15.9088C31.2865 18.338 32.4147 21.5133 32.2718 24.7606C32.1289 28.008 30.7262 31.0719 28.3613 33.302C25.9965 35.5321 22.8557 36.7528 19.6055 36.7052C16.3554 36.6576 13.2517 35.3452 10.9532 33.0468C8.65476 30.7483 7.34245 27.6446 7.2948 24.3945C7.24716 21.1443 8.46793 18.0035 10.698 15.6387C12.9281 13.2738 15.992 11.8711 19.2394 11.7282C22.4867 11.5853 25.662 12.7135 28.0912 14.8733L23.4216 19.543ZM39.0888 2.2854L39.3391 4.03955C39.3615 4.19634 39.4342 4.34163 39.5463 4.4536C39.6583 4.56558 39.8036 4.6382 39.9605 4.66058L41.7146 4.91124L38.0354 8.59016L36.0667 7.93368L35.4102 5.96387L39.0888 2.2854Z"
                                                fill="#FCE300"
                                            />
                                        </svg>
                                        <p>
                                            Mission <br />
                                            Statement
                                        </p>
                                    </div>
                                </a>
                                <a
                                    class="nav-link"
                                    data-bs-toggle="pill"
                                    type="button"
                                    role="tab"
                                    href="#nav_2"
                                >
                                    <div>
                                        <svg
                                            width="48"
                                            height="44"
                                            viewBox="0 0 48 44"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M37.1652 3.18113C37.1293 3.09171 37.0751 3.01081 37.006 2.94366C36.9369 2.87652 36.8544 2.82462 36.764 2.79133C36.6736 2.75804 36.5772 2.74409 36.4811 2.7504C36.3849 2.7567 36.2912 2.78311 36.2059 2.82793L19.843 11.4615C19.6944 11.5398 19.5796 11.67 19.5206 11.8273C19.4616 11.9846 19.4624 12.1582 19.5228 12.315L19.8595 13.1959L10.4137 18.3758C10.2651 18.4571 10.1517 18.5904 10.0954 18.7503C10.0391 18.9101 10.0438 19.0851 10.1086 19.2416L10.422 19.9961L0.390723 24.7898C0.231894 24.8657 0.108275 24.9997 0.0453664 25.1642C-0.0175418 25.3286 -0.0149393 25.5109 0.0526371 25.6735L2.11139 30.6348C2.17875 30.7975 2.30598 30.9281 2.46683 30.9997C2.62769 31.0713 2.80989 31.0785 2.97585 31.0196L13.4551 27.3076L13.7685 28.0621C13.8332 28.2183 13.9532 28.3452 14.1056 28.4185C14.258 28.4918 14.432 28.5063 14.5945 28.4593L24.5941 25.5773L24.8937 26.3593C24.9552 26.522 25.0765 26.6551 25.2328 26.7315C25.3891 26.8078 25.5687 26.8217 25.7348 26.7702L43.6012 21.2729C43.6921 21.2452 43.7762 21.199 43.8483 21.1371C43.9203 21.0752 43.9787 20.9989 44.0197 20.9132C44.0607 20.8275 44.0834 20.7342 44.0863 20.6393C44.0893 20.5443 44.0724 20.4498 44.0368 20.3617L37.1652 3.18113ZM3.13115 29.5065L1.57265 25.7491L10.9497 21.2674L12.9274 26.0363L3.13115 29.5065ZM14.8006 26.9695L14.4735 26.1806L11.9406 20.0717L11.6135 19.2842L20.3213 14.5084L23.584 22.9386L24.0994 24.2868L14.8006 26.9695ZM25.9451 25.2681L25.6661 24.5383C25.662 24.5232 25.6647 24.5053 25.6579 24.4902L24.8085 22.2954L21.0236 12.3919L36.1729 4.40016L42.4838 20.1775L25.9451 25.2681ZM39.2267 0.432462C39.159 0.263154 39.0269 0.12764 38.8594 0.0557307C38.6919 -0.0161781 38.5026 -0.0185908 38.3333 0.0490232C38.164 0.116637 38.0285 0.248739 37.9566 0.416269C37.8847 0.583798 37.8823 0.773032 37.9499 0.94234L46.1959 21.5574C46.264 21.7266 46.3964 21.8619 46.5641 21.9338C46.7318 22.0056 46.9211 22.0081 47.0906 21.9408C47.2597 21.8729 47.395 21.7408 47.4669 21.5734C47.5388 21.4059 47.5413 21.2168 47.474 21.0475L39.2267 0.432462ZM24.1585 28.8619H20.0355C18.4687 28.8619 17.2868 30.0439 17.2868 31.6106V33.4179L9.20708 42.8444C9.14397 42.9121 9.0952 42.9919 9.06369 43.079C9.03219 43.166 9.0186 43.2586 9.02374 43.351C9.02888 43.4434 9.05265 43.5339 9.09362 43.6169C9.13458 43.6999 9.1919 43.7738 9.26213 43.8341C9.33237 43.8945 9.41406 43.94 9.50232 43.9679C9.59058 43.9959 9.68357 44.0057 9.77572 43.9968C9.86788 43.988 9.95729 43.9606 10.0386 43.9163C10.1199 43.872 10.1914 43.8117 10.2488 43.7391L18.2901 34.3593H21.4098V43.2924C21.4098 43.4747 21.4822 43.6495 21.6111 43.7783C21.7399 43.9072 21.9147 43.9796 22.097 43.9796C22.2792 43.9796 22.454 43.9072 22.5829 43.7783C22.7117 43.6495 22.7841 43.4747 22.7841 43.2924V34.3593H25.9039L33.9437 43.7391C34.0022 43.8081 34.0737 43.8647 34.1542 43.9058C34.2347 43.947 34.3225 43.9717 34.4127 43.9786C34.5028 43.9855 34.5934 43.9744 34.6792 43.9461C34.765 43.9177 34.8444 43.8726 34.9126 43.8133C35.0509 43.6947 35.1365 43.5259 35.1504 43.3442C35.1643 43.1625 35.1055 42.9827 34.9868 42.8444L26.9071 33.4179V31.7137C26.9071 30.1153 25.7005 28.8619 24.1585 28.8619ZM25.5328 32.9849H18.6611V31.6106C18.6611 30.8011 19.226 30.2363 20.0355 30.2363H24.1585C24.9418 30.2363 25.5328 30.8712 25.5328 31.7137V32.9849Z"
                                                fill="#4B6679"
                                            />
                                        </svg>
                                        <p>Vision <br />Statement</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </aside>
                    <aside class="right">
                        <img
                            src="https://images.unsplash.com/photo-1482059470115-0aadd6bf6834?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80"
                            alt=""
                        />
                    </aside>
                </div>
            </div>
        </section>


        <!-- message -->
        @if(count($teams)>0)
        <section class="message">
            <div class="container">
                <h2 class="title--section mb-lg-5 text-center">
                    <span>Message from Team</span>
                    <span class="title--indicator indi-center"></span>
                </h2>
                <div class="carousel">
                    @foreach($teams as $team)
                    <div>
                        <div class="grid">
                            <aside class="left">
                                <div class="image">
                                    <img src="{{$team->image}}" alt=""/>
                                </div>
                            </aside>
                            <aside class="right">
                                {!! $team->message !!}
                                <div class="bottom">
                                    <cite>{{$team->name}}</cite>
                                    <p>{{$team->designation}}</p>
                                </div>
                            </aside>
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
                    <p class="left">Talk to our professional team now.</p>
                    <a href="{{route('contactUs')}}" class="button button-primary"><span>Contact Us</span><i class="bi bi-chevron-right"></i></a>
                </div>
            </div>
        </section>


        <!-- companies listing -->
        <div class="comapnies--wrapper">
            <h2 class="title--section text-center">
                <div class="container">
                    <span>Partner College and Universities</span>
                    <span class="title--indicator indi-center"></span>
                </div>
            </h2>

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



        </div>
    </main>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $(".message .carousel").slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                autoPlay: true,
                arrows: false,
            });
        });
    </script>

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
    </script>
@endpush
