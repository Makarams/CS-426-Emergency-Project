@extends('master.master')

@section('content')
<h1>Report: Missing Person</h1>
<p class="text" style="text-align: center;">If someone you know has gone missing in Cambodia, please provide the
    necessary details below:</p>

<form action="#" method="post" onsubmit="submitForm(); return false;" class="form-container">
    <label for="reporter-name">Your Name:</label>
    <input type="text" id="reporter-name" name="reporter-name" required><br><br>

    <label for="reporter-contact">Your Contact Information:</label>
    <input type="text" id="reporter-contact" name="reporter-contact" required><br><br>

    <label for="missing-person-name">Missing Person's Name:</label>
    <input type="text" id="missing-person-name" name="missing-person-name" required><br><br>

    <label for="relation-to-missing-person">Your Relation to the Missing Person:</label>
    <input type="text" id="relation-to-missing-person" name="relation-to-missing-person" required><br><br>

    <label for="missing-person-age">Missing Person's Age:</label>
    <input type="number" id="missing-person-age" name="missing-person-age" required><br><br>

    <label for="missing-person-gender">Missing Person's Gender:</label>
    <select id="missing-person-gender" name="missing-person-gender" required>
        <option value="">Select</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select><br><br>

    <label for="last-seen-location">Last Seen Location:</label>
    <input type="text" id="last-seen-location" name="last-seen-location" required><br><br>

    <label for="last-seen-date">Last Seen Date and Time:</label>
    <input type="datetime-local" id="last-seen-date" name="last-seen-date" required><br><br>

    <label for="circumstances">Circumstances of Disappearance:</label><br>
    <textarea id="circumstances" name="circumstances" rows="4" cols="50" required></textarea><br><br>

    <label for="photo">Upload a Photo of the Missing Person:</label>
    <input type="file" id="photo" name="photo" accept="image/*" required><br><br>

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