@extends('master.master')
@section('content')
<main class="register-wrapper">
    <div class="form-content" style="margin-left:2rem;">
        <form class="row" action="/location/{{ $location['id'] ?? 'NULL' }}" method="post">
            @csrf
            @method('PATCH')
            <div class="col-md-12 mb-4"><span class="title-styled">Edit Location</span></div>
            <div class="col-md-12 mb-4">
                <label for="location_name">Location Name</label>
                <input type="text" id="location_name" name="location_name" value="{{ $location['location_name'] ?? UNASSIGNED }}" placeholder="Location Name" required>
            </div>
            <div class="col-md-12 mb-4">
                <label for="address">Location Address</label>
                <input type="text" id="address" name="address" value="{{ $location['address'] ?? UNASSIGNED }}" placeholder="Location Address" required>
            </div>
            <div class="col-md-6 mb-4">
                <label for="position_longitude">Longitude</label>
                <input type="text" id="position_longitude" name="position_longitude" value="{{ $location['position_longitude'] ?? UNASSIGNED }}" placeholder="Longitude" required>
            </div>
            <div class="col-md-6 mb-4">
                <label for="position_latitude">Latitude</label>
                <input type="text" id="position_latitude" name="position_latitude" value="{{ $location['position_latitude'] ?? UNASSIGNED }}" placeholder="Latitude" required>
            </div>
            <div
                class="col-md-12 mb-3 d-flex align-items-end justify-content-start">
                <button type="submit">UPDATE</button>
            </div>
        </form>
    </div>
</main>
@stop