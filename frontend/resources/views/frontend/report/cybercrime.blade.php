@extends('master.master')

@section('content')

<h1>Report: Cybercrime</h1>
<p class="text" style="text-align: center;">If you have encountered a cybercrime incident in Cambodia, please provide
    the necessary information below:</p>

<form action="#" method="post" onsubmit="submitForm(); return false;" class="form-container">
    <label for="name">Your Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Your Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="phone">Your Phone Number:</label>
    <input type="tel" id="phone" name="phone" required><br><br>

    <label for="cybercrime-type">Type of Cybercrime:</label>
    <select id="cybercrime-type" name="cybercrime-type" required>
        <option value="">Select</option>
        <option value="identity-theft">Identity Theft</option>
        <option value="hacking">Hacking</option>
        <option value="online-fraud">Online Fraud</option>
        <option value="cyberbullying">Cyberbullying</option>
        <option value="phishing">Phishing</option>
        <option value="malware-attack">Malware Attack</option>
        <option value="data-breach">Data Breach</option>
        <option value="other">Other</option>
    </select><br><br>

    <label for="description">Description of the Incident:</label><br>
    <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

    <label for="evidence">Evidence (if available):</label>
    <input type="file" id="evidence" name="evidence"><br><br>

    <label for="consent">I confirm that the information provided is accurate:</label>
    <input type="checkbox" id="consent" name="consent" required><br><br>

    <label for="subscribe">Subscribe to receive updates on the report:</label>
    <input type="checkbox" id="subscribe" name="subscribe"><br><br>

    <input type="submit" value="Submit">
</form>
<br>

@endsection