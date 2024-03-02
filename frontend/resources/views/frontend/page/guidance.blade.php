@extends('master.master')

@section('content')
<div class="container" style="background-color: #d5d5d5;">
    <div class="guidance-row">
        <div class="guidance-col-md-4">
            <h2><a href="{{ route('user-guide') }}" class="guidance-a">User Guide</a></h2>
            <p class="guidance-p">Here you will find a comprehensive user guide to help you navigate our platform and
                utilize its features effectively.</p>
            <div class="video-container">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/buwz62Ns1x8"
                    title="A User's Guide to the Human Body" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
        <div class="guidance-col-md-4">
            <h2><a href="{{ route('faqs') }}" class="guidance-a">Frequently Asked Questions (FAQs)</a></h2>
            <p class="guidance-p">Get answers to common questions about our services, policies, and procedures in this
                FAQ section.</p>
            <div class="video-container">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Wby4qf8PU6g"
                    title="How to Write Impactful FAQs for Website? Frequently Asked Questions (FAQ) Writing Tutorial"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
        <div class="guidance-col-md-4">
            <h2><a href="{{ route('safety-tips') }}" class="guidance-a">Safety Tips</a></h2>
            <p class="guidance-p">Explore essential safety tips and guidelines to protect yourself and others from
                potential risks and hazards.</p>
            <div class="video-container">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/SUG2yAwRfJk"
                    title="Be Aware, Stay Safe" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="guidance-row">
        <div class="guidance-col-md-4">
            <h2><a href="{{ route('emergency-preparedness') }}" class="guidance-a">Emergency Preparedness</a></h2>
            <p class="guidance-p">Learn about emergency preparedness measures and steps to take in various emergency
                situations.</p>
            <div class="video-container">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/hhQqujnxmxk"
                    title="Emergency Preparedness | How Ready Are You, Really?"" frameborder=" 0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
        <div class="guidance-col-md-4">
            <h2><a href="{{ route('crime-prevention') }}" class="guidance-a">Crime Prevention</a></h2>
            <p class="guidance-p">Discover strategies and tips to prevent crime and maintain a safe environment for
                yourself and your community.</p>
            <div class="video-container">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/TN8Ymq-Kllc"
                    title="Crime Prevention - Legal Studies" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
        <div class="guidance-col-md-4">
            <h2><a href="{{ route('legal-advice') }}" class="guidance-a">Legal Advice</a></h2>
            <p class="guidance-p">Find valuable legal advice and information on relevant laws and regulations pertaining
                to our platform and services.</p>
            <div class="video-container">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/AuSyNXyItVI"
                    title="10 Most VALUABLE LEGAL ADVICE" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>

    </div>
</div>
@endsection