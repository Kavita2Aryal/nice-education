@extends('website.layouts.master')
@section('title','Study Abroad -Nice Education')
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
                        <span class="title--large">Study in Australia</span>
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
                <div class="tab-pane fade show active" id="nav-1" role="tabpanel">
                    <section class="whyStd">
                        <div class="container">
                            <h2 class="title--section text-center mb-4">
                                <span>Why Australia?</span>
                                <span class="title--indicator indi-center"></span>
                            </h2>
                            <p class="parad">
                                Australia is an attractive destination for overseas students because of
                                its varied climatic conditions, diverse cultures, friendly and welcoming
                                people and safe environment. Australia’s Higher Education has grown
                                progressively over the last decade and is growing more and more as the
                                days go by. High percentages of students from the Gulf now seek education
                                in Australia-mainly in Sydney, Melbourne and Perth. An Australian
                                qualification will develop you personally and professionally. It is your
                                passport to a well-paid career and a secure future.
                            </p>
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
                                    <p>
                                        Registered Training Organizations (RTOs), Technical and Further
                                        Education (TAFE) institutes and some private colleges offers
                                        Vocational education and training (VET) courses to cater students so
                                        that they can develop skill and knowledge for a specific employment
                                        opportunity they want to get into.VET courses cover wide range of
                                        courses including hospitality and tourism, construction and
                                        engineering, secretarial skills, visual arts, information technology,
                                        accounting, nursing and community work.
                                    </p>
                                    <h2 class="title--section">
                                        <span>Higher Education</span><span class="title--indicator"></span>
                                    </h2>
                                    <p>
                                        Currently, there are 41 Australian universities, of which 3 are
                                        private (Bond, Torrens and Notre Dame) along with Carnegie Mellon, a
                                        US based university and University College London, a UK based
                                        university both of those international universities have their
                                        campuses in Adelaide, South Australia. <br />
                                        Australian universities along with other higher education providers
                                        offer a broad range of programs and courses which include science,
                                        humanities, management, health, engineering and law just to name a
                                        few. With well designed multi disciplinary courses along with
                                        personnel care and graduate employability, Australian institutions
                                        position themselves amongst the world’s finest institution.
                                    </p>
                                </aside>
                                <aside class="right">
                                    <div class="image">
                                        <img
                                            src="https://images.unsplash.com/photo-1515861461225-1488dfdaf0a8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                            alt=""
                                        />
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </section>


                </div>
                <div
                    class="tab-pane fade"
                    id="nav-2"
                    role="tabpanel"
                    aria-labelledby="nav-dguide-tab"
                >
                    <section class="popularCourses start">
                        <div class="container">
                            <h2 class="title--section text-center mb-4">
                                <span>Popular Courses</span>
                                <span class="title--indicator indi-center"></span>
                            </h2>
                            <p class="parad">
                                At the moment, Australian institutes offer more than 120 courses under
                                English language for an international student. Some of the popular courses
                                are listed below:
                            </p>
                        </div>
                        <div class="yellow">
                            <div class="container">
                                <ul>
                                    <li>Hospitality and Tourism</li>
                                    <li>Business and Accountancy</li>
                                    <li>Health Science</li>
                                    <li>Nursing and Midwifery</li>
                                    <li>Digital Media and Information Technology</li>
                                    <li>Science and Engineering</li>
                                    <li>Education and Teaching</li>
                                    <li>Humanities and Social Work</li>
                                    <li>Music and Creative Arts</li>
                                    <li>Justice and Law</li>
                                    <li>Marine and Environmental Science and some pathway programs</li>
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
                <div class="tab-pane fade" id="nav-3" role="tabpanel">
                    <section class="document start">
                        <div class="container">
                            <h2 class="title--section text-center mb-4">
                                <span>Documents Required</span>
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
                                            ></path>
                                            <path
                                                d="M25.8184 10.6371L23.6833 8.46934C23.5673 8.35137 23.379 8.35137 23.2582 8.46934L13.4183 18.4822L8.80516 13.7879C8.68922 13.67 8.50083 13.67 8.38007 13.7879L6.18217 16.0196C6.12903 16.0786 6.09521 16.1523 6.09521 16.2359C6.09521 16.3145 6.12903 16.3931 6.18217 16.4472L13.143 23.5305C13.201 23.5895 13.2734 23.619 13.3555 23.619C13.4328 23.619 13.5101 23.5895 13.5633 23.5305L25.8136 11.0696C25.9343 10.9517 25.9343 10.7551 25.8184 10.6371Z"
                                                fill="white"
                                            ></path>
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
                                            ></path>
                                            <path
                                                d="M25.8184 10.6371L23.6833 8.46934C23.5673 8.35137 23.379 8.35137 23.2582 8.46934L13.4183 18.4822L8.80516 13.7879C8.68922 13.67 8.50083 13.67 8.38007 13.7879L6.18217 16.0196C6.12903 16.0786 6.09521 16.1523 6.09521 16.2359C6.09521 16.3145 6.12903 16.3931 6.18217 16.4472L13.143 23.5305C13.201 23.5895 13.2734 23.619 13.3555 23.619C13.4328 23.619 13.5101 23.5895 13.5633 23.5305L25.8136 11.0696C25.9343 10.9517 25.9343 10.7551 25.8184 10.6371Z"
                                                fill="white"
                                            ></path>
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
                                            ></path>
                                            <path
                                                d="M25.8184 10.6371L23.6833 8.46934C23.5673 8.35137 23.379 8.35137 23.2582 8.46934L13.4183 18.4822L8.80516 13.7879C8.68922 13.67 8.50083 13.67 8.38007 13.7879L6.18217 16.0196C6.12903 16.0786 6.09521 16.1523 6.09521 16.2359C6.09521 16.3145 6.12903 16.3931 6.18217 16.4472L13.143 23.5305C13.201 23.5895 13.2734 23.619 13.3555 23.619C13.4328 23.619 13.5101 23.5895 13.5633 23.5305L25.8136 11.0696C25.9343 10.9517 25.9343 10.7551 25.8184 10.6371Z"
                                                fill="white"
                                            ></path>
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
                                            ></path>
                                            <path
                                                d="M25.8184 10.6371L23.6833 8.46934C23.5673 8.35137 23.379 8.35137 23.2582 8.46934L13.4183 18.4822L8.80516 13.7879C8.68922 13.67 8.50083 13.67 8.38007 13.7879L6.18217 16.0196C6.12903 16.0786 6.09521 16.1523 6.09521 16.2359C6.09521 16.3145 6.12903 16.3931 6.18217 16.4472L13.143 23.5305C13.201 23.5895 13.2734 23.619 13.3555 23.619C13.4328 23.619 13.5101 23.5895 13.5633 23.5305L25.8136 11.0696C25.9343 10.9517 25.9343 10.7551 25.8184 10.6371Z"
                                                fill="white"
                                            ></path>
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
                                            ></path>
                                            <path
                                                d="M25.8184 10.6371L23.6833 8.46934C23.5673 8.35137 23.379 8.35137 23.2582 8.46934L13.4183 18.4822L8.80516 13.7879C8.68922 13.67 8.50083 13.67 8.38007 13.7879L6.18217 16.0196C6.12903 16.0786 6.09521 16.1523 6.09521 16.2359C6.09521 16.3145 6.12903 16.3931 6.18217 16.4472L13.143 23.5305C13.201 23.5895 13.2734 23.619 13.3555 23.619C13.4328 23.619 13.5101 23.5895 13.5633 23.5305L25.8136 11.0696C25.9343 10.9517 25.9343 10.7551 25.8184 10.6371Z"
                                                fill="white"
                                            ></path>
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
                                            ></path>
                                            <path
                                                d="M25.8184 10.6371L23.6833 8.46934C23.5673 8.35137 23.379 8.35137 23.2582 8.46934L13.4183 18.4822L8.80516 13.7879C8.68922 13.67 8.50083 13.67 8.38007 13.7879L6.18217 16.0196C6.12903 16.0786 6.09521 16.1523 6.09521 16.2359C6.09521 16.3145 6.12903 16.3931 6.18217 16.4472L13.143 23.5305C13.201 23.5895 13.2734 23.619 13.3555 23.619C13.4328 23.619 13.5101 23.5895 13.5633 23.5305L25.8136 11.0696C25.9343 10.9517 25.9343 10.7551 25.8184 10.6371Z"
                                                fill="white"
                                            ></path>
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
                                            ></path>
                                            <path
                                                d="M25.8184 10.6371L23.6833 8.46934C23.5673 8.35137 23.379 8.35137 23.2582 8.46934L13.4183 18.4822L8.80516 13.7879C8.68922 13.67 8.50083 13.67 8.38007 13.7879L6.18217 16.0196C6.12903 16.0786 6.09521 16.1523 6.09521 16.2359C6.09521 16.3145 6.12903 16.3931 6.18217 16.4472L13.143 23.5305C13.201 23.5895 13.2734 23.619 13.3555 23.619C13.4328 23.619 13.5101 23.5895 13.5633 23.5305L25.8136 11.0696C25.9343 10.9517 25.9343 10.7551 25.8184 10.6371Z"
                                                fill="white"
                                            ></path>
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
                                            ></path>
                                            <path
                                                d="M25.8184 10.6371L23.6833 8.46934C23.5673 8.35137 23.379 8.35137 23.2582 8.46934L13.4183 18.4822L8.80516 13.7879C8.68922 13.67 8.50083 13.67 8.38007 13.7879L6.18217 16.0196C6.12903 16.0786 6.09521 16.1523 6.09521 16.2359C6.09521 16.3145 6.12903 16.3931 6.18217 16.4472L13.143 23.5305C13.201 23.5895 13.2734 23.619 13.3555 23.619C13.4328 23.619 13.5101 23.5895 13.5633 23.5305L25.8136 11.0696C25.9343 10.9517 25.9343 10.7551 25.8184 10.6371Z"
                                                fill="white"
                                            ></path>
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
                                            ></path>
                                            <path
                                                d="M25.8184 10.6371L23.6833 8.46934C23.5673 8.35137 23.379 8.35137 23.2582 8.46934L13.4183 18.4822L8.80516 13.7879C8.68922 13.67 8.50083 13.67 8.38007 13.7879L6.18217 16.0196C6.12903 16.0786 6.09521 16.1523 6.09521 16.2359C6.09521 16.3145 6.12903 16.3931 6.18217 16.4472L13.143 23.5305C13.201 23.5895 13.2734 23.619 13.3555 23.619C13.4328 23.619 13.5101 23.5895 13.5633 23.5305L25.8136 11.0696C25.9343 10.9517 25.9343 10.7551 25.8184 10.6371Z"
                                                fill="white"
                                            ></path>
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
                                            ></path>
                                            <path
                                                d="M25.8184 10.6371L23.6833 8.46934C23.5673 8.35137 23.379 8.35137 23.2582 8.46934L13.4183 18.4822L8.80516 13.7879C8.68922 13.67 8.50083 13.67 8.38007 13.7879L6.18217 16.0196C6.12903 16.0786 6.09521 16.1523 6.09521 16.2359C6.09521 16.3145 6.12903 16.3931 6.18217 16.4472L13.143 23.5305C13.201 23.5895 13.2734 23.619 13.3555 23.619C13.4328 23.619 13.5101 23.5895 13.5633 23.5305L25.8136 11.0696C25.9343 10.9517 25.9343 10.7551 25.8184 10.6371Z"
                                                fill="white"
                                            ></path>
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
                                            ></path>
                                            <path
                                                d="M25.8184 10.6371L23.6833 8.46934C23.5673 8.35137 23.379 8.35137 23.2582 8.46934L13.4183 18.4822L8.80516 13.7879C8.68922 13.67 8.50083 13.67 8.38007 13.7879L6.18217 16.0196C6.12903 16.0786 6.09521 16.1523 6.09521 16.2359C6.09521 16.3145 6.12903 16.3931 6.18217 16.4472L13.143 23.5305C13.201 23.5895 13.2734 23.619 13.3555 23.619C13.4328 23.619 13.5101 23.5895 13.5633 23.5305L25.8136 11.0696C25.9343 10.9517 25.9343 10.7551 25.8184 10.6371Z"
                                                fill="white"
                                            ></path>
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
                                            ></path>
                                            <path
                                                d="M25.8184 10.6371L23.6833 8.46934C23.5673 8.35137 23.379 8.35137 23.2582 8.46934L13.4183 18.4822L8.80516 13.7879C8.68922 13.67 8.50083 13.67 8.38007 13.7879L6.18217 16.0196C6.12903 16.0786 6.09521 16.1523 6.09521 16.2359C6.09521 16.3145 6.12903 16.3931 6.18217 16.4472L13.143 23.5305C13.201 23.5895 13.2734 23.619 13.3555 23.619C13.4328 23.619 13.5101 23.5895 13.5633 23.5305L25.8136 11.0696C25.9343 10.9517 25.9343 10.7551 25.8184 10.6371Z"
                                                fill="white"
                                            ></path>
                                        </svg>
                                        <span>Extra certificates (if any) </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
                <div class="tab-pane fade" id="nav-4" role="tabpanel">
                    <section class="intakes start">
                        <div class="container">
                            <h2 class="title--section text-center mb-4">
                                <span>Intakes</span>
                                <span class="title--indicator indi-center"></span>
                            </h2>
                            <p class="parad">
                                Team Nice Education Consultancy understands that students often struggle
                                at the documentation stage of their university application. That is
                                because they do not have complete information regarding the documents
                                required.
                            </p>
                        </div>
                        <div class="photos">
                            <div class="image">
                                <img
                                    src="https://images.unsplash.com/photo-1551955682-78a3c53ab544?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                                    alt=""
                                />
                                <div class="wrapper white">
                                    <h2 class="title">First Intake</h2>
                                    <p>Feb and March Session</p>
                                </div>
                            </div>
                            <div class="image">
                                <img
                                    src="https://images.unsplash.com/photo-1517294621124-4f63e6b18972?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
                                    alt=""
                                />
                                <div class="wrapper white">
                                    <h2 class="title">Second Intake</h2>
                                    <p>June, July and August Session</p>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
                <div class="tab-pane fade" id="nav-5" role="tabpanel">
                    <section class="postStudy start">
                        <div class="container">
                            <h2 class="title--section text-center mb-4">
                                <span>Intakes</span>
                                <span class="title--indicator indi-center"></span>
                            </h2>
                            <p class="parad">
                                Team Nice Education Consultancy understands that students often struggle
                                at the documentation stage of their university application. That is
                                because they do not have complete information regarding the documents
                                required.
                            </p>
                        </div>
                        <div class="yellow">
                            <div class="container">
                                <ul list-style-type="none" style="list-style: none">
                                    <li>
                                        <i class="bi bi-dot"></i> a Bachelor’s or Bachelor’s (honors) degree
                                        or
                                    </li>
                                    <li>
                                        <i class="bi bi-dot"></i> a Master’s or Master’s by Research degree or
                                    </li>
                                    <li><i class="bi bi-dot"></i> a Doctoral (PhD) degree</li>
                                </ul>
                                <p>
                                    and have at least two years of academic study completed in Australia in
                                    Bachelor’s level study or higher (i.e. Bachelor’s, Master’s or PhD
                                    level)
                                </p>
                            </div>
                        </div>
                        <div class="welcome weare">
                            <div class="container">
                                <div class="grid">
                                    <aside class="right">
                                        <h2 class="title--sm">
            <span>Duration of Post Study Work Visa</span
            ><span class="title--indicator"></span>
                                        </h2>
                                        <div class="para">
                                            <p>
                                                The duration of your PSW Visa will vary according to the type of
                                                course you graduated with.
                                            </p>
                                            <ul>
                                                <li>
                                                    <p>
                                                        A graduate with a Bachelor’s or Master’s degree by coursework
                                                        will be eligible for a two-year Post Study Work Visa.
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        A graduate with Master’s by research will be eligible for a
                                                        three years PSW Visa
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        A graduate with a Doctoral degree will be eligible for a four
                                                        years PSW Visa.
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </aside>
                                    <aside class="left">
                                        <img
                                            src="https://images.unsplash.com/photo-1529400971008-f566de0e6dfc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                            alt=""
                                        />
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </section>


                </div>
                <div class="tab-pane fade" id="nav-6" role="tabpanel">
                    <section class="faq start">
                        <div class="container">
                            <h2 class="title--section text-center mb-4">
                                <span>Frequently Asked Questions</span>
                                <span class="title--indicator indi-center"></span>
                            </h2>

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button
                                            class="accordion-button"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne"
                                        >
            <span class="circle">
              <i class="bi bi-plus"></i>
              <i class="bi bi-dash"></i>
            </span>
                                            What are the course fees in Canadian Universities?
                                        </button>
                                    </h2>
                                    <div
                                        id="collapseOne"
                                        class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne"
                                        data-bs-parent="#accordionExample"
                                    >
                                        <div class="accordion-body">
                                            <div>
                                                <p>
                                                    You must have a work permit or condition attached to your visa
                                                    in order to be able to do so.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo"
                                            aria-expanded="false"
                                            aria-controls="collapseTwo"
                                        >
            <span class="circle">
              <i class="bi bi-plus"></i>
              <i class="bi bi-dash"></i>
            </span>
                                            <span> Can my dependents work in Australia?</span>
                                        </button>
                                    </h2>
                                    <div
                                        id="collapseTwo"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample"
                                    >
                                        <div class="accordion-body">
                                            <div>
                                                <p>
                                                    You must have a work permit or condition attached to your visa
                                                    in order to be able to do so.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree"
                                            aria-expanded="false"
                                            aria-controls="collapseThree"
                                        >
            <span class="circle">
              <i class="bi bi-plus"></i>
              <i class="bi bi-dash"></i>
            </span>
                                            <span> Accordion Item #3</span>
                                        </button>
                                    </h2>
                                    <div
                                        id="collapseThree"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="headingThree"
                                        data-bs-parent="#accordionExample"
                                    >
                                        <div class="accordion-body">
                                            <div>
                                                <strong>This is the third item's accordion body.</strong> It is
                                                hidden by default, until the collapse plugin adds the appropriate
                                                classes that we use to style each element. These classes control
                                                the overall appearance, as well as the showing and hiding via CSS
                                                transitions. You can modify any of this with custom CSS or
                                                overriding our default variables. It's also worth noting that just
                                                about any HTML can go within the <code>.accordion-body</code>,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
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
                    <a href="#!" class="button button-primary">
        <span>Contact Us</span
        ><i class="bi bi-chevron-right"></i>
                    </a>
                </div>
            </div>
        </section>

    </main>
@endsection

@push('scripts')

@endpush
