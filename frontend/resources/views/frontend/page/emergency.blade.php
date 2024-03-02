@extends('master.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">{{ $title }}</div> -->

                <div class="card-body">
                <h1 style="text-align: center; font-size: 16px;">Emergency Numbers:</h1>
                    <div class="row justify-content-center">
                        <div class="col-md-4 text-center">
                            <a href="#">
                                <img src="{{ asset('images/police.png') }}" alt="Police" width="50" height="50">
                            </a>
                            <p style="text-align: center">Police: 117</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <a href="#">
                                <img src="{{ asset('images/firestation.png') }}" alt="Police" width="50" height="50">
                            </a>
                            <p style="text-align: center">Fire: 118/666</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <a href="#">
                                <img src="{{ asset('images/ambulance.png') }}" alt="Police" width="50" height="50">
                            </a>
                            <p style="text-align: center">Ambulance: 119</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection