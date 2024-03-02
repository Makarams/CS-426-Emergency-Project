@extends('master.master')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('submit-report') }}">
                        @csrf
                        <div class="form-group">
                            <label for="reportType">
                                <h2>Report Type</h2>
                            </label>
                            <select class="form-control select-control" id="reportType" name="reportType"
                                onchange="selectReportType(this.value)">
                                <option value="crime">Crime</option>
                                <option value="road-traffic-incident">Road Traffic Incident</option>
                                <option value="missing-person">Missing Person</option>
                                <option value="civil-disputes">Civil Disputes</option>
                                <option value="lost-stolen-vehicles">Lost or Stolen Vehicles</option>
                                <option value="domestic-abuse">Domestic Abuse</option>
                                <option value="report-antisocial-behavior">Report Antisocial Behavior</option>
                                <option value="fraud">Fraud</option>
                                <option value="lost-found-property">Lost or Found Property</option>
                                <option value="explosive-incident">Explosive Incident</option>
                                <option value="public-disturbance">Public Disturbance</option>
                                <option value="hate-crime">Hate Crime</option>
                                <option value="environmental-concern">Environmental Concern</option>
                                <option value="cybercrime">Cybercrime</option>
                                <option value="harassment">Harassment</option>
                            </select>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Report</button>
                    </form>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="report-carousel">
    <div class="report-card">
        <a href="{{ route('crime') }}">
            <div class="report-image" style="background-image: url('/images/crime.jpg');"></div>
            <div class="report-text">
                <h3>Crime</h3>
                <p>Covers a range of unlawful activities and explores prevention and response to criminal behavior.</p>
            </div>
        </a>

    </div>
    <div class="report-card">
        <a href="{{ route('road-traffic-incident') }}">
            <div class="report-image" style="background-image: url('/images/road-traffic-incident.jpg');"></div>
            <div class="report-text">
                <h3>Road Traffic Incident</h3>
                <p>Focuses on accidents and emergencies that occur on the road, emphasizing road safety and responsible
                    driving.</p>
            </div>
        </a>
    </div>
    <div class="report-card">
        <a href="{{ route('missing-person') }}">
            <div class="report-image" style="background-image: url('/images/missing-person.png');"></div>
            <div class="report-text">
                <h3>Missing Person</h3>
                <p> Involves reporting and locating individuals who have gone missing, aiming to reunite them with their
                    families.</p>
            </div>
        </a>
    </div>
    <div class="report-card">
        <a href="{{ route('civil-disputes') }}">
            <div class="report-image" style="background-image: url('/images/civil-disputes.jpg');"></div>
            <div class="report-text">
                <h3>Civil Disputes</h3>
                <p>Addresses conflicts between individuals or organizations, typically resolved through civil legal
                    processes.</p>
            </div>
        </a>
    </div>
    <div class="report-card">
        <a href="{{ route('lost-stolen-vehicles') }}">
            <div class="report-image" style="background-image: url('/images/lost-stolen-vehicles.jpg');"></div>
            <div class="report-text">
                <h3>Lost or Stolen Vehicles</h3>
                <p> Deals with reporting and recovering lost or stolen vehicles, including theft-related incidents.</p>
            </div>
        </a>
    </div>
    <div class="report-card">
        <a href="{{ route('domestic-abuse') }}">
            <div class="report-image" style="background-image: url('/images/domestic-abuse.jpg');"></div>
            <div class="report-text">
                <h3>Domestic Abuse</h3>
                <p>Addresses abuse within familial or intimate relationships and provides resources for victims.</p>
            </div>
        </a>
    </div>
    <div class="report-card">
        <a href="{{ route('report-antisocial-behavior') }}">
            <div class="report-image" style="background-image: url('/images/report-antisocial-behavior.jpg');"></div>
            <div class="report-text">
                <h3>Report Antisocial Behavior</h3>
                <p> Encourages reporting disruptive behavior that affects the community's peace and order.</p>
            </div>
        </a>
    </div>
    <div class="report-card">
        <a href="{{ route('fraud') }}">
            <div class="report-image" style="background-image: url('/images/fraud.png');"></div>
            <div class="report-text">
                <h3>Fraud</h3>
                <p> Focuses on deceptive practices aimed at personal or financial gain through dishonest means.</p>
            </div>
        </a>
    </div>
    <div class="report-card">
        <a href="{{ route('lost-found-property') }}">
            <div class="report-image" style="background-image: url('/images/lost-found-property.jpg');"></div>
            <div class="report-text">
                <h3>Lost or Found Property</h3>
                <p> Involves reporting lost possessions and facilitating the return of found items to rightful owners.
                </p>
            </div>
        </a>
    </div>
    <div class="report-card">
        <a href="{{ route('explosive-incident') }}">
            <div class="report-image" style="background-image: url('/images/explosive-incident.jpg');"></div>
            <div class="report-text">
                <h3>Explosive Incident</h3>
                <p>Addresses incidents involving explosives, emphasizing safety protocols and reporting procedures.</p>
            </div>
        </a>
    </div>
    <div class="report-card">
        <a href="{{ route('public-disturbance') }}">
            <div class="report-image" style="background-image: url('/images/public-disturbance.jpg');"></div>
            <div class="report-text">
                <h3>Public Disturbance</h3>
                <p>Deals with disruptive behavior affecting public peace and emphasizes the importance of reporting.</p>
            </div>
        </a>
    </div>
    <div class="report-card">
        <a href="{{ route('hate-crime') }}">
            <div class="report-image" style="background-image: url('/images/hate-crime.jpeg');"></div>
            <div class="report-text">
                <h3>Hate Crime</h3>
                <p>Focuses on crimes motivated by prejudice or bias against specific characteristics.</p>
            </div>
        </a>
    </div>
    <div class="report-card">
        <a href="{{ route('environmental-concern') }}">
            <div class="report-image" style="background-image: url('/images/environmental-concern.jpg');"></div>
            <div class="report-text">
                <h3>Environmental Concern</h3>
                <p> Involves issues related to pollution, waste management, conservation, and sustainable practices.</p>
            </div>
        </a>
    </div>
    <div class="report-card">
        <a href="{{ route('cybercrime') }}">
            <div class="report-image" style="background-image: url('/images/cybercrime.jpg');"></div>
            <div class="report-text">
                <h3>Cybercrime</h3>
                <p>Covers criminal activities conducted online, such as hacking, identity theft, and online scams.</p>
            </div>
        </a>
    </div>
    <div class="report-card">
        <a href="{{ route('harassment') }}">
            <div class="report-image" style="background-image: url('/images/harassment.jpeg');"></div>
            <div class="report-text">
                <h3>Harassment</h3>
                <p>Addresses various forms of harassment and provides information on reporting and support resources.
                </p>
            </div>
        </a>
    </div>
