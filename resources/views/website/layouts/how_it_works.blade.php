<section class="worksHow">
    <div class="container">
        <h2 class="title--section text-center mb-4">
            <span>How does it work</span>
            <span class="title--indicator indi-center blackVariant"></span>
        </h2>
        <div class="step--row">
            @foreach($ourWorks as $key => $ourWork)
            <div class="step--item">
                <figure>
                    <img
                        src="https://images.unsplash.com/photo-1573497491208-6b1acb260507?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2340&q=80"
                        alt=""
                    />
                    <span class="count">{{++$key}}</span>
                </figure>
                <div class="info">
                    {!! count_space($ourWork->description) !!}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
