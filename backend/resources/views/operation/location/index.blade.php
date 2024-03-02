@extends('master.master')
@section('content')
<main>
    <div class="center-content-page"></div>
        <div class="list-table-container">
            <div class="list-table-header displayFlex-row mb-2">
                <div><span class="title-styled">Location</span></div>
                <div class="style-btn"><a href="/location/create">Create</a></div>
            </div>
            <table class="table table-borderless list-table" style="width: 100%">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">longitude</th>
                        <th scope="col">latitude</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data['data'] as $item)
                    <tr>
                        <td style="width: 5%">{{ $item['id'] ?? "UNASSIGNED" }}</td>
                        <td style="width: 15%">{{ $item['location_name'] ?? "UNASSIGNED" }}</td>
                        <td style="width: 40%">{{ $item['address'] ?? "UNASSIGNED" }}</td>
                        <td style="width: 20%">{{ $item['position_longitude'] ?? "UNASSIGNED" }}</td>
                        <td style="width: 20%">{{ $item['position_latitude'] ?? "UNASSIGNED" }}</td>
                        <td style="width: 15%">
                            <ul class="action-container">
                                <li>
                                    <a href="/location/{{ $item['id'] }}/edit"><i class="bi bi-pencil-square text-primary-emphasis"></i></a>
                                </li>
                                <li>
                                    <form action="/location/{{ $item['id'] }}" method="POST">
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
