@extends('master.master')
@section('content')
<main class="register-wrapper">
    <div class="form-content" style="margin-left:2rem;">
        <form class="row" action="/location" method="post">
            @csrf
            <div class="col-md-12 mb-4"><span class="title-styled">Create Location</span></div>
            <div class="col-md-12 mb-4">
                <label for="location_name">Location Name</label>
                <input type="text" id="location_name" name="location_name" placeholder="Location Name" required>
            </div>
            <div class="col-md-12 mb-4">
                <label for="address">Location Address</label>
                <input type="text" id="address" name="address" placeholder="Location Address" required>
            </div>
            <div class="col-md-6 mb-4">
                <label for="position_longitude">Longitude</label>
                <input type="text" id="position_longitude" name="position_longitude" placeholder="Longitude" required>
            </div>
            <div class="col-md-6 mb-4">
                <label for="position_latitude">Latitude</label>
                <input type="text" id="position_latitude" name="position_latitude" placeholder="Latitude" required>
            </div>
            <div
                class="col-md-12 mb-3 d-flex align-items-end justify-content-start">
                <button type="submit">Create</button>
            </div>
        </form>
    </div>
</main>
@stop