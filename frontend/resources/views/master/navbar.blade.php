<div class="navbar">
    <ul>
        <li>
            <a href="{{ route('home') }}">Home</a>

        </li>
        <li>
            <a href="{{ route('report') }}">Report▾</a>
            <ul class="submenu">
                <a href="{{ route('crime') }}">Crime</a>
                <a href="{{ route('road-traffic-incident') }}">Road Traffic Incident</a>
                <a href="{{ route('missing-person') }}">Missing Person</a>
                <a href="{{ route('civil-disputes') }}">Civil Disputes</a>
                <a href="{{ route('lost-stolen-vehicles') }}">Lost or Stolen Vehicles</a>
                <a href="{{ route('domestic-abuse') }}">Domestic Abuse</a>
                <a href="{{ route('hate-crime') }}">Hate Crime</a>
                <a href="{{ route('harassment') }}">Harassment</a>
                <a href="{{ route('lost-found-property') }}">Lost or Found Property</a>
                <a href="{{ route('fraud') }}">Fraud</a>
                <a href="{{ route('report-antisocial-behavior') }}">Report Antisocial Behavior</a>
                <a href="{{ route('explosive-incident') }}">Explosive Incident</a>
                <a href="{{ route('public-disturbance') }}">Public Disturbance</a>
                <a href="{{ route('environmental-concern') }}">Environmental Concern</a>
                <a href="{{ route('cybercrime') }}">Cybercrime</a>
            </ul>
        </li>
        <li>
            <a href="{{ route('guidance') }}">Guidance▾</a>
            <ul class="submenu">
                <a href="{{ route('user-guide') }}">User Guide</a>
                <a href="{{ route('faqs') }}">Frequently Asked Questions (FAQs)</a>
                <a href="{{ route('safety-tips') }}">Safety Tips</a>
                <a href="{{ route('emergency-preparedness') }}">Emergency Preparedness</a>
                <a href="{{ route('crime-prevention') }}">Crime Prevention</a>
                <a href="{{ route('legal-advice') }}">Legal Advice</a>
            </ul>
        </li>
        <li>
            <a href="{{ route('emergency') }}">Emergency▾</a>
            <ul class="submenu">
                <a href="{{ route('emergency-hotline') }}">Emergency Hotline</a>
                <a href="{{ route('fire-emergency') }}">Fire Emergency</a>
                <a href="{{ route('medical-emergency') }}">Medical Emergency</a>
                <a href="{{ route('medical-transport') }}">Medical Transport</a>
            </ul>
        </li>
        <li>
            <a href="{{ route('contact') }}">Contact▾</a>
            <ul class="submenu">
                <a href="{{ route('fire-fighter') }}">Fire Station</a>
                <a href="{{ route('police-station') }}">Police Station</a>
                <a href="{{ route('medical-facility') }}">Medical Facility</a>
            </ul>
        </li>
        <li>
            <a href="{{ route('about') }}">About▾</a>
            <ul class="submenu">
                <a href="{{ route('mission-statement') }}">Mission Statement</a>
                <a href="{{ route('terms-of-service') }}">Terms of Service</a>
                <a href="{{ route('privacy-policy') }}">Privacy Policy</a>
            </ul>
        </li>
        <li>
        <div class="group">
        <svg class="icon" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
            <form action="{{ route('search') }}" method="GET">
                <input placeholder="Search" name="query" type="search" class="input">
                </div>
                <!-- <button type="submit">Search</button> -->
            </form>
        </li>
    </ul>
</div>