@extends('master.master')
@section('content')
<main>
    <div class="center-content-page">
        <div class="list-table-container">
            <div class="list-table-header displayFlex-row mb-2">
                <div><span class="title-styled">Lost and found report</span></div>
                
            </div>
            <table class="table table-borderless list-table" style="width: 100%">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Property Type</th>
                        <th scope="col">Description</th>
                        <th scope="col">Location</th>
                        <th scope="col">Email</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data['data'] as $report)
                    <tr>
                        <td style="width: 5%">{{ $report['id'] ?? "NULL" }}</td>
                        <td style="width: 20%">{{ $report['property_type'] ?? "NULL" }}</td>
                        <td style="width: 25%">{{ $report['description'] ?? "NULL" }}</td>
                        <td style="width: 15%">{{ $report['location'] ?? "NULL" }}</td>
                        <td style="width: 15%">{{ $report['email'] ?? "NULL" }}</td>
                        <td style="width: 15%">{{ $report['date'] ?? "NULL" }}</td>
                        <td style="width: 12%">
                            <ul class="action-container">
                                <li>
                                    <form action="/lost-and-found-report/{{ $report['id'] ?? 'NULL' }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-clear"><i class="bi bi-card-checklist"></i></button>
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
