<header>
    <div class="container">
        <nav>
            <a href="{{url('/')}}" class="brand">
                <img src="{{asset('storage/images/company/logos/'.$company->logo)}}" alt="nice" />
            </a>

            <ul class="nav" id="sidebar">
                <li class="nav-item">
                    <a class="nav-link active" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('aboutUs')}}">About us</a>
                </li>
                <li class="nav-item">

                    <a class="nav-link" href="{{route('serviceDetail',['id'=>\App\Models\Service::first()->id,'slug'=>\App\Models\Service::first()->slug])}}">Our Services</a>
                </li>

                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        data-bs-toggle="dropdown"
                    >
                        <span>Study Abroad</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        @foreach($countries as $key => $value)
                        <li><a class="dropdown-item" href="{{route('studyAbroadDetail',['id'=>$value->id,'slug'=>$value->slug])}}">{{$value->country_name}}</a></li>
                        @endforeach
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a
                        class="dropdown-toggle nav-link"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                    >
                        <span> Test Preparation</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        @foreach($test_preparations as $test_preparation)
                        <li>
                            <a class="dropdown-item" href="{{route('testPreparation',['id'=>$test_preparation->id,'slug'=>$test_preparation->slug])}}">{{$test_preparation->title}}</a>
                        </li>
                        @endforeach

                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contactUs')}}">Contact Us</a>
                </li>
            </ul>
            <button class="hamburger" id="hamburger">
                <i class="bi bi-list"></i>
                <i class="bi bi-x"></i>
            </button>
        </nav>
    </div>
    <div class="floating--widget">
        <ul>
            @if($company->mobile != null)
            <li>
                <a href="tel:{{$company->mobile}}"><i class="bi bi-telephone-fill"></i><span>Call Us</span></a>
            </li>
            @endif

            @if($company->whatsapp_number != null)
            <li>
                <a href="https://wa.me/{{$company->whatsapp_number}}" target="_blank">
                <i class="bi bi-chat-dots-fill"></i><span>Chat <br>with us</span>
                </a>
            </li>

            @endif

            @if($company->phone != null)
            <li>
                <a href="tel:{{$company->phone}}"><i class="bi bi-telephone-inbound-fill"></i><span>Request<br>Callback</span></a>
            </li>
            @endif
        </ul>
    </div>
</header>

<script>
    window.addEventListener("DOMContentLoaded", (event) => {
        const hamburger = document.getElementById("hamburger");
        const sideBar = document.getElementById("sidebar");
        hamburger.addEventListener("click", (event) => {
            event.currentTarget.classList.toggle("active");
            sideBar.classList.toggle("active");
            document.querySelector("body").classList.toggle("overflow-hidden");
        });
    });
</script>


<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
    integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
/><link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
    integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
/>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
    integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
></script>
