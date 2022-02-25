@extends('website.layouts.master')
@section('title','Our Services -Nice Education')
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
                    <button
                        class="nav-link active"
                        id="nav-counseling-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#nav-counseling"
                        type="button"
                        role="tab"
                        aria-controls="nav-counseling"
                        aria-selected="true"
                    >
                        Career <br />
                        Counseling
                    </button>
                    <button
                        class="nav-link"
                        id="nav-dguide-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#nav-dguide"
                        type="button"
                        role="tab"
                        aria-controls="nav-dguide"
                        aria-selected="true"
                    >
                        Documentation <br />
                        Guidance
                    </button>
                    <button
                        class="nav-link"
                        id="nav-va-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#nav-va"
                        type="button"
                        role="tab"
                        aria-controls="nav-va"
                        aria-selected="true"
                    >
                        Visa <br />
                        Assistance
                    </button>
                    <button
                        class="nav-link"
                        id="nav-ia-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#nav-ia"
                        type="button"
                        role="tab"
                        aria-controls="nav-ia"
                        aria-selected="true"
                    >
                        Interview <br />
                        Assistance
                    </button>
                    <button
                        class="nav-link"
                        id="nav-fa-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#nav-fa"
                        type="button"
                        role="tab"
                        aria-controls="nav-fa"
                        aria-selected="true"
                    >
                        Finance <br />
                        Assistance
                    </button>
                    <button
                        class="nav-link"
                        id="nav-ta-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#nav-ta"
                        type="button"
                        role="tab"
                        aria-controls="nav-ta"
                        aria-selected="true"
                    >
                        Travel <br />
                        Arrangement
                    </button>
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
                                <span>Schedule an Appointment</span>
                                <span class="title--indicator indi-center"></span>
                            </h2>
                            <p class="parad">
                                Nice Education Consultancy receives a participate way to deal with
                                guiding. It places most extreme need on its understudy’s subjects and
                                nations of intrigue. At that point, upon the premise of understudies’
                                scholastic gauge, on the most appropriate outside instructive
                                establishment that can coordinate the understudies’ fantasies of worldwide
                                scholarly introduction. <br />
                                Prepared and ensured individuals lead both individual and gathering
                                advising sessions for understudies. Additionally, agents from remote
                                colleges and industry specialists are welcome to direct extraordinary
                                types of workshops to permit the understudies widen the skyline of their
                                insight into the training situation abroad. Along these lines, empowering
                                them to investigate their scholarly and vocation choices. We concentrate
                                on Career Counseling, not confirmation guiding.
                            </p>
                        </div>
                    </section>

                    <section class="worksHow">
                        <div class="container">
                            <h2 class="title--section text-center mb-4">
                                <span>How does it work</span>
                                <span class="title--indicator indi-center blackVariant"></span>
                            </h2>
                            <div class="step--row">
                                <div class="step--item">
                                    <figure>
                                        <img
                                            src="https://images.unsplash.com/photo-1573497491208-6b1acb260507?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2340&q=80"
                                            alt=""
                                        />
                                        <span class="count">1</span>
                                    </figure>
                                    <p class="info">
                                        Our career counselling <br />
                                        experts listen to you
                                    </p>
                                </div>
                                <div class="step--item">
                                    <figure>
                                        <img
                                            src="https://images.unsplash.com/photo-1562564055-71e051d33c19?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2340&q=80"
                                            alt=""
                                        />
                                        <span class="count">2</span>
                                    </figure>
                                    <p class="info">
                                        Then we’ll work out<br />
                                        the details
                                    </p>
                                </div>
                                <div class="step--item">
                                    <figure>
                                        <img
                                            src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2340&q=80"
                                            alt=""
                                        />
                                        <span class="count">3</span>
                                    </figure>
                                    <p class="info">
                                        We’ll also address<br />
                                        any visa issues
                                    </p>
                                </div>
                                <div class="step--item">
                                    <figure>
                                        <img
                                            src="https://images.unsplash.com/photo-1586282391129-76a6df230234?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2340&q=80"
                                            alt=""
                                        />
                                        <span class="count">4</span>
                                    </figure>
                                    <p class="info">
                                        We’ll handle the<br />
                                        application process
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- smallBanner -->
                    <!-- props
                        *text
                        *btnText
                        *link
                      -->
                    <section class="banner--small light">
                        <div class="container">
                            <div class="wrapper">
                                <p class="left">
                                    Having confusion? Talk to
                                    our professional team now.
                                </p>
                                <a href="./contact" class="button button-primary">
        <span>Contact Us</span
        ><i class="bi bi-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </section>


                </div>
                <div
                    class="tab-pane fade"
                    id="nav-dguide"
                    role="tabpanel"
                    aria-labelledby="nav-dguide-tab"
                >
                    <section class="careerCounsel">
                        <div class="container">
                            <h2 class="title--section text-center mb-4">
                                <span>Documentation Guidance</span>
                                <span class="title--indicator indi-center"></span>
                            </h2>
                            <p class="parad">
                                Team Nice Education Consultancy understands that students often struggle
                                at the documentation stage of their university application. That is
                                because they do not have complete information regarding the documents
                                required.<br />
                                Nice Education offers students a detailed and step-by-step guidance
                                regarding the documents that a student requires for a particular
                                destination and how to get those documents ready for application process.
                            </p>
                        </div>
                    </section>

                    <section class="requiredDocs">
                        <div class="container">
                            <h2 class="title--section text-center mb-4">
                                <span>Required Document</span>
                                <span class="title--indicator indi-center blackVariant"></span>
                            </h2>
                            <div class="download--bar">
                                <a href="#!" target="_blank">Download Checklist</a>
                            </div>
                            <div class="files--lists">
                                <div class="list--grid">
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
                                            />
                                            <path
                                                d="M25.8184 10.6371L23.6833 8.46934C23.5673 8.35137 23.379 8.35137 23.2582 8.46934L13.4183 18.4822L8.80516 13.7879C8.68922 13.67 8.50083 13.67 8.38007 13.7879L6.18217 16.0196C6.12903 16.0786 6.09521 16.1523 6.09521 16.2359C6.09521 16.3145 6.12903 16.3931 6.18217 16.4472L13.143 23.5305C13.201 23.5895 13.2734 23.619 13.3555 23.619C13.4328 23.619 13.5101 23.5895 13.5633 23.5305L25.8136 11.0696C25.9343 10.9517 25.9343 10.7551 25.8184 10.6371Z"
                                                fill="white"
                                            />
                                        </svg>
                                        <span>Passport Copy</span>
                                    </div>
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
                                            />
                                            <path
                                                d="M25.8184 10.6371L23.6833 8.46934C23.5673 8.35137 23.379 8.35137 23.2582 8.46934L13.4183 18.4822L8.80516 13.7879C8.68922 13.67 8.50083 13.67 8.38007 13.7879L6.18217 16.0196C6.12903 16.0786 6.09521 16.1523 6.09521 16.2359C6.09521 16.3145 6.12903 16.3931 6.18217 16.4472L13.143 23.5305C13.201 23.5895 13.2734 23.619 13.3555 23.619C13.4328 23.619 13.5101 23.5895 13.5633 23.5305L25.8136 11.0696C25.9343 10.9517 25.9343 10.7551 25.8184 10.6371Z"
                                                fill="white"
                                            />
                                        </svg>
                                        <span>Standardized Score Reports (GRE/GMAT/SAT)</span>
                                    </div>
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
                                            />
                                            <path
                                                d="M25.8184 10.6371L23.6833 8.46934C23.5673 8.35137 23.379 8.35137 23.2582 8.46934L13.4183 18.4822L8.80516 13.7879C8.68922 13.67 8.50083 13.67 8.38007 13.7879L6.18217 16.0196C6.12903 16.0786 6.09521 16.1523 6.09521 16.2359C6.09521 16.3145 6.12903 16.3931 6.18217 16.4472L13.143 23.5305C13.201 23.5895 13.2734 23.619 13.3555 23.619C13.4328 23.619 13.5101 23.5895 13.5633 23.5305L25.8136 11.0696C25.9343 10.9517 25.9343 10.7551 25.8184 10.6371Z"
                                                fill="white"
                                            />
                                        </svg>
                                        <span>Statement of Purpose (SOPs)</span>
                                    </div>
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
                                            />
                                            <path
                                                d="M25.8184 10.6371L23.6833 8.46934C23.5673 8.35137 23.379 8.35137 23.2582 8.46934L13.4183 18.4822L8.80516 13.7879C8.68922 13.67 8.50083 13.67 8.38007 13.7879L6.18217 16.0196C6.12903 16.0786 6.09521 16.1523 6.09521 16.2359C6.09521 16.3145 6.12903 16.3931 6.18217 16.4472L13.143 23.5305C13.201 23.5895 13.2734 23.619 13.3555 23.619C13.4328 23.619 13.5101 23.5895 13.5633 23.5305L25.8136 11.0696C25.9343 10.9517 25.9343 10.7551 25.8184 10.6371Z"
                                                fill="white"
                                            />
                                        </svg>
                                        <span>SLC and +2 Marksheets and Certificates </span>
                                    </div>
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
                                            />
                                            <path
                                                d="M25.8184 10.6371L23.6833 8.46934C23.5673 8.35137 23.379 8.35137 23.2582 8.46934L13.4183 18.4822L8.80516 13.7879C8.68922 13.67 8.50083 13.67 8.38007 13.7879L6.18217 16.0196C6.12903 16.0786 6.09521 16.1523 6.09521 16.2359C6.09521 16.3145 6.12903 16.3931 6.18217 16.4472L13.143 23.5305C13.201 23.5895 13.2734 23.619 13.3555 23.619C13.4328 23.619 13.5101 23.5895 13.5633 23.5305L25.8136 11.0696C25.9343 10.9517 25.9343 10.7551 25.8184 10.6371Z"
                                                fill="white"
                                            />
                                        </svg>
                                        <span>Recommendation Letters (LORs) </span>
                                    </div>
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
                                            />
                                            <path
                                                d="M25.8184 10.6371L23.6833 8.46934C23.5673 8.35137 23.379 8.35137 23.2582 8.46934L13.4183 18.4822L8.80516 13.7879C8.68922 13.67 8.50083 13.67 8.38007 13.7879L6.18217 16.0196C6.12903 16.0786 6.09521 16.1523 6.09521 16.2359C6.09521 16.3145 6.12903 16.3931 6.18217 16.4472L13.143 23.5305C13.201 23.5895 13.2734 23.619 13.3555 23.619C13.4328 23.619 13.5101 23.5895 13.5633 23.5305L25.8136 11.0696C25.9343 10.9517 25.9343 10.7551 25.8184 10.6371Z"
                                                fill="white"
                                            />
                                        </svg>
                                        <span> Essay (if any)</span>
                                    </div>
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
                                            />
                                            <path
                                                d="M25.8184 10.6371L23.6833 8.46934C23.5673 8.35137 23.379 8.35137 23.2582 8.46934L13.4183 18.4822L8.80516 13.7879C8.68922 13.67 8.50083 13.67 8.38007 13.7879L6.18217 16.0196C6.12903 16.0786 6.09521 16.1523 6.09521 16.2359C6.09521 16.3145 6.12903 16.3931 6.18217 16.4472L13.143 23.5305C13.201 23.5895 13.2734 23.619 13.3555 23.619C13.4328 23.619 13.5101 23.5895 13.5633 23.5305L25.8136 11.0696C25.9343 10.9517 25.9343 10.7551 25.8184 10.6371Z"
                                                fill="white"
                                            />
                                        </svg>
                                        <span> Bachelor Transcripts</span>
                                    </div>
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
                                            />
                                            <path
                                                d="M25.8184 10.6371L23.6833 8.46934C23.5673 8.35137 23.379 8.35137 23.2582 8.46934L13.4183 18.4822L8.80516 13.7879C8.68922 13.67 8.50083 13.67 8.38007 13.7879L6.18217 16.0196C6.12903 16.0786 6.09521 16.1523 6.09521 16.2359C6.09521 16.3145 6.12903 16.3931 6.18217 16.4472L13.143 23.5305C13.201 23.5895 13.2734 23.619 13.3555 23.619C13.4328 23.619 13.5101 23.5895 13.5633 23.5305L25.8136 11.0696C25.9343 10.9517 25.9343 10.7551 25.8184 10.6371Z"
                                                fill="white"
                                            />
                                        </svg>
                                        <span>Financial Documents </span>
                                    </div>
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
                                            />
                                            <path
                                                d="M25.8184 10.6371L23.6833 8.46934C23.5673 8.35137 23.379 8.35137 23.2582 8.46934L13.4183 18.4822L8.80516 13.7879C8.68922 13.67 8.50083 13.67 8.38007 13.7879L6.18217 16.0196C6.12903 16.0786 6.09521 16.1523 6.09521 16.2359C6.09521 16.3145 6.12903 16.3931 6.18217 16.4472L13.143 23.5305C13.201 23.5895 13.2734 23.619 13.3555 23.619C13.4328 23.619 13.5101 23.5895 13.5633 23.5305L25.8136 11.0696C25.9343 10.9517 25.9343 10.7551 25.8184 10.6371Z"
                                                fill="white"
                                            />
                                        </svg>
                                        <span>Resume or CV </span>
                                    </div>
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
                                            />
                                            <path
                                                d="M25.8184 10.6371L23.6833 8.46934C23.5673 8.35137 23.379 8.35137 23.2582 8.46934L13.4183 18.4822L8.80516 13.7879C8.68922 13.67 8.50083 13.67 8.38007 13.7879L6.18217 16.0196C6.12903 16.0786 6.09521 16.1523 6.09521 16.2359C6.09521 16.3145 6.12903 16.3931 6.18217 16.4472L13.143 23.5305C13.201 23.5895 13.2734 23.619 13.3555 23.619C13.4328 23.619 13.5101 23.5895 13.5633 23.5305L25.8136 11.0696C25.9343 10.9517 25.9343 10.7551 25.8184 10.6371Z"
                                                fill="white"
                                            />
                                        </svg>
                                        <span> Language Proficient Test Score (TOFEL/IELTS/PTE)</span>
                                    </div>
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
                                            />
                                            <path
                                                d="M25.8184 10.6371L23.6833 8.46934C23.5673 8.35137 23.379 8.35137 23.2582 8.46934L13.4183 18.4822L8.80516 13.7879C8.68922 13.67 8.50083 13.67 8.38007 13.7879L6.18217 16.0196C6.12903 16.0786 6.09521 16.1523 6.09521 16.2359C6.09521 16.3145 6.12903 16.3931 6.18217 16.4472L13.143 23.5305C13.201 23.5895 13.2734 23.619 13.3555 23.619C13.4328 23.619 13.5101 23.5895 13.5633 23.5305L25.8136 11.0696C25.9343 10.9517 25.9343 10.7551 25.8184 10.6371Z"
                                                fill="white"
                                            />
                                        </svg>
                                        <span>Affidant of support from sponsor </span>
                                    </div>
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
                                            />
                                            <path
                                                d="M25.8184 10.6371L23.6833 8.46934C23.5673 8.35137 23.379 8.35137 23.2582 8.46934L13.4183 18.4822L8.80516 13.7879C8.68922 13.67 8.50083 13.67 8.38007 13.7879L6.18217 16.0196C6.12903 16.0786 6.09521 16.1523 6.09521 16.2359C6.09521 16.3145 6.12903 16.3931 6.18217 16.4472L13.143 23.5305C13.201 23.5895 13.2734 23.619 13.3555 23.619C13.4328 23.619 13.5101 23.5895 13.5633 23.5305L25.8136 11.0696C25.9343 10.9517 25.9343 10.7551 25.8184 10.6371Z"
                                                fill="white"
                                            />
                                        </svg>
                                        <span>Extra certificates (if any) </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- smallBanner -->
                    <!-- props
                        *text
                        *btnText
                        *link
                      -->
                    <section class="banner--small light">
                        <div class="container">
                            <div class="wrapper">
                                <p class="left">
                                    Having confusion? Talk to
                                    our professional team now.
                                </p>
                                <a href="./contact" class="button button-primary">
        <span>Contact Us</span
        ><i class="bi bi-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </section>


                </div>
                <div
                    class="tab-pane fade"
                    id="nav-va"
                    role="tabpanel"
                    aria-labelledby="nav-va-tab"
                >
                    <section class="careerCounsel">
                        <div class="container">
                            <h2 class="title--section text-center mb-4">
                                <span>Visa Guidance</span>
                                <span class="title--indicator indi-center"></span>
                            </h2>
                            <p class="parad">
                                Before making applicant’s visa judgment, Nice Education Visa Assistance
                                team make sure that s/he has properly verified everything! <br />
                                Incomplete or wrong visa applications may lead to delays or even an
                                unsuccessful visa application. As the visa system is complex and at times
                                confusing and constantly changing, it is easy to make mistakes. Often
                                these mistakes are painful and expensive since visa applications are
                                non-refundable and the Department of Immigration does not take
                                responsibility for the applications that you make.
                            </p>
                        </div>
                    </section>

                    <section class="requiredDocs">
                        <div class="container">
                            <h2 class="title--section text-center mb-4">
                                <span>We do this in two ways</span>
                                <span class="title--indicator indi-center blackVariant"></span>
                            </h2>
                            <div class="ways--row">
                                <div class="ways--item">
                                    <img
                                        src="https://images.unsplash.com/photo-1587614203976-365c74645e83?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80"
                                        alt=""
                                    />
                                    <div class="white--card">
                                        <p>
                                            Firstly, we offer personal and confidential consultations that are
                                            specific to your case. This way, applicants can be confident that
                                            they have all the information at hand to make the right decisions.
                                        </p>
                                    </div>
                                </div>
                                <div class="ways--item">
                                    <img
                                        src="https://images.unsplash.com/photo-1573497620053-ea5300f94f21?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2340&q=80"
                                        alt=""
                                    />
                                    <div class="white--card">
                                        <p>
                                            Secondly, if you require assistance in any part of the visa
                                            application process you can decide what you would like us to do and
                                            what you would like to do yourself.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- smallBanner -->
                    <!-- props
                        *text
                        *btnText
                        *link
                      -->
                    <section class="banner--small light">
                        <div class="container">
                            <div class="wrapper">
                                <p class="left">
                                    Having confusion? Talk to
                                    our professional team now.
                                </p>
                                <a href="./contact" class="button button-primary">
        <span>Contact Us</span
        ><i class="bi bi-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </section>


                </div>
                <div
                    class="tab-pane fade"
                    id="nav-ia"
                    role="tabpanel"
                    aria-labelledby="nav-ia-tab"
                >
                    <section class="careerCounsel">
                        <div class="container">
                            <h2 class="title--section text-center mb-4">
                                <span>Interview Assistance</span>
                                <span class="title--indicator indi-center"></span>
                            </h2>
                            <p class="parad">
                                While interviews are not part of every university’s admissions process,
                                many institutions will ask to meet you face-to-face before admitting you.
                                Nice Team assists students to prepare for the interview to show their
                                potential to study in the university. As interviews are scary at the best
                                of times, Nice Education consultancy makes the chances of success in
                                getting a place at a university higher and prepares students to control
                                their nerves before stepping into the interview with the admission team of
                                a University.
                            </p>
                        </div>
                    </section>

                    <section class="requiredDocs">
                        <div class="container">
                            <h2 class="title--section text-center mb-4">
                                <span>How to prepare youself?</span>
                                <span class="title--indicator indi-center blackVariant"></span>
                            </h2>
                            <div class="prepare--row">
                                <div class="prepare--item">
                                    <div class="count--box">1</div>
                                    <div class="info">Know your choosen subject</div>
                                </div>
                                <div class="prepare--item">
                                    <div class="count--box">2</div>
                                    <div class="info">Practice with a friend or family</div>
                                </div>
                                <div class="prepare--item">
                                    <div class="count--box">3</div>
                                    <div class="info">Re-read the course information</div>
                                </div>
                                <div class="prepare--item">
                                    <div class="count--box">4</div>
                                    <div class="info">Re-read your personal statement</div>
                                </div>
                                <div class="prepare--item">
                                    <div class="count--box">5</div>
                                    <div class="info">Pre-plan some common questions</div>
                                </div>
                                <div class="prepare--item">
                                    <div class="count--box">6</div>
                                    <div class="info">Try to keep your cool and smile</div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- smallBanner -->
                    <!-- props
                        *text
                        *btnText
                        *link
                      -->
                    <section class="banner--small light">
                        <div class="container">
                            <div class="wrapper">
                                <p class="left">
                                    Having confusion? Talk to
                                    our professional team now.
                                </p>
                                <a href="./contact" class="button button-primary">
        <span>Contact Us</span
        ><i class="bi bi-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </section>


                </div>
                <div
                    class="tab-pane fade"
                    id="nav-fa"
                    role="tabpanel"
                    aria-labelledby="nav-fa-tab"
                >
                    <section class="careerCounsel">
                        <div class="container">
                            <h2 class="title--section text-center mb-4">
                                <span>Finance Assistance</span>
                                <span class="title--indicator indi-center"></span>
                            </h2>
                            <p class="parad">
                                Explaining students the entire breakup of the expenditure involved and
                                suggesting them various options available in order to meet the college/
                                university’s requirements, Thomas International Education offers
                                assistance to the students on arranging the finances.
                            </p>
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
                                    Having confusion? Talk to
                                    our professional team now.
                                </p>
                                <a href="./contact" class="button button-primary">
        <span>Contact Us</span
        ><i class="bi bi-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </section>


                </div>
                <div
                    class="tab-pane fade"
                    id="nav-ta"
                    role="tabpanel"
                    aria-labelledby="nav-ta-tab"
                >
                    <section class="careerCounsel">
                        <div class="container">
                            <h2 class="title--section text-center mb-4">
                                <span>Travel Assistance</span>
                                <span class="title--indicator indi-center"></span>
                            </h2>
                            <p class="parad">
                                In an effort to make students’ journey quite comfortable and safe and ease
                                the students’ and their parents’ anxiety and. When we talk about
                                travelling assistance we are not just talking about flight tickets from
                                native land to the foreign land or desired country but also travel from
                                the airport to place where the students will be staying or if the stay is
                                in hostel of the university campus.<br />
                                We guide them with travel tips and assist with any airline bookings. We
                                also book flights well in advance to help students get ideal departure
                                dates, routes and that too at an affordable discounted rate.
                            </p>
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
                                    Having confusion? Talk to
                                    our professional team now.
                                </p>
                                <a href="./contact" class="button button-primary">
        <span>Contact Us</span
        ><i class="bi bi-chevron-right"></i>
                                </a>
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
