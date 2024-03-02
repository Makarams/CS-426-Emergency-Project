@extends('master.master')
@section('content')
<main class="register-wrapper">
    <div class="profile-image">
        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80"
            width="100%" height="100%" />
    </div>
    <div class="form-content" style="margin-left:2rem;">
        <form class="row" action="{{ route('personal.register', ['id' => $id]) }}" method="POST">
            @csrf
            <div class="col-md-12 mb-4">
                <span class="title-styled">Create New Personal's Account</span>
            </div>
            <div class="col-md-12 mb-4">
                <input type="text" name="id" value="{{ $id }}" disabled hidden required>
                <input type="text" value="Soth Kimleng" disabled required>
            </div>
            <div class="col-md-12 mb-4">
                <label for="username">username</label>
                <input type="username" id="username" name="username" placeholder="username" required>
            </div>
            <div class="col-md-12 mb-4">
                <label for="password">password</label>
                <input type="text" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="col-md-12 mb-4">
                <label for="password_confirmation">confirm password</label>
                <input type="text" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
            </div>
            <div
                class="col-md-12 mb-3 d-flex align-items-end justify-content-start">
                <button type="submit">Create Account</button>
            </div>
        </form>
    </div>
</main>
@stop