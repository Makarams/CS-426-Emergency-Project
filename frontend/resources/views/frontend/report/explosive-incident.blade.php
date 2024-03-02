@extends('master.master')

@section('content')
<h1>Report: Explosive Incident</h1>

<p class="text" style="text-align: center;">If you have witnessed or have information about an explosive incident in
    Cambodia, please provide the necessary information below:</p>

<form action="#" method="post" onsubmit="submitForm(); return false;" class="form-container">
    <label for="name">Your Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Your Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="phone">Your Phone Number:</label>
    <input type="tel" id="phone" name="phone" required><br><br>

    <label for="location">Location of the Explosive Incident:</label>
    <input type="text" id="location" name="location" required><br><br>

    <label for="incident-type">Type of Explosive Incident:</label>
    <select id="incident-type" name="incident-type" required>
        <option value="">Select</option>
        <option value="bomb-threat">Bomb Threat</option>
        <option value="explosion">Explosion</option>
        <option value="suspicious-package">Suspicious Package</option>
        <option value="illegal-fireworks">Illegal Fireworks</option>
        <option value="terrorist-activity">Terrorist Activity</option>
        <option value="other">Other</option>
    </select><br><br>

    <label for="description">Description of the Explosive Incident:</label><br>
    <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

    <label for="evidence">Evidence (if available):</label>
    <input type="file" id="evidence" name="evidence"><br><br>

    <label for="emergency-services-contacted">Have you contacted the emergency services?</label>
    <select id="emergency-services-contacted" name="emergency-services-contacted" required>
        <option value="">Select</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select><br><br>

    <label for="consent">I confirm that the information provided is accurate:</label>
    <input type="checkbox" id="consent" name="consent" required><br><br>

    <label for="report-anonymously">Report Anonymously:</label>
    <input type="checkbox" id="report-anonymously" name="report-anonymously"><br><br>

    <input type="submit" value="Submit">
</form>
<br>

@endsection