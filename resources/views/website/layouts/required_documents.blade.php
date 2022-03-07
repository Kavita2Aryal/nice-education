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
                @foreach($documents as $document)
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
                    <span>{{$document->name}}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
