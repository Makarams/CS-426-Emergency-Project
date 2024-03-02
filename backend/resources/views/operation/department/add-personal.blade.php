@extends('master.master')
@section('content')
<main class="register-wrapper">
    <div class="form-content" style="margin-left:2rem;">
        <form class="row" action="/department/search-personal" method="post">
            @csrf
            <div class="col-md-12 mb-4"><span class="title-styled">ADD Personal</span></div>
            <div class="col-md-12 mb-4">
                <label for="personal_id">Personal ID</label>
                <input type="hidden" name="department_id" value="{{ $department_id ?? 'NULL' }}"> 
                <input type="text" id="personal_id" name="personal_id" placeholder="Personal ID" required>
            </div>
            <div
                class="col-md-12 mb-3 d-flex align-items-end justify-content-start">
                <button type="submit">Check</button>
            </div>
        </form>

        @if(!empty($personal) && isset($personal['id']))
            <form class="row" action="/department/add-personal/{{ $personal['id'] ?? 'NULL' }}" method="POST" style="margin-top: 2rem">
                @csrf
                @method('PATCH')
                <div class="col-md-12 mb-4">
                    <span class="title-styled" style="font-size: 2rem;">
                        [ID: {{ $personal['id'] }}] {{$personal['first_name'] ?? "NULL"}} {{$personal['last_name'] ?? "NULL"}}
                    </span>
                </div>
                <div class="col-md-12 mb-3 d-flex align-items-end justify-content-start">
                    <input type="hidden" name="department_id" value="{{ $department_id ?? 'NULL' }}">
                    <button type="submit">Add</button>
                </div>
            </form>
        @endif

    </div>
</main>
@stop