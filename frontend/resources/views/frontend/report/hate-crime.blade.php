@extends('master.master')

@section('content')
<h1>Report: Hate Crime</h1>
<p class="text" style="text-align: center;">If you have witnessed or have information about a hate crime incident in
    Cambodia, please provide the necessary details below:</p>

<form action="#" method="post" onsubmit="submitForm(); return false;" class="form-container">
    <label for="name">Your Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Your Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="phone">Your Phone Number:</label>
    <input type="tel" id="phone" name="phone" required><br><br>

    <label for="location">Location of the Hate Crime Incident:</label>
    <input type="text" id="location" name="location" required><br><br>

    <label for="hate-crime-type">Type of Hate Crime:</label>
    <select id="hate-crime-type" name="hate-crime-type" required>
        <option value="">Select</option>
        <option value="racial-hate-crime">Racial Hate Crime</option>
        <option value="religious-hate-crime">Religious Hate Crime</option>
        <option value="ethnic-hate-crime">Ethnic Hate Crime</option>
        <option value="homophobic-hate-crime">Homophobic Hate Crime</option>
        <option value="transphobic-hate-crime">Transphobic Hate Crime</option>
        <option value="disability-hate-crime">Disability Hate Crime</option>
        <option value="other">Other</option>
    </select><br><br>

    <label for="description">Description of the Hate Crime Incident:</label><br>
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