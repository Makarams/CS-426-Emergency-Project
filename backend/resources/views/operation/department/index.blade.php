@extends('master.master')
@section('content')
<main>
    <div class="center-content-page">
        <div class="list-table-container">
            <div class="list-table-header displayFlex-row mb-2">
                <div><span class="title-styled">General Department</span></div>
                <div class="style-btn"><a href="/department/create">Create</a></div>
            </div>
            <table class="table table-borderless list-table" style="width: 100%">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Specialty</th>
                        <th scope="col">Department Type</th>
                        <th scope="col">Location</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                    <tr>
                        <td style="width: 5%">{{ $item['id'] ?? "UNASSIGNED" }}</td>
                        <td style="width: 30%">{{ $item['department_name'] ?? "UNASSIGNED" }}</td>
                        <td style="width: 20%">{{ $item['department_specialty'] ?? "UNASSIGNED" }}</td>
                        <td style="width: 15%">{{ $item['department_type'] ?? "UNASSIGNED" }}</td>
                        <td style="width: 15%">{{ $item['location']['location_name'] ?? "UNASSIGNED" }}</td>
                        <td style="width: 15%">{{ $item['phone_number'] ?? "UNASSIGNED" }}</td>
                        <td style="width: 20%">
                            <ul class="action-container">
                                <!-- <li><a href="/department/{{ $item['id'] ?? 'NULL' }}/add-personal/"><i class="bi bi-person-add"></i></a></li> -->
                                <li>
                                    <a href="/department/{{ $item['id'] ?? 'NULL' }}/edit"><i class="bi bi-pencil-square text-primary-emphasis"></i></a>
                                </li>
                                <li>
                                    <form action="/department/{{ $item['id'] ?? 'NULL' }}" method="POST">
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
