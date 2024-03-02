@extends('master.master')

@section('content')
<h1>Guidance: Frequently Asked Questions</h1>

<h2>General</h2>
<ul>
    <li>
        <h3>How can I report a crime?</h3>
        <p>To report a crime, click on the <a href="{{ route('report') }}">Report</a> link in the navigation menu and
            select the appropriate category from the dropdown menu.</p>
    </li>
    <li>
        <h3>Can I report multiple types of incidents?</h3>
        <p>Yes, you can report multiple types of incidents. Simply select each relevant category from the <a
                href="{{ route('report') }}">Report</a> dropdown menu.</p>
    </li>
    <li>
        <h3>Is my personal information kept confidential?</h3>
        <p>Yes, we prioritize the confidentiality of your personal information. Please refer to our <a
                href="{{ route('privacy-policy') }}">Privacy Policy</a> for more details on how we handle data.</p>
    </li>
</ul>

<h2>Guidance</h2>
<ul>
    <li>
        <h3>Where can I find safety tips?</h3>
        <p>You can find safety tips by clicking on the <a href="{{ route('guidance') }}">Guidance</a> link in the
            navigation menu and selecting "Safety Tips" from the dropdown menu.</p>
    </li>
    <li>
        <h3>Is legal advice available on this website?</h3>
        <p>Yes, you can access legal advice by clicking on the <a href="{{ route('guidance') }}">Guidance</a> link and
            selecting "Legal Advice" from the dropdown menu. However, please note that the advice provided is general in
            nature and may not substitute for professional legal counsel.</p>
    </li>
</ul>

<h2>Emergency</h2>
<ul>
    <li>
        <h3>What is the emergency hotline number?</h3>
        <p>The emergency hotline number is available by clicking on the <a href="{{ route('emergency') }}">Emergency</a>
            link in the navigation menu and selecting "Emergency Hotline" from the dropdown menu.</p>
    </li>
    <li>
        <h3>How do I request medical transport during an emergency?</h3>
        <p>To request medical transport during an emergency, click on the <a
                href="{{ route('emergency') }}">Emergency</a> link and select "Medical Transport" from the dropdown
            menu. Follow the provided instructions to request the necessary assistance.</p>
    </li>
</ul>

<h2>Contact</h2>
<ul>
    <li>
        <h3>Where can I find contact information for fire fighters?</h3>
        <p>Contact information for fire fighters is available by clicking on the <a
                href="{{ route('contact') }}">Contact</a> link in the navigation menu and selecting "Fire Fighter" from
            the dropdown menu.</p>
    </li>
    <li>
        <h3>How can I reach a nearby police station?</h3>
        <p>You can find the contact details of a nearby police station by clicking on the <a
                href="{{ route('contact') }}">Contact</a> link and selecting "Police Station" from the dropdown menu.
        </p>
    </li>
</ul>

@endsection