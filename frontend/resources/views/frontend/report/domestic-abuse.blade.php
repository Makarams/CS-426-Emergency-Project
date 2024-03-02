@extends('master.master')

@section('content')
<h1>Report: Domestic Abuse</h1>
<p class="text" style="text-align: center;">If you or someone you know is experiencing domestic abuse in Cambodia,
    please provide the necessary information below:</p>

<form action="#" method="post" onsubmit="submitForm(); return false;" class="form-container">
    <label for="name">Your Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Your Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="phone">Your Phone Number:</label>
    <input type="tel" id="phone" name="phone" required><br><br>

    <label for="relationship">Relationship to the Victim:</label>
    <select id="relationship" name="relationship" required>
        <option value="">Select</option>
        <option value="spouse">Spouse</option>
        <option value="partner">Partner</option>
        <option value="family-member">Family Member</option>
        <option value="friend">Friend</option>
        <option value="neighbor">Neighbor</option>
        <option value="colleague">Colleague</option>
        <option value="other">Other</option>
    </select><br><br>

    <label for="abuse-type">Type of Abuse:</label>
    <select id="abuse-type" name="abuse-type" required>
        <option value="">Select</option>
        <option value="physical">Physical Abuse</option>
        <option value="verbal">Verbal Abuse</option>
        <option value="sexual">Sexual Abuse</option>
        <option value="emotional">Emotional Abuse</option>
        <option value="financial">Financial Abuse</option>
        <option value="digital">Digital Abuse</option>
        <option value="other">Other</option>
    </select><br><br>

    <label for="description">Description of the Abuse:</label><br>
    <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

    <label for="evidence">Evidence (if available):</label>
    <input type="file" id="evidence" name="evidence"><br><br>

    <label for="consent">I confirm that the information provided is accurate:</label>
    <input type="checkbox" id="consent" name="consent" required><br><br>

    <label for="support">Do you require immediate support?</label>
    <input type="checkbox" id="support" name="support"><br><br>

    <input type="submit" value="Submit">
</form>
<br>

@endsection