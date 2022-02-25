@extends('website.layouts.master')
@section('title','Contact Us -Nice Education')
@section('content')
    <main class="main contact-page">
        <!-- titleBanner -->
        <!-- props
          *text
          -->


        <section class="banner--title">
            <div class="container">
                <div class="wrapper">
                    <h2 class="title--section white">
                        <span class="title--large">Contact Us</span>
                        <span class="title--indicator indi-center"></span>
                    </h2>
                </div>
            </div>
        </section>


        <!-- Apoint -->
        <section class="appoint">
            <div class="container">
                <h2 class="title--section text-center mb-4 mb-xl-5">
                    <span>Schedule an Appointment</span>
                    <span class="title--indicator indi-center"></span>
                </h2>
                <p>
                    Please complete this form to talk to an Advisor at Edwise Foundation.
                    You can ask any questions relating to the application process,
                    universities, majors, costs, funding (scholarship, TA/RA), F-1
                    interview, etc. Please note that we can work with any universities for
                    you as long as you fit in well in respect to your academic interests and
                    financial capacity.
                </p>
            </div>
        </section>

        <!-- contact -->
        @include('website.layouts.contactUsForm')


        <!-- Company Infos -->
        <section class="compInfos">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                        <div class="info--card">
                            <div class="illustration">
                                <svg
                                    width="48"
                                    height="59"
                                    viewBox="0 0 48 59"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M24.2073 0C11.4068 0 0.995605 10.4111 0.995605 23.2117C0.995605 24.7478 1.16628 26.2839 1.42229 27.8199C1.42229 27.9053 1.42229 28.076 1.50763 28.1613C4.06775 39.5965 22.0739 56.8346 22.8419 57.6026C23.2686 57.944 23.7806 58.2 24.2927 58.2C24.8047 58.2 25.3167 58.0293 25.7434 57.6026C26.5114 56.8346 44.3469 39.6818 46.907 28.4173C46.907 28.332 46.907 28.2466 46.9924 28.076C47.3337 26.4545 47.5044 24.8331 47.5044 23.1264C47.4191 10.4111 37.0079 0 24.2073 0V0ZM42.8962 27.3933V27.5639C41.0188 35.927 28.5595 48.9836 24.2927 53.2504C20.0258 48.9836 7.56657 35.927 5.60382 27.3933V27.1372C5.34781 25.8572 5.17713 24.5771 5.17713 23.2117C5.17713 12.7152 13.7109 4.09619 24.2927 4.09619C34.8745 4.09619 43.4082 12.6299 43.4082 23.2117C43.3229 24.6625 43.1522 26.0279 42.8962 27.3933Z"
                                        fill="black"
                                    />
                                    <path
                                        d="M24.2071 13.0547C19.9402 13.0547 16.4414 16.5535 16.4414 20.8204C16.4414 25.0872 19.9402 28.5861 24.2071 28.5861C28.474 28.5861 31.9728 25.0872 31.9728 20.8204C31.9728 16.5535 28.474 13.0547 24.2071 13.0547ZM24.2071 24.4899C22.159 24.4899 20.5376 22.8685 20.5376 20.8204C20.5376 18.7723 22.159 17.1509 24.2071 17.1509C26.2552 17.1509 27.8766 18.7723 27.8766 20.8204C27.8766 22.8685 26.2552 24.4899 24.2071 24.4899Z"
                                        fill="black"
                                    />
                                </svg>
                            </div>

                            <div class="illus--data">
                                <h4>Location</h4>
                                <p>
                                    Dillibazar(Opp to batule ghar)<br />
                                    Kathmandu, Nepal
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                        <div class="info--card">
                            <div class="illustration">
                                <svg
                                    width="49"
                                    height="49"
                                    viewBox="0 0 49 49"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M46.9548 33.7576L42.5795 29.3823C41.2753 28.0885 39.5149 27.3591 37.6778 27.3513C35.8407 27.3434 34.0742 28.0579 32.759 29.3405C32.0572 30.0463 31.1314 30.4854 30.1408 30.5823C29.1502 30.6793 28.1569 30.4279 27.3316 29.8715C24.0744 27.6977 21.2762 24.9049 19.0961 21.6519C18.5495 20.8174 18.3073 19.82 18.4101 18.8278C18.513 17.8356 18.9548 16.9091 19.6609 16.2046C20.9319 14.8881 21.6371 13.1265 21.6256 11.2966C21.6141 9.46674 20.8868 7.71409 19.5993 6.41377L15.224 2.03843C13.9141 0.733004 12.1401 0 10.2908 0C8.44151 0 6.66759 0.733004 5.35768 2.03843L4.09879 3.29932C-2.46416 9.86232 -1.97293 23.6605 11.682 37.3076C19.9155 45.5432 28.2027 48.9917 34.9227 48.9917C36.9009 49.0576 38.8724 48.7291 40.7223 48.0254C42.5723 47.3217 44.2636 46.2568 45.6979 44.8928L46.9588 43.632C48.2666 42.3214 49.0007 40.5454 49 38.694C48.9993 36.8425 48.2637 35.0671 46.9548 33.7576ZM44.1427 40.8198L42.8818 42.0807C37.711 47.2515 26.2974 46.3069 14.4901 34.4974C2.68278 22.688 1.73613 11.2664 6.90693 6.09556L8.15787 4.83666C8.72111 4.27545 9.4838 3.96034 10.2789 3.96034C11.074 3.96034 11.8367 4.27545 12.3999 4.83666L16.7752 9.21199C17.3282 9.76777 17.6421 10.5177 17.6499 11.3017C17.6577 12.0857 17.3588 12.8417 16.817 13.4083C15.4731 14.7608 14.6348 16.534 14.4426 18.4308C14.2503 20.3277 14.7158 22.233 15.7609 23.8276C18.238 27.5345 21.4235 30.7152 25.134 33.1868C26.7238 34.2322 28.6241 34.7004 30.5176 34.5132C32.411 34.3261 34.1829 33.4949 35.5373 32.1586C36.1029 31.6104 36.861 31.3059 37.6487 31.3108C38.4363 31.3156 39.1907 31.6293 39.7495 32.1845L44.1248 36.5598C44.4068 36.8377 44.631 37.1687 44.7846 37.5336C44.9382 37.8985 45.0182 38.2902 45.0198 38.6861C45.0215 39.082 44.9449 39.4743 44.7943 39.8405C44.6438 40.2067 44.4223 40.5395 44.1427 40.8198Z"
                                        fill="black"
                                    />
                                </svg>
                            </div>

                            <div class="illus--data">
                                <h4>Phone and Email</h4>
                                <p>
                                    +977-1–4245045 | 4218037 | 9841627298 <br />
                                    info@niceeducation.com.np
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                        <div class="info--card">
                            <div class="illustration">
                                <svg
                                    width="59"
                                    height="59"
                                    viewBox="0 0 59 59"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M29.7 0.75C13.7118 0.75 0.75 13.7118 0.75 29.7C0.75 45.6882 13.7118 58.65 29.7 58.65C45.6882 58.65 58.65 45.6882 58.65 29.7C58.65 13.7118 45.6882 0.75 29.7 0.75ZM29.7 55.4328C15.5164 55.4328 3.96716 43.8836 3.96716 29.7C3.96716 15.5164 15.5164 3.96716 29.7 3.96716C43.8836 3.96716 55.4328 15.5164 55.4328 29.7C55.4328 43.8836 43.8836 55.4328 29.7 55.4328Z"
                                        fill="black"
                                        stroke="black"
                                        stroke-width="0.5"
                                    />
                                    <path
                                        d="M31.3087 29.027V13.2805C31.3087 12.4065 30.5741 11.6719 29.7001 11.6719C28.8262 11.6719 28.0916 12.4065 28.0916 13.2805V29.6966C28.0916 30.1033 28.2883 30.563 28.561 30.8357L39.4863 41.761C39.8211 42.0958 40.2267 42.2305 40.6254 42.2305C41.024 42.2305 41.4297 42.0958 41.7645 41.761C42.3716 41.1539 42.3716 40.0899 41.7645 39.4828L31.3087 29.027Z"
                                        fill="black"
                                        stroke="black"
                                        stroke-width="0.5"
                                    />
                                </svg>
                            </div>

                            <div class="illus--data">
                                <h4>Opening Time</h4>
                                <p>
                                    Sunday to Friday<br />
                                    9:00AM to 5:00PM
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection

@push('scripts')

@endpush
