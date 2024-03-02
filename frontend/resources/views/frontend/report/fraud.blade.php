@extends('master.master')

@section('content')
<h1>Report: Fraud</h1>
<p class="text" style="text-align: center;">If you have encountered or have information about a fraud incident in
    Cambodia, please provide the necessary details below:</p>
    <form action="{{ route('fraud-reports.store') }}" method="post" class="form-container">
    @csrf
    <label for="name">Your Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Your Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="phone">Your Phone Number:</label>
    <input type="tel" id="phone" name="phone" required><br><br>

    <label for="location">Location of the Fraud Incident:</label>
    <input type="text" id="location" name="location" required><br><br>

    <label for="fraud-type">Type of Fraud:</label>
    <select id="fraud-type" name="fraud-type" required>
        <option value="">Select</option>
        <option value="identity-theft">Identity Theft</option>
        <option value="online-scam">Online Scam</option>
        <option value="investment-fraud">Investment Fraud</option>
        <option value="credit-card-fraud">Credit Card Fraud</option>
        <option value="insurance-fraud">Insurance Fraud</option>
        <option value="employment-fraud">Employment Fraud</option>
        <option value="other">Other</option>
    </select><br><br>

    <label for="description">Description of the Fraud Incident:</label><br>
    <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

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