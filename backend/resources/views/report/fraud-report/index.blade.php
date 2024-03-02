@extends('master.master')
@section('content')
<main>
    <div class="center-content-page">
        <div class="list-table-container">
            <div class="list-table-header displayFlex-row mb-2">
                <div><span class="title-styled">Fraud Report</span></div>
                
            </div>
            <table class="table table-borderless list-table" style="width: 100%">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Crime Type</th>
                        <th scope="col">Description</th>
                        <th scope="col">Evidence</th>
                        <th scope="col">Name</th>
                        <th scope="col">email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data['data'] as $report)
                    <tr>
                        <td style="width: 5%">{{ $report['id'] ?? "NULL" }}</td>
                        <td style="width: 15%">{{ $report['fraud_type'] ?? "NULL" }}</td>
                        <td style="width: 20%">{{ $report['description'] ?? "NULL" }}</td>
                        <td style="width: 10%">{{ $report['evidence'] ?? "NULL" }}</td>
                        <td style="width: 13%">{{ $report['name'] ?? "NULL" }}</td>
                        <td style="width: 15%">{{ $report['email'] ?? "NULL" }}</td>
                        <td style="width: 15%">{{ $report['phone'] ?? "NULL" }}</td>
                        <td style="width: 12%">
                            <ul class="action-container">
                                <li>
                                    <form action="/fraud-report/{{ $report['id'] ?? 'NULL' }}" method="POST">
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
