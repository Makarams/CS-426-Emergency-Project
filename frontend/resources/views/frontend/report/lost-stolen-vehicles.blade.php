@extends('master.master')

@section('content')
<h1>Report: Lost/Stolen Vehicles</h1>
<p class="text" style="text-align: center;">If you have lost or had your vehicle stolen in Cambodia, please provide the
    necessary details below:</p>

<form action="#" method="post" onsubmit="submitForm(); return false;" class="form-container">
    <label for="name">Your Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Your Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="phone">Your Phone Number:</label>
    <input type="tel" id="phone" name="phone" required><br><br>

    <label for="vehicle-type">Type of Vehicle:</label>
    <input type="text" id="vehicle-type" name="vehicle-type" required><br><br>

    <label for="license-plate">License Plate Number:</label>
    <input type="text" id="license-plate" name="license-plate" required><br><br>

    <label for="color">Color of Vehicle:</label>
    <input type="text" id="color" name="color" required><br><br>

    <label for="description">Additional Description of the Vehicle:</label><br>
    <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

    <label for="location">Location where Vehicle was Lost or Stolen:</label>
    <input type="text" id="location" name="location" required><br><br>

    <label for="date">Date when Vehicle was Lost or Stolen:</label>
    <input type="date" id="date" name="date" required><br><br>

    <label for="contact-owner">Do you wish to be contacted if the vehicle is found?</label>
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