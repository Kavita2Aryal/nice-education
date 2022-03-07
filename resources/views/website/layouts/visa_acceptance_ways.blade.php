<section class="requiredDocs">
    <div class="container">
        <h2 class="title--section text-center mb-4">
            <span>We do this in two ways</span>
            <span class="title--indicator indi-center blackVariant"></span>
        </h2>
        <div class="ways--row">
            <div class="ways--item">
                <img src="{{asset('storage/images/company/visa_acceptance_image1s/'.$company->visa_acceptance_image1)}}" alt=""/>
                <div class="white--card">
                    <p>
                        {{$company->visa_acceptance_description1}}
                    </p>
                </div>
            </div>
            <div class="ways--item">
                <img src="{{asset('storage/images/company/visa_acceptance_image2s/'.$company->visa_acceptance_image2)}}" alt=""/>
                <div class="white--card">
                    <p>
                        {{$company->visa_acceptance_description2}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
