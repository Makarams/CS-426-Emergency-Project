@extends('master.master')

@section('content')
<h1>Report: Environmental Concern</h1>

<p class="text" style="text-align: center;">If you have witnessed an environmental concern in Cambodia, please provide
    the necessary information below:</p>

<form action="#" method="post" onsubmit="submitForm(); return false;" class="form-container">
    <label for="name">Your Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Your Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="phone">Your Phone Number:</label>
    <input type="tel" id="phone" name="phone" required><br><br>

    <label for="location">Location of the Environmental Concern:</label>
    <input type="text" id="location" name="location" required><br><br>

    <label for="concern-type">Type of Environmental Concern:</label>
    <select id="concern-type" name="concern-type" required>
        <option value="">Select</option>
        <option value="pollution">Pollution</option>
        <option value="deforestation">Deforestation</option>
        <option value="wildlife-destruction">Wildlife Destruction</option>
        <option value="water-contamination">Water Contamination</option>
        <option value="air-pollution">Air Pollution</option>
        <option value="land-degradation">Land Degradation</option>
        <option value="waste-management">Waste Management</option>
        <option value="climate-change">Climate Change</option>
        <option value="other">Other</option>
    </select><br><br>

    <label for="description">Description of the Environmental Concern:</label><br>
    <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

    <label for="evidence">Evidence (if available):</label>
    <input type="file" id="evidence" name="evidence"><br><br>

    <label for="consent">I confirm that the information provided is accurate:</label>
    <input type="checkbox" id="consent" name="consent" required><br><br>

    <label for="report-anonymously">Report Anonymously:</label>
    <input type="checkbox" id="report-anonymously" name="report-anonymously"><br><br>

    <input type="submit" value="Submit">
</form>
<br>

@endsection