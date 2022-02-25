@extends('website.layouts.master')
@section('title','Test Preparation -Nice Education')
@section('content')
    <main class="main test-page">
        <!-- banner -->


        <section class="banner--title">
            <div class="container">
                <div class="wrapper">
                    <h2 class="title--section white">
                        <span class="title--large">TOEFL</span>
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
                <div class="tab-pane fade show active" id="nav-1" role="tabpanel">
                    <section class="whyStd">
                        <div class="container">
                            <h2 class="title--section text-center mb-4">
                                <span>What is TOEFL exam?</span>
                                <span class="title--indicator indi-center"></span>
                            </h2>
                            <p class="parad">
                                The TOEFL exam is a popular English proficiency test to examine
                                international students’ ability to communicate effectively overseas. The
                                TOEFL exam is widely accepted across 120+ countries, including Australia,
                                New Zealand, Canada, the US and the UK. Students can take up the TOEFL
                                exam in two ways, i.e) TOEFL iBT (internet based exam) and TOEFL PBT
                                (paper based exam).
                            </p>

                            <div class="text-center mt-5">
                                <a
                                    class="button button-primary"
                                    href="/images/myw3schoolsimage.pdf"
                                    download
                                >
                                    <span>Download Guide</span><i class="bi bi-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </section>
                    <section class="education">
                        <div class="container">
                            <h2 class="title--section text-center mb-md-4">
                                <span>Types of TOEFL exam</span>
                                <span class="title--indicator indi-center"></span>
                            </h2>
                            <div class="grid">
                                <aside class="left">
                                    <h2 class="title--section">
          <span>ETS TOEFL – iBT Test</span
          ><span class="title--indicator"></span>
                                    </h2>
                                    <p>
                                        The TOEFL-iBT test is the most preferred type, with over 90% of
                                        students attempting the test in this internet based format. The
                                        TOEFL-iBT test comprises 4 sections, which are: speaking, listening,
                                        writing and reading. Students are asked to take up all the sections on
                                        a computer equipped with a microphone and camera. Since the iBT test
                                        pattern doesn’t have a separate section to examine candidates’ grammar
                                        knowledge, the writing section is monitored in detail.
                                    </p>
                                    <h2 class="title--section">
          <span>ETS TOEFL – PBT (* PBT is not available in Nepal)</span
          ><span class="title--indicator"></span>
                                    </h2>
                                    <p>
                                        The TOEFL PBT is a paper-based English language test. Students who are
                                        not in proximity to internet-based test centres can take up this test.
                                        The TOEFL PBT test format is quite different from that of iBT as it
                                        also contains a separate essay section. The listening section in the
                                        PBT has recordings that are shorter than the IBT’s.
                                    </p>
                                </aside>
                                <aside class="right">
                                    <div class="image">
                                        <img
                                            src="https://images.unsplash.com/photo-1513258496099-48168024aec0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
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
                    <section class="popularCourses start prepare">
                        <div class="container">
                            <h2 class="title--section text-center mb-4">
                                <span>How to prepare?</span>
                                <span class="title--indicator indi-center"></span>
                            </h2>
                            <p class="parad">
                                For your TOEFL exam preparation, you can either join a TOEFL coaching
                                class close to you or start preparing on your own as long as you have the
                                necessary resources. However, by joining a coaching centre, you can
                                benefit from the guidance and services of expert TOEFL trainers. With
                                consistent hard work, the average preparation time needed is less than 3
                                weeks. If you would like to score a high band score, the TOEFL exam
                                preparation time must be at least 2-3 months ahead of the examination.
                            </p>

                            <div class="text-center mt-5">
                                <a
                                    class="button button-primary"
                                    href="/images/myw3schoolsimage.pdf"
                                    download
                                >
                                    <span>Download Guide</span><i class="bi bi-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="yellow">
                            <div class="container">
                                <h2 class="title--section text-center mb-4 mb-xl-5">
                                    <span>Recommended Books</span>
                                    <span class="title--indicator indi-center blackVariant"></span>
                                </h2>
                                <div class="grid">
                                    <aside>
                                        <h2 class="title">TOEFL iBT: The Official ETS Study Guide</h2>
                                        <p>
                                            This is a best-selling guide that provides users with a range of
                                            tips, practice exercises and skill-building methods. This book
                                            consists of hundreds of real TOEFL exam question papers, essay
                                            topics and practice exercises for all four sections - listening,
                                            reading, writing and speaking.
                                        </p>
                                    </aside>
                                    <aside>
                                        <h2 class="title">
                                            Delta's Key to the TOEFL iBT: Advanced Skill Practice
                                        </h2>
                                        <p>
                                            With this book, you will receive an audio CD that contains over 9
                                            hours of audio. With the help of the audio exercises in the CD, you
                                            can master the listening section. In addition to this, it also
                                            contains 35 units in reading, listening, writing and speaking in the
                                            TOEFL iBT format, along with 1200 questions for practice.
                                        </p>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- eduation -->
                    <section class="education">
                        <div class="container">
                            <h2 class="title--section text-center mb-md-4">
                                <span>ETS TOEFL Practice Test</span>
                                <span class="title--indicator indi-center"></span>
                            </h2>
                            <div class="grid mb">
                                <aside class="left">
                                    <h2 class="title--section">
          <span>TOEFL Reading Practice Test</span
          ><span class="title--indicator"></span>
                                    </h2>
                                    <div class="para">
                                        <p>
                                            One of the best ways to prepare for this section is to read
                                            regularly. Test takers can read through newspapers, university
                                            textbooks, magazines and a wide range of literature to improve their
                                            vocabulary. They must also attempt to summarise or draw conclusions
                                            from what they read. This will aid them in improving their
                                            comprehension skills.
                                        </p>
                                        <a href="#!" target="_blank">
                                            <cite>TOEFL Reading Practice Test Sample- ETS TOEFL</cite>
                                        </a>
                                    </div>

                                    <h2 class="title--section">
          <span>TOEFL Listening Practice Test</span
          ><span class="title--indicator"></span>
                                    </h2>
                                    <div class="para">
                                        <p>
                                            In this section, the test taker must start practising by listening
                                            to a range of audio files, including news reports, songs, movies,
                                            documentaries. Creating inferences from the audio will aid in better
                                            understanding.
                                        </p>
                                        <a href="#!" target="_blank">
                                            <cite>TOEFL Listening Practice Test Sample- ETS TOEFL</cite>
                                        </a>
                                    </div>
                                </aside>
                                <aside class="right">
                                    <div class="image">
                                        <img
                                            src="https://images.unsplash.com/photo-1513258496099-48168024aec0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                            alt=""
                                        />
                                    </div>
                                </aside>
                            </div>
                            <div class="grid" style="flex-direction: row-reverse">
                                <aside class="left">
                                    <h2 class="title--section">
          <span>TOEFL Writing Practice Test</span
          ><span class="title--indicator"></span>
                                    </h2>
                                    <div class="para">
                                        <p>
                                            Test takers can make a list of some of the most repeated topics in
                                            the writing section. The students can then start the preparation by
                                            writing about them. The test takers must introduce a statement for
                                            each topic and come up with a suitable evidence-based conclusion.
                                        </p>
                                        <a href="#!" target="_blank">
                                            <cite>TOEFL Reading Practice Test Sample- ETS TOEFL</cite>
                                        </a>
                                    </div>

                                    <h2 class="title--section">
          <span>TOEFL Speaking Practice Test</span
          ><span class="title--indicator"></span>
                                    </h2>
                                    <div class="para">
                                        <p>
                                            Test takers can use the vocabulary they gain from the reading
                                            exercises. In addition to this, they must focus on improving their
                                            grammatical skills, pronunciation, and intonation patterns. Test
                                            takers can also prepare on their own on some of the most popular
                                            topics under this section.
                                        </p>
                                        <a href="#!" target="_blank">
                                            <cite>TOEFL Listening Practice Test Sample- ETS TOEFL</cite>
                                        </a>
                                    </div>
                                </aside>
                                <aside class="right">
                                    <div class="image">
                                        <img
                                            src="https://images.unsplash.com/photo-1513258496099-48168024aec0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                            alt=""
                                        />
                                    </div>
                                </aside>
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
                            <div class="text-center mt-5">
                                <a
                                    class="button button-primary"
                                    href="/images/myw3schoolsimage.pdf"
                                    download=""
                                >
                                    <span>Download Guide</span><i class="bi bi-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </section>
                    <section class="exam--pattern">
                        <div class="container">
                            <h2 class="title--section text-center mb-4 mb-lg-5">
                                <span>TOEFL Exam Pattern</span>
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
                                                <h1 class="small--title">Question:</h1>
                                                <p>
                                                    3 to 5 passages with <br />
                                                    12 to 14 questions
                                                </p>
                                            </div>
                                            <div class="para">
                                                <h1 class="small--title">Time:</h1>
                                                <p>60 to 100 minutes</p>
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
                                                <h1 class="small--title">Question:</h1>
                                                <p>
                                                    3 to 5 passages with <br />
                                                    12 to 14 questions
                                                </p>
                                            </div>
                                            <div class="para">
                                                <h1 class="small--title">Time:</h1>
                                                <p>60 to 100 minutes</p>
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
                                                <h1 class="small--title">Question:</h1>
                                                <p>
                                                    3 to 5 passages with <br />
                                                    12 to 14 questions
                                                </p>
                                            </div>
                                            <div class="para">
                                                <h1 class="small--title">Time:</h1>
                                                <p>60 to 100 minutes</p>
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
                                                <h1 class="small--title">Question:</h1>
                                                <p>
                                                    3 to 5 passages with <br />
                                                    12 to 14 questions
                                                </p>
                                            </div>
                                            <div class="para">
                                                <h1 class="small--title">Time:</h1>
                                                <p>60 to 100 minutes</p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="#" target="_blank" class="normal-link">
                                    <cite>Understanding Your TOEFL iBT Scores</cite>
                                </a>
                            </div>
                        </div>
                    </section>

                </div>
                <div class="tab-pane fade" id="nav-4" role="tabpanel">
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

        <!-- contact -->
        @include('website.layouts.contactUsForm')


        <!-- small banner -->
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
