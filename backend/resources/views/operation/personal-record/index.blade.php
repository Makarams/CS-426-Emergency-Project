@extends('master.master')
@section('content')
<main>
    <div class="center-content-page">
        <div class="list-table-container">
            <div class="list-table-header displayFlex-row mb-2">
                <div><span class="title-styled">Personal Record</span></div>
                <div class="style-btn"><a href="/personal/create">Create</a></div>
            </div>
            <table class="table table-borderless list-table" style="width: 100%">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">First name</th>
                        <th scope="col">Last name</th>
                        <th scope="col">Occupation</th>
                        <th scope="col">Position</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Department</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $user)
                    <tr>
                        <td style="width: 5%">{{ $user['id'] }}</td>
                        <td style="width: 15%">{{ $user['first_name'] }}</td>
                        <td style="width: 15%">{{ $user['last_name'] }}</td>
                        <td style="width: 15%">{{ $user['occupation'] }}</td>
                        <td style="width: 15%">{{ $user['position'] }}</td>
                        <td style="width: 15%">{{ $user['phone_number'] }}</td>
                        <td style="width: 15%">{{ $user['department']['department_name'] ?? "UNASSIGNED" }}</td>
                        <td style="width: 15%">
                            <ul class="action-container">
                                <li><a href="/personal/register-form/{{ $user['id'] }}"><i class="bi bi-person-add"></i></a></li>
                                <li><a href="/personal/{{ $user['id'] }}/edit"><i class="bi bi-pencil-square text-primary-emphasis"></i></a></li>
                                <li>
                                    <form action="/personal/{{ $user['id'] }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-clear"><i class="bi bi-trash text-danger"></i></button>
                                    </form>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>
@stop
