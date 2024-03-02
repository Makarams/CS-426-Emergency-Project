@extends('master.master')

@section('content')
<h1>Report: Crime</h1>
<p class="text" style="text-align: center;">If you have witnessed or been a victim of a crime in Cambodia, please
    provide the necessary information below:</p>
<form action="{{ route('crime-reports.store') }}" method="post" class="form-container">
    @csrf
    <label for="name">Your Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Your Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="phone">Your Phone Number:</label>
    <input type="tel" id="phone" name="phone" required><br><br>

    <label for="crime-type">Type of Crime:</label>
    <select id="crime-type" name="crime-type" required>
        <option value="">Select</option>
        <option value="robbery">Robbery</option>
        <option value="assault">Assault</option>
        <option value="theft">Theft</option>
        <option value="fraud">Fraud</option>
        <option value="drug-related">Drug-related</option>
        <option value="other">Other</option>
    </select><br><br>

    <label for="description">Description of the Crime:</label><br>
    <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

    <label for="witness">Were there any witnesses?</label>
    <input type="checkbox" id="witness" name="witness" value="yes">
    <label for="witness">Yes</label>
    <input type="checkbox" id="witness" name="witness" value="no">
    <label for="witness">No</label><br><br>

    <label for="urgency">Is this an urgent matter?</label>
    <input type="checkbox" id="urgency" name="urgency" value="yes">
    <label for="urgency">Yes</label>
    <input type="checkbox" id="urgency" name="urgency" value="no">
    <label for="urgency">No</label><br><br>

    <input type="submit" value="Submit">
</form>

<br>
@endsection