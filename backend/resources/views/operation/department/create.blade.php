@extends('master.master')
@section('content')
<main class="register-wrapper">
    <div class="form-content" style="margin-left:2rem;">
        <form class="row" action="/department" method="post">
            @csrf
            <div class="col-md-12 mb-4"><span class="title-styled">Create Department</span></div>
            <div class="col-md-12 mb-4">
                <label for="department_name">Department Name</label>
                <input type="text" id="department_name" name="department_name" placeholder="Department Name" required>
            </div>
            <div class="col-md-12 mb-4">
                <label for="department_specialty">Department Specialty</label>
                <input type="text" id="department_specialty" name="department_specialty" placeholder="Department Specialty" required>
            </div>
            <div class="col-md-6 mb-4">
                <label for="department_type">Department</label>
                <select name="department_type" id="department_type" required>
                    <option value="police">Police</option>
                    <option value="medical">Medical</option>
                    <option value="fire">Fire Station</option>
                </select>
            </div>
            <div class="col-md-6 mb-4">
                <label for="phone_number">Phone Number</label>
                <input type="text" id="phone_number" name="phone_number" placeholder="Phone Number" required>
            </div>
            <div
                class="col-md-12 mb-3 d-flex align-items-end justify-content-start">
                <button type="submit">Create</button>
            </div>
        </form>
    </div>
</main>
@stop