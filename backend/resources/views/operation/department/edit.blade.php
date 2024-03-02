@extends('master.master')
@section('content')
<main class="register-wrapper">
    <div class="form-content" style="margin-left:2rem;">
        <form class="row" action="/department/{{ $department['id'] ?? 'NULL' }}" method="post">
            @csrf
            @method('PATCH')
            <div class="col-md-12 mb-4"><span class="title-styled">Edit Department</span></div>
            <div class="col-md-12 mb-4">
                <label for="department_name">Department Name</label>
                <input type="text" id="department_name" name="department_name" value="{{ $department['department_name'] ?? UNASSIGNED }}" placeholder="Department Name" required>
            </div>
            <div class="col-md-12 mb-4">
                <label for="department_specialty">Department Specialty</label>
                <input type="text" id="department_specialty" name="department_specialty" value="{{ $department['department_specialty'] ?? UNASSIGNED }}" placeholder="Department Specialty" required>
            </div>
            <div class="col-md-6 mb-4">
                <label for="department_type">Department</label>
                <select name="department_type" id="department_type" required>
                    <option value="police" {{ $department['department_type'] == 'police' ? 'selected' : '' }} >Police</option>
                    <option value="medical" {{ $department['department_type'] == 'medical' ? 'selected' : '' }}>Medical</option>
                    <option value="fire" {{ $department['department_type'] == 'fire' ? 'selected' : '' }} >Fire Station</option>
                </select>
            </div>
            <div class="col-md-6 mb-4">
                <label for="phone_number">Phone Number</label>
                <input type="text" id="phone_number" name="phone_number" placeholder="Phone Number" value="{{ $department['phone_number'] ?? UNASSIGNED }}" required>
            </div>
            <div
                class="col-md-12 mb-3 d-flex align-items-end justify-content-start">
                <button type="submit">Update</button>
            </div>
        </form>
    </div>
</main>
@stop