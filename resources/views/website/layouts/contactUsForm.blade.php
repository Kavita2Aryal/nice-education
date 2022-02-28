<!-- contact -->
<section class="contactUs">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5">
                <div class="flex__it">
                    <div class="contact__title">
                        <h3>
                            We would love<br />
                            to hear from you
                        </h3>
                    </div>
                    <div class="contact__lady">
                        <img src="{{asset('frontend/images/lady.png')}}" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="form__part">
                    <div class="contact__form">
                        <form action="{{route('enquiry')}}" method="post">
                            @csrf
                            <div class="form__row">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-item">
                                            <label>First Name <sup>*</sup></label>
                                            <input type="text" name="first_name" class="form-control" required/>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-item">
                                            <label>Last Name <sup>*</sup></label>
                                            <input type="text" name="last_name" class="form-control" required/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form__row">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-item">
                                            <label>Email Address <sup>*</sup></label>
                                            <input type="email" name="email_address" class="form-control" required/>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-item">
                                            <label>Mobile Number <sup>*</sup></label>
                                            <input type="text" name="mobile_number" class="form-control" required/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form__row" id="enquiry">
                                <div class="one-label">
                                    <span>My question is regarding<sup>*</sup></span>
                                </div>
                                <div class="check-row">
                                    <div class="form-item form-check">
                                        <input type="checkbox" name="question_about[]" value="Course" id="course" checked/>
                                        <label class="check-label" for="course">Course</label>
                                    </div>
                                    <div class="form-item form-check">
                                        <input type="checkbox" name="question_about[]" value="Visa" id="visa" />
                                        <label class="check-label" for="visa">Visa</label>
                                    </div>
                                    <div class="form-item form-check">
                                        <input type="checkbox" name="question_about[]" value="Test Preparation" id="test" />
                                        <label class="check-label" for="test"
                                        >Test Preparation</label>
                                    </div>
                                    <div class="form-item form-check">
                                        <input type="checkbox" name="question_about[]" value="Funding" id="funding" />
                                        <label class="check-label" for="funding">Funding</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form__row">
                                <div class="one-label">
                                    <span>Preferred Study destination <sup>*</sup> </span>
                                </div>
                                <div class="check-row">
                                    @foreach($countries as $key => $country)
                                    <div class="form-item form-check">
                                        <input type="checkbox" name="preferred_country[]" @if($key == 0) checked @endif value="{{$country->country_name}}" id="country{{$key}}" />
                                        <label class="check-label" for="country{{$key}}">{{$country->country_name}}</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="form__row">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-item">
                                            <label>Additional Queries (If Any)</label>
                                            <textarea type="text" name="question" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form__row pb-4">
                                <div class="form-item form-check terms">
                                    <input type="checkbox" name="terms" id="terms" />
                                    <label class="check-label" for="terms">
                                        Yes, I would like to receive information on study abroad
                                        newsand events from Nice Education <sup>*</sup></label
                                    >
                                </div>
                            </div>

                            <div class="form__row pb-4" style="color:#00345a;margin-top: -10px;font-weight: bolder; font-size: 14px">
                                @if (session('success'))
                                   <b> {{ session('success') }} </b>
                                @endif
                            </div>

                            <div class="submit__btn">
                                <button type="submit" class="contact__submit">
                                    Submit <i class="bi bi-chevron-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="contact__lady">
                        <img src="./images/lady.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
