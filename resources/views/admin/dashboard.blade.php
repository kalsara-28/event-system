@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Admin Dashboard</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Bookings</h5>
                    <p class="card-text fs-4">120</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Upcoming Events</h5>
                    <p class="card-text fs-4">7</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">Registered Users</h5>
                    <p class="card-text fs-4">305</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
