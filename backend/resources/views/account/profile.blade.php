@extends('master.master')
@section('content')
<section class="center-content-page">
    <div class="profile-wrapper">
        <div class="profile-image">
            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80" width="100%" height="100%"/>
        </div>
        <div class="form-content"  style="margin-left: 2rem;">
            <form class="row">
                <div class="col-md-12 mb-4"><span class="title-styled">{{ $user['first_name'] ?? "UNKNOWN" }} {{ $user['last_name'] ?? "UNKNOWN"}} [ ID:{{ $user['id'] ?? "UNKNOWN"}} ]</span></div>
                <div class="col-md-6 mb-3">
                    <label for="occupation">Occupation</label>
                    <input type="text" id="occupation" name="occupation" value='{{ $user["occupation"] ?? "" }}' disabled>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="occupation">Position</label>
                    <input type="text" id="occupation" name="occupation" value='{{ $user["position"] ?? "" }}' disabled>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="department">Department</label>
                    <input type="text" id="department" name="department" value='{{ $user["department"]["department_name"] ?? "" }}' disabled>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="occupation">Phone Number</label>
                    <input type="text" id="phone_number" name="phone_number" value='{{ $user["phone_number"] ?? "" }}' disabled>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="occupation">Date of Birth</label>
                    <input type="text" id="date_of_birth" name="date_of_birth" value='{{ $user["date_of_birth"] ?? "" }}' disabled>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" value='{{ $user["email"] ?? "" }}' disabled>
                </div>
            </form>
        </div>
    </div>
</section>
@stop