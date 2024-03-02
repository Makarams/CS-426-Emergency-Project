@extends('master.master')
@section('content')
<main class="register-wrapper">
    <div class="profile-image">
        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80"
            width="100%" height="100%" />
    </div>
    <div class="form-content" style="margin-left:2rem;">
        <form class="row" action="/personal" method="post">
            @csrf
            <div class="col-md-12 mb-4"><span class="title-styled">Create New Personal Record</span></div>
            <div class="col-md-12 mb-4">
                <label for="Email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="col-md-6 mb-4">
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" placeholder="First Name" required>
            </div>
            <div class="col-md-6 mb-4">
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" placeholder="Last Name" required>
            </div>
            <div class="col-md-6 mb-4">
                <label for="phone_number">Phone Number</label>
                <input type="text" id="phone_number" name="phone_number" placeholder="Phone Number" required>
            </div>
            <div class="col-md-6 mb-4">
                <label for="occupation">Occupation</label>
                <input type="text" id="occupation" name="occupation" placeholder="Occupation" required>
            </div>
            <div class="col-md-6 mb-4">
                <label for="position">Position</label>
                <input type="text" id="position" name="position" placeholder="Position" required>
            </div>
            <div class="col-md-6 mb-4">
                <label for="date_of_birth">Date of Birth</label>
                <input type="date" id="date_of_birth" name="date_of_birth" class="custom-date-input" required>
            </div>
            <div
                class="col-md-12 mb-3 d-flex align-items-end justify-content-start">
                <button type="submit">Create</button>
            </div>
        </form>
    </div>
</main>
@stop