@extends('master.master')

@section('content')
<div class="contact-container">
    <h1>Contact Information</h1>
    @foreach ($groupedDepartments as $locationName => $departmentGroup)
    <table style="margin-top: 1rem">
        <tr>
            <th colspan="2">
                <h2>{{ $locationName }}</h2>
            </th>
        </tr>
        @foreach ($departmentGroup->groupBy('department_type') as $departmentType => $departments)
        <tr>
            <th colspan="2" style="background-color: #ff9f1c; text-align: center; color: #0a0908;">
                <h3>{{ $departmentType }}</h3>
            </th>
        </tr>
        @foreach ($departments as $department)
        <tr>
            <td>{{ $department->department_name }}</td>
            <td>{{ $department->phone_number }}</td>
        </tr>

        @endforeach
        @endforeach
    </table>
    @endforeach

    <br>
</div>
@endsection