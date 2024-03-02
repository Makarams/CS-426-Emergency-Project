@extends('master.master')

@section('content')
<h1>Report: Road Traffic Incident</h1>
<p class="text" style="text-align: center;">If you have been involved in a road traffic incident in Cambodia, please
    provide the necessary details below:</p>
    <form action="{{ route('road-traffic-incident-reports.store') }}" method="post" class="form-container">
    @csrf
    <label for="reporter-name">Your Name:</label>
    <input type="text" id="reporter-name" name="reporter-name" required><br><br>

    <label for="reporter-contact">Your Contact Information:</label>
    <input type="text" id="reporter-contact" name="reporter-contact" required><br><br>

    <label for="incident-location">Incident Location:</label>
    <input type="text" id="incident-location" name="incident-location" required><br><br>

    <label for="incident-description">Incident Description:</label><br>
    <textarea id="incident-description" name="incident-description" rows="4" cols="50" required></textarea><br><br>

    <label for="emergency-assistance">Is immediate emergency assistance required?</label>
    <select id="emergency-assistance" name="emergency-assistance" required>
        <option value="">Select</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select><br><br>

    <label for="contact-reporter">Can authorities contact you for further information?</label>
    <select id="contact-reporter" name="contact-reporter" required>
        <option value="">Select</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select><br><br>

    <label for="consent">I confirm that the information provided is accurate:</label>
    <input type="checkbox" id="consent" name="consent" required><br><br>

    <input type="submit" value="Submit">
</form>
<br>

@endsection