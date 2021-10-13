@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Bookings</div>

    <div class="card-body">

        <a href="{{ route('booking.create') }}" class="btn btn-primary"><i class="ti ti-plus mr-1"></i> Add</a>
    </div>
</div>
@endsection
