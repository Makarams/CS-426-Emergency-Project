@extends('master.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="carousel">
            <img src="{{ asset('images/img1.jpg') }}" alt="Image 1">
            <img src="{{ asset('images/img2.jpg') }}" alt="Image 2">
            <img src="{{ asset('images/img3.jpg') }}" alt="Image 3">
            <img src="{{ asset('images/img4.jpg') }}" alt="Image 4">
            <img src="{{ asset('images/img5.jpg') }}" alt="Image 5">
        </div>
        <div class="card">
            <div class="card-header text-center">
                <h2>{{ __('What\'s happening in your area?') }}</h2>
                <h3 style="text-align: center">
                    {{ __('Find your local officer, medical professional and fire fighter, get the latest information and advice.') }}
                </h3>
            </div>
            <div class="card-body">
                @csrf
                <div class="form-group row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phnomPenhDistrict">
                                <h2>Phnom Penh District:</h2>
                            </label>
                            <form id="searchForm">
                                <select class="form-control select-control" id="phnomPenhDistrict"
                                    name="phnomPenhDistrict">
                                    <option value="1">Khan Daun Penh</option>
                                    <option value="2">Khan Chamkar Mon</option>
                                    <option value="3">Khan Prampi Makara</option>
                                    <option value="4">Khan Tuol Kork</option>
                                    <option value="5">Khan Dangkao</option>
                                    <option value="6">Khan Mean Chey</option>
                                    <option value="7">Khan Russey Keo</option>
                                    <option value="8">Khan Sen Sok</option>
                                    <option value="9">Khan Chroy Changvar</option>
                                    <option value="10">Khan Porsenchey</option>
                                    <option value="11">Khan Preaek Pnov</option>
                                    <option value="12">Khan Boeung Keng Kang</option>
                                    <option value="13">Khan Chbar Ampov</option>
                                    <option value="14">Khan Kamboul</option>
                                    <option value="15">Koh Pich</option>
                                </select>
                                <br>
                                <br>
                                <button type="submit" class="btn btn-primary">Search</button>
                            </form>
                            <hr>
                            <div id="mapContainer">
                                <div id="mapCanvas"></div>
                                <div id="directionsPanel">
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('API_KEY') }}&callback=initMap">
                    </script>

                    <script>
                    function initMap() {
                        var map;
                        var bounds = new google.maps.LatLngBounds();
                        var mapOptions = {
                            mapTypeId: 'roadmap'
                        };

                        // Display a map on the web page
                        map = new google.maps.Map(document.getElementById("mapCanvas"), mapOptions);
                        map.setTilt(100);

                        // Define directions service and display objects
                        var directionsService = new google.maps.DirectionsService();
                        var directionsDisplay = new google.maps.DirectionsRenderer({
                            map: map
                        });
                        // Multiple markers location, position_latitude, and position_longitude
                        var markers = [
                            <?php if($markers->count() > 0): ?>
                            <?php foreach($markers as $marker): ?>["<?php echo $marker->department_name; ?>",
                                <?php echo $marker->position_latitude; ?>,
                                <?php echo $marker->position_longitude; ?>, "<?php echo $marker->legend_symbol; ?>"
                            ],
                            <?php endforeach; ?>
                            <?php endif; ?>
                        ];

                        // Info window content
                        var infoWindowContent = [
                            <?php if($infoWindowContent->count() > 0): ?>
                            <?php foreach($infoWindowContent as $info): ?>['<div class="info_content">' +
                                '<h3><?php echo $info->department_name; ?></h3>' +
                                '<h4><?php echo $info->department_specialty; ?></h4>' +
                                '<h4><?php echo $info->department_type; ?></h4>' +
                                '<p><?php echo $info->location_name; ?></p>' +
                                '<p><?php echo $info->address; ?></p>' +
                                '<p><?php echo $info->phone_number; ?></p>' + '</div>'],
                            <?php endforeach; ?>
                            <?php endif; ?>
                        ];

                        // Add multiple markers to map
                        var infoWindow = new google.maps.InfoWindow(),
                            marker, i;

                        // Place each marker on the map  
                        for (i = 0; i < markers.length; i++) {
                            var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                            bounds.extend(position);
                            marker = new google.maps.Marker({
                                position: position,
                                map: map,
                                icon: markers[i][3],
                                title: markers[i][0]
                            });

                            // Add click event listener to marker for routing and directions
                            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                return function() {
                                    infoWindow.setContent(infoWindowContent[i][0]);
                                    infoWindow.open(map, marker);

                                    if (navigator.geolocation) {
                                        navigator.geolocation.getCurrentPosition(function(position) {
                                            var userLocation = {
                                                lat: position.coords.latitude,
                                                lng: position.coords.longitude
                                            };

                                            calculateAndDisplayRoute(directionsService,
                                                directionsDisplay, userLocation, marker
                                                .getPosition());
                                        });
                                    }
                                }
                            })(marker, i));

                            // Center the map to fit all markers on the screen
                            map.fitBounds(bounds);
                        }

                        // Set zoom level
                        var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
                            this.setZoom(14);
                            google.maps.event.removeListener(boundsListener);
                        });

                        // Get the current location of the user
                        if (navigator.geolocation) {
                            navigator.geolocation.getCurrentPosition(function(position) {
                                var userLocation = {
                                    lat: position.coords.latitude,
                                    lng: position.coords.longitude,
                                };

                                // Add a marker for the user's location
                                var userMarker = new google.maps.Marker({
                                    position: userLocation,
                                    map: map,
                                    title: 'Your Location',
                                });

                                // Add click event listener to display info window
                                userMarker.addListener('click', function() {
                                    var infoWindow = new google.maps.InfoWindow({
                                        content: 'Your current location',
                                    });
                                    infoWindow.open(map, userMarker);
                                });
                                // Center the map on the user's location
                                map.setCenter(userLocation);
                            });
                        }

                        var map;
                        var geocoder;
                        var districtMarker;
                        geocoder = new google.maps.Geocoder();

                        // Handle form submission
                        document.getElementById('searchForm').addEventListener('submit', function(e) {
                            e.preventDefault(); // Prevent form submission

                            var districtId = document.getElementById('phnomPenhDistrict').value;

                            // Retrieve district name from the selected option
                            var districtName = document.querySelector('#phnomPenhDistrict option[value="' +
                                districtId + '"]').text;

                            // Use the district name to fetch geocoder from the "districts" table
                            geocoder.geocode({
                                address: districtName
                            }, function(results, status) {
                                if (status === google.maps.GeocoderStatus.OK && results.length > 0) {
                                    var location = results[0].geometry.location;
                                    map.setCenter(location);

                                    if (districtMarker) {
                                        // If marker already exists, update its position
                                        districtMarker.setPosition(location);
                                    } else {
                                        // Otherwise, create a new marker
                                        districtMarker = new google.maps.Marker({
                                            map: map,
                                            position: location,
                                            title: districtName
                                        });
                                    }
                                } else {
                                    console.error(
                                        'Geocode was not successful for the following reason: ' +
                                        status);
                                }
                            });
                        });

                        function calculateAndDisplayRoute(directionsService, directionsDisplay, userLocation,
                            markerLocation) {
                            directionsService.route({
                                origin: userLocation,
                                destination: markerLocation,
                                travelMode: google.maps.TravelMode.DRIVING,
                                language: 'en' // Set the language to English
                            }, function(response, status) {
                                if (status === 'OK') {
                                    directionsDisplay.setDirections(response);

                                    // Get the directions steps
                                    var steps = response.routes[0].legs[0].steps;
                                    var instructions = '';

                                    // Generate the HTML for directions
                                    for (var i = 0; i < steps.length; i++) {
                                        instructions += '<li>' + steps[i].instructions + '</li>';
                                    }

                                    // Display the directions in the directions panel
                                    document.getElementById('directionsPanel').innerHTML = '<ol>' +
                                        instructions + '</ol>';
                                } else {
                                    window.alert('Directions request failed due to ' + status);
                                }
                            });
                        }


                    }

                    // Load initialize function
                    google.maps.event.addDomListener(window, 'load', initMap);
                    </script>

                    <div class="quick-link-container">
                        <div class="quick-link-column">
                            <h2>Quick Links</h2>
                        </div>
                        <div class="quick-link-column">
                            <p><a href="{{ route('emergency') }}"><span style="color: orange;">&gt;</span> Are you in
                                    need of
                                    help?</a></p>
                            <p><a href="{{ route('report') }}"><span style="color: orange;">&gt;</span> Do you want to
                                    report?</a>
                            </p>
                            <p><a href="{{ route('faqs') }}"><span style="color: orange;">&gt;</span> Frequently Asked
                                    Questions
                                    (FAQs)</a>
                            </p>
                        </div>
                    </div>
                    <h1>
                        <strong>News</strong>
                    </h1>
                    <div class="news-section">
                        <div class="news-item">
                            <a
                                href="https://www.khmertimeskh.com/501297952/cambodia-tipped-as-future-summer-youth-olympics-host-after-success-of-sea-games/">
                                <img src="{{ asset('images/news1.jpg') }}" alt="News Image 1">
                                <h2>Cambodia tipped as future Summer Youth Olympics host after success of SEA Games</h2>
                                <p class="summary">Cambodia is capable of staging the Summer Youth Olympic Games after
                                    successfully
                                    hosting
                                    the Southeast Asian (SEA) Games, which came to an end last week, it has been
                                    claimed.</p>
                                <p class="publish-date">Published: May 28, 2023 10:30 AM</p>
                            </a>
                        </div>
                        <div class="news-item">
                            <a
                                href="https://www.khmertimeskh.com/501292531/cyclist-wins-silver-bronze-medals-at-games/">
                                <img src="{{ asset('images/news2.jpg') }}" alt="News Image 2">
                                <h2>Cyclist wins silver, bronze medals at games</h2>
                                <p class="summary">The Cambodian cycling team won two medals at the 32nd Southeast Asian
                                    Games (SEA
                                    Games)
                                    in Cambodia.</p>
                                <p class="publish-date">Published: May 18, 2023 2:45 PM</p>
                            </a>
                        </div>
                        <div class="news-item">
                            <a href="https://www.khmertimeskh.com/501289943/cambodia-sees-benefits-from-sea-games/">
                                <img src="{{ asset('images/news3.jpg') }}" alt="News Image 3">
                                <h2>Cambodia sees benefits from SEA Games</h2>
                                <p class="summary">As the host of the 32nd SEA Games, Cambodia has worked hard to host
                                    the games
                                    seeing
                                    benefits: domestic expenditure, promotion of the country’s reputation on the
                                    international
                                    stage,
                                    potential investment attraction, and people’s reputation.</p>
                                <p class="publish-date">Published: May 14, 2023 5:15 PM</p>
                            </a>
                        </div>
                        <div class="news-item">
                            <a
                                href="https://www.khmertimeskh.com/501289907/cambodia-set-to-finish-in-top-5-of-medals-tally-for-its-best-ever-performance-in-sea-games/">
                                <img src="{{ asset('images/news4.jpg') }}" alt="News Image 4">
                                <h2>Cambodia set to finish in top 5 of medals tally for its best-ever performance in SEA
                                    Games</h2>
                                <p class="summary">As the 32nd Edition of the biannual SEA Games winds down and heads
                                    for its
                                    official
                                    closure on May 17, 2023, Cambodia’s golden run of medals has started to trickle down
                                    with most
                                    events
                                    having been completed.</p>
                                <p class="publish-date">Published: May 14, 2023 11:20 AM</p>
                            </a>
                        </div>
                        <div class="news-item">
                            <a
                                href="https://www.khmertimeskh.com/501285231/sea-games-torch-leaves-kampong-thom-province-and-heads-for-morodok-techo-national-stadium/">
                                <img src="{{ asset('images/news5.jpg') }}" alt="News Image 5">
                                <h2>SEA Games torch leaves Kampong Thom province and heads for Morodok Techo National
                                    Stadium</h2>
                                <p class="summary">The torch run departed from Kampong Thom province and headed to
                                    Moradok Techo
                                    National
                                    Stadium to prepare for the official opening of the 32nd Southeast Asian Games and
                                    the 12th ASEAN
                                    Para
                                    Games today.</p>
                                <p class="publish-date">Published: May 5, 2023 9:40 AM</p>
                            </a>
                        </div>
                        <div class="news-item">
                            <a
                                href="https://www.khmertimeskh.com/501284645/sea-games-cambodias-jessa-khan-defeats-three-opponents-in-jiu-jitsu-tournament/">
                                <img src="{{ asset('images/news6.jpg') }}" alt="News Image 6">
                                <h2>SEA Games: Cambodia's Jessa Khan defeats three opponents in jiu-jitsu tournament
                                </h2>
                                <p class="summary">Cambodian Jiu-Jitsu fighter Miss Khan Jessa defeated three opponents:
                                    Singapore,
                                    Vietnam,
                                    and Thailand by submission in the Ne-Waga Gl-52Kg women’s category held at Chroy
                                    Changvar
                                    International
                                    Convention and Exhibition Centre in Phnom Penh this afternoon.</p>
                                <p class="publish-date">Published: May 4, 2023 3:55 PM</p>
                            </a>
                        </div>
                        <div class="news-item">
                            <a
                                href="https://www.khmertimeskh.com/501284583/preah-sihanouks-governor-inspects-beach-volleyball-court-for-sea-games/">
                                <img src="{{ asset('images/news7.jpg') }}" alt="News Image 7">
                                <h2>Preah Sihanouk's governor inspects beach volleyball court for SEA Games</h2>
                                <p class="summary">Kouch Chamroeun, Governor of Preah Sihanouk Province, inspected the
                                    beach
                                    volleyball
                                    court for the 32nd Southeast Asian Games 2023 in Poy Chumteav Mao in Bit Trang
                                    commune, Prey Nob
                                    district on May 3.</p>
                                <p class="publish-date">Published: May 4, 2023 6:10 PM</p>
                            </a>
                        </div>
                        <div class="news-item">
                            <a
                                href="https://www.khmertimeskh.com/501284546/45-cambodian-products-on-display-at-sea-games-at-moradok-techo-national-stadium/">
                                <img src="{{ asset('images/news8.jpg') }}" alt="News Image 8">
                                <h2>45 Cambodian products on display at SEA Games at Moradok Techo National Stadium</h2>
                                <p class="summary">Through the National Committee for the Promotion of the One Village
                                    One product
                                    Movement,
                                    45 Cambodian products, are on display at the 32nd SEA Games at the Moradok Techo
                                    National
                                    Stadium from
                                    May 4-16.</p>
                                <p class="publish-date">Published: May 4, 2023 8:25 AM</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection