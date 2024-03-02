@extends('master.master')

@section('content')
<h1>{{ $department->department_name }}</h1>

    <div class="department-details">
        <table>
            <!-- <tr>
                <th>Department ID</th>
                <td>{{ $department->department_id }}</td>
            </tr> -->
            <tr>
                <th>Department Name</th>
                <td>{{ $department->department_name }}</td>
            </tr>
            <tr>
                <th>Department Specialty</th>
                <td>{{ $department->department_specialty }}</td>
            </tr>
            <tr>
                <th>Department Type</th>
                <td>{{ $department->department_type }}</td>
            </tr>
            <!-- <tr>
                <th>Legend Symbol</th>
                <td>{{ $department->legend_symbol }}</td>
            </tr> -->
            <tr>
                <th>Location</th>
                <td>{{ $department->location->location_name }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{ $department->location->address }}</td>
            </tr>
            <tr>
                <th>Longitude</th>
                <td>{{ $department->location->position_longitude }}</td>
            </tr>
            <tr>
                <th>Latitude</th>
                <td>{{ $department->location->position_latitude }}</td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td>{{ $department->phone_number }}</td>
            </tr>
        </table>

        <h2>Personnel</h2>
        <table>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Occupation</th>
                    <th>Position</th>
                    <th>Phone Number</th>
                </tr>
            </thead>
            <tbody>
                @foreach($department->personalRecords as $personalRecord)
                    <tr>
                        <td>{{ $personalRecord->first_name }}</td>
                        <td>{{ $personalRecord->last_name }}</td>
                        <td>{{ $personalRecord->occupation }}</td>
                        <td>{{ $personalRecord->position}}</td>
                        <td>{{ $personalRecord->phone_number}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
