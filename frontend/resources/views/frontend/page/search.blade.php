@extends('master.master')

@section('content')
<h1>Search Results for: {{ $query }}</h1>

@if($results->isEmpty())
<p>No results found.</p>
@else
<ul>
    @foreach($results as $result)
<li>
    <a href="{{ route('department', ['id' => $result->id]) }}" style="font-size: 20px;">
        {{ $result->department_name }}
    </a>
</li>

    @endforeach
</ul>
<div style="padding-bottom: 150px;">
</div>

@endif
@endsection
