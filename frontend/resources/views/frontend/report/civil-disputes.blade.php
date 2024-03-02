@extends('master.master')

@section('content')
<h1>Report: Civil Disputes</h1>
<p class="text" style="text-align: center;">If you are experiencing a civil dispute in Cambodia and wish to report it,
    please provide the necessary information below:</p>

<form action="#" method="post" onsubmit="submitForm(); return false;" class="form-container">
    <label for="name">Your Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Your Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="phone">Your Phone Number:</label>
    <input type="tel" id="phone" name="phone" required><br><br>

    <label for="dispute">Nature of the Dispute:</label>
    <select id="dispute" name="dispute" required>
        <option value="">Select</option>
        <option value="property">Property Dispute</option>
        <option value="contract">Contract Dispute</option>
        <option value="family">Family Dispute</option>
        <option value="employment">Employment Dispute</option>
        <option value="other">Other</option>
    </select><br><br>

    <label for="description">Description of the Dispute:</label><br>
    <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

    <label for="consent">I confirm that the information provided is accurate:</label>
    <input type="checkbox" id="consent" name="consent" required><br><br>

    <input type="submit" value="Submit">
</form>
<br>
@endsection