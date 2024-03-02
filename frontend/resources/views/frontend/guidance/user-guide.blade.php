@extends('master.master')

@section('content')
<h1>Guidance: User Guide</h1>
<h2>Website Navigation</h2>
<p>Welcome to our website! This user guide will help you navigate through the different sections and features of our
    site.</p>

<ol>
    <li>
        <strong>Home:</strong>
        <p>Click on the <a href="{{ route('home') }}">Home</a> link to go back to the homepage.</p>
    </li>
    <li>
        <strong>Report:</strong>
        <p>
            Hover over the <a href="{{ route('report') }}">Report</a> link to reveal a dropdown menu with various report
            options.
        <ul>
            <li><a href="{{ route('crime') }}">Crime</a></li>
            <li><a href="{{ route('road-traffic-incident') }}">Road Traffic Incident</a></li>
            <li><a href="{{ route('missing-person') }}">Missing Person</a></li>
            <li><a href="{{ route('civil-disputes') }}">Civil Disputes</a></li>
            <li><a href="{{ route('lost-stolen-vehicles') }}">Lost or Stolen Vehicles</a></li>
            <li><a href="{{ route('domestic-abuse') }}">Domestic Abuse</a></li>
            <li><a href="{{ route('report-antisocial-behavior') }}">Report Antisocial Behavior</a></li>
            <li><a href="{{ route('fraud') }}">Fraud</a></li>
            <li><a href="{{ route('lost-found-property') }}">Lost or Found Property</a></li>
            <li><a href="{{ route('explosive-incident') }}">Explosive Incident</a></li>
            <li><a href="{{ route('public-disturbance') }}">Public Disturbance</a></li>
            <li><a href="{{ route('hate-crime') }}">Hate Crime</a></li>
            <li><a href="{{ route('environmental-concern') }}">Environmental Concern</a></li>
            <li><a href="{{ route('cybercrime') }}">Cybercrime</a></li>
            <li><a href="{{ route('harassment') }}">Harassment</a></li>
        </ul>
        </p>
    </li>
    <li>
        <strong>Guidance:</strong>
        <p>
            Hover over the <a href="{{ route('guidance') }}">Guidance</a> link to reveal a dropdown menu with helpful
            resources.
        <ul>
            <li><a href="{{ route('user-guide') }}">User Guide</a></li>
            <li><a href="{{ route('faqs') }}">Frequently Asked Questions (FAQs)</a></li>
            <li><a href="{{ route('safety-tips') }}">Safety Tips</a></li>
            <li><a href="{{ route('emergency-preparedness') }}">Emergency Preparedness</a></li>
            <li><a href="{{ route('crime-prevention') }}">Crime Prevention</a></li>
            <li><a href="{{ route('legal-advice') }}">Legal Advice</a></li>
        </ul>
        </p>
    </li>
    <li>
        <strong>Emergency:</strong>
        <p>
            Hover over the <a href="{{ route('emergency') }}">Emergency</a> link to reveal a dropdown menu with
            emergency-related options.
        <ul>
            <li><a href="{{ route('emergency-hotline') }}">Emergency Hotline</a></li>
            <li><a href="{{ route('fire-emergency') }}">Fire Emergency</a></li>
            <li><a href="{{ route('medical-emergency') }}">Medical Emergency</a></li>
            <li><a href="{{ route('medical-transport') }}">Medical Transport</a></li>
        </ul>
        </p>
    </li>
    <li>
        <strong>Contact:</strong>
        <p>
            Hover over the <a href="{{ route('contact') }}">Contact</a> link to reveal a dropdown menu with contact
            information for different entities.
        <ul>
            <li><a href="{{ route('fire-fighter') }}">Fire Fighter</a></li>
            <li><a href="{{ route('police-station') }}">Police Station</a></li>
            <li><a href="{{ route('medical-facility') }}">Medical Facility</a></li>
        </ul>
        </p>
    </li>
    <li>
        <strong>About:</strong>
        <p>
            Hover over the <a href="{{ route('about') }}">About</a> link to reveal a dropdown menu with information
            about our organization.
        <ul>
            <li><a href="{{ route('mission-statement') }}">Mission Statement</a></li>
            <li><a href="{{ route('terms-of-service') }}">Terms of Service</a></li>
            <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
        </ul>
        </p>
    </li>
    <li>
        <strong>Search:</strong>
        <p>
            In the navigation menu, you will find a search bar at the end.
        <form action="{{ route('search') }}" method="GET">
            <input type="text" name="query" placeholder="Search" />
            <input type="submit" value="Search" />
        </form>
        </p>
    </li>
</ol>

<p>Please keep in mind the following tips while navigating our website:</p>
<ul>
    <li>You can access different sections of the website by clicking on the corresponding links in the navigation menu.
    </li>
    <li>To explore specific topics within a section, hover over the parent link to reveal the dropdown menu and click on
        the desired item.</li>
</ul>

<p>Thank you for using our website! We hope this user guide helps you navigate smoothly and find the information you
    need.</p>
@endsection