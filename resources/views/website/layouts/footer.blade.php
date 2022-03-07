


<footer>
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="foot__item">
                    <div class="foot__title">
                        <h4>{{$company->name}}</h4>
                    </div>
                   <p> {!! $company->footer_text !!} </p>
                </div>
                <div class="foot__item">
                    <div class="foot__title">
                        <h4>Get in Touch</h4>
                    </div>
                    <p>
                        {{$company->address}}<br />
                        @if($company->phone != null) Phone: {{$company->phone}} <br /> @endif
                        @if($company->mobile != null) Mobile: {{$company->mobile}}
                        <br />@endif
                        Email: {{$company->email}}
                    </p>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="foot__item">
                    <div class="foot__title">
                        <h4>Services</h4>
                    </div>
                    <div class="foot__links">
                        <ul>
                            @foreach($services as $service)
                            <li><a href="{{route('serviceDetail',['id'=>$service->id,'slug'=>$service->slug])}}"> {{$service->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="foot__item">
                    <div class="foot__title">
                        <h4>Study in</h4>
                    </div>
                    <div class="foot__links">
                        <ul>
                            @foreach($countries as $country)
                            <li><a href="#!">{{$country->country_name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="foot__item">
                    <div class="foot__title">
                        <h4>Test Preparation</h4>
                    </div>
                    <div class="foot__links">
                        <ul>
                            @foreach($test_preparations as $test_prep)
                            <li><a href="{{route('testPreparation',['id'=>$test_prep->id,'slug'=>$test_prep->slug])}}">{{$test_prep->title}} </a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="foot__item">
                    <div class="foot__title">
                        <h4>College & Universities</h4>
                    </div>
                    <div class="foot__links">
                        <ul>
                            @foreach($universities as $university)
                            <li><a href="#!">{{$university->name}} </a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="lower__row">
            <div class="social">
                <ul>
                    @if($company->facebook_url != null)
                    <li>
                        <a href="{{$company->facebook_url}}" target="_blank"><i class="bi bi-facebook"></i></a>
                    </li>
                    @endif

                    @if($company->instagram_url != null)
                    <li>
                        <a href="{{$company->instagram_url}}" target="_blank"><i class="bi bi-instagram"></i></a>
                    </li>
                    @endif

                    @if($company->linkedin_url != null)
                    <li>
                        <a href="{{$company->linkedin_url}}" target="_blank" ><i class="bi bi-linkedin"></i></a>
                    </li>
                    @endif

                    @if($company->whatsapp_number != null)
                    <li>
                        <a href="https://wa.me/{{$company->whatsapp_number}}" target="_blank"><i class="bi bi-whatsapp"></i></a>
                    </li>
                    @endif
                </ul>
            </div>
            <div class="design">
                <span>design:</span>
                <a href="https://thesunbi.com/" target="_blank">SunBi</a>
            </div>
        </div>
    </div>
</footer>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
></script>
<script type="text/javascript" src="{{asset('frontend/js/main.js')}}"></script>