</div>
<div class="report-page-numbers"></div>
<div class="report-buttons">
    <button class="report-prev-button">Prev</button>
    <button class="report-next-button">Next</button>
</div>

@endsection

<script>
document.addEventListener("DOMContentLoaded", function() {
    var reportCarousel = document.querySelector(".report-carousel");
    var reportCards = Array.from(reportCarousel.querySelectorAll(".report-card"));
    var reportPageNumbers = document.querySelector(".report-page-numbers");
    var reportPrevButton = document.querySelector(".report-prev-button");
    var reportNextButton = document.querySelector(".report-next-button");

    var cardsPerPage = 4;
    var currentPage = 1;
    var totalPages = Math.ceil(reportCards.length / cardsPerPage);

    function showPage(page) {
        var startIndex = (page - 1) * cardsPerPage;
        var endIndex = startIndex + cardsPerPage;
        reportCards.forEach(function(card, index) {
            if (index >= startIndex && index < endIndex) {
                card.style.display = "block";
            } else {
                card.style.display = "none";
            }
        });

        reportPageNumbers.innerHTML = generatePageNumbers(page);
        updateButtonStates(page);
    }

    function generatePageNumbers(currentPage) {
        var pageNumbers = "";
        for (var i = 1; i <= totalPages; i++) {
            if (i === currentPage) {
                pageNumbers += '<span class="report-page-number current">' + i + "</span>";
            } else {
                pageNumbers += '<span class="report-page-number">' + i + "</span>";
            }
        }
        return pageNumbers;
    }

    function updateButtonStates(currentPage) {
        if (currentPage === 1) {
            reportPrevButton.style.display = "none";
        } else {
            reportPrevButton.style.display = "inline-block";
        }

        if (currentPage === totalPages) {
            reportNextButton.style.display = "none";
        } else {
            reportNextButton.style.display = "inline-block";
        }
    }

    reportPrevButton.addEventListener("click", function() {
        if (currentPage > 1) {
            currentPage--;
            showPage(currentPage);
        }
    });

    reportNextButton.addEventListener("click", function() {
        if (currentPage < totalPages) {
            currentPage++;
            showPage(currentPage);
        }
    });

    reportPageNumbers.addEventListener("click", function(event) {
        var target = event.target;
        if (target.classList.contains("report-page-number")) {
            var pageNumber = parseInt(target.innerText);
            if (pageNumber !== currentPage) {
                currentPage = pageNumber;
                showPage(currentPage);
            }
        }
    });

    showPage(currentPage);
});
</script>