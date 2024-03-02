@extends('master.master')

@section('content')

<body>
    <div class="about-container">
        <h1 class="about-header">About Us</h1>
        <p>This website is a web application designed to help users find nearby police stations, fire departments,
            medical facilities, and interior government stations. The main focus of the website is to provide quick
            communication and ease of access to emergency services that are available closest to the user's location and
            require immediate help.</p>
        <h3>Creators:</h3>
        <p> Our team of dedicated developers has worked hard to create this website and make it user-friendly and
            efficient. Meet our team members:</p>
        <div class="about-row">
            <div class="col-sm-4">
                <div class="about-person">
                    <img class="about-image" src="{{ asset('images/makara.jpg') }}" alt="Person 2">
                    <div class="about-details">
                        <h2 class="about-name">Mak Sammakara</h2>
                        <p class="about-email">sammakarams@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="about-person">
                    <img class="about-image" src="{{ asset('images/sokleng.jpg') }}" alt="Person 3">
                    <div class="about-details">
                        <h2 class="about-name">Ry Sokleng</h2>
                        <p class="about-email">Manuelsokleng99@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="about-person">
                    <img class="about-image" src="{{ asset('images/kimleng.jpg') }}" alt="Person 1">
                    <div class="about-details">
                        <h2 class="about-name">Soth Kimleng</h2>
                        <p class="about-email">sothkimleng@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection