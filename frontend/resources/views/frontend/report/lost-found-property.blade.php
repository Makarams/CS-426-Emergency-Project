@extends('master.master')

@section('content')
<h1>Report: Lost and Found Property</h1>
<p class="text" style="text-align: center;">If you have lost or found any property in Cambodia, please provide the
    necessary details below:</p>

<form action="{{ route('lost-and-found-property-reports.store') }}" method="post" class="form-container">
    @csrf
    <label for="name">Your Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Your Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="phone">Your Phone Number:</label>
    <input type="tel" id="phone" name="phone" required><br><br>

    <label for="property-type">Type of Property:</label>
    <select id="property-type" name="property-type" required>
        <option value="">Select</option>
        <option value="lost">Lost</option>
        <option value="found">Found</option>
    </select><br><br>

    <label for="description">Description of the Property:</label><br>
    <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

    <label for="location">Location where Property was Lost or Found:</label>
    <input type="text" id="location" name="location" required><br><br>

    <label for="date">Date when Property was Lost or Found:</label>
    <input type="date" id="date" name="date" required><br><br>

    <label for="contact-owner">Do you wish to be contacted if the owner is found?</label>
    <select id="contact-owner" name="contact-owner" required>
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