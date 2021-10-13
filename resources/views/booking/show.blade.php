@extends('layouts.app') @section('content')
<div class="card">
    <div class="card-header">{{ $booking->applicant }}</div>

    <div class="card-body">
        <div class="form-group row">
          <label for="applicant" class="col-sm-2 col-form-label">Applicant</label>
          <div class="col-sm-10">
            <p>{{ $booking->applicant }}</p>
          </div>
        </div>

        <div class="form-group row">
          <label for="purpose" class="col-sm-2 col-form-label">Purpose</label>
          <div class="col-sm-10">
            <p>{{ $booking->purpose }}</p>
          </div>
        </div>

        <div class="form-group row">
          <label for="notes" class="col-sm-2 col-form-label">Notes</label>
          <div class="col-sm-10">
            <p>{{ $booking->notes }}</p>
          </div>
        </div>

        <div class="form-group row">
          <label for="participant_total" class="col-sm-2 col-form-label">Participant Total</label>
          <div class="col-sm-6">
            <p>{{ $booking->participant_total }}</p>
          </div>
        </div>

        <div class="form-group row">
          <label for="start_date" class="col-sm-2 col-form-label">Start At</label>
          <div class="col-sm-10">
            <p>{{ $booking->start_date->format('d/m/Y g:i A') }}</p>
          </div>
        </div>

        <div class="form-group row">
          <label for="end_date" class="col-sm-2 col-form-label">End At</label>
          <div class="col-sm-10">
            <p>{{ $booking->end_date->format('d/m/Y g:i A') }}</p>
          </div>
        </div>

        <div class="form-group row">
            <label for="room_id" class="col-sm-2 col-form-label">Room Name</label>
            <div class="col-sm-8">
              <p>{{ $booking->room->name }}</p>
            </div>
        </div>

        <div class="form-group row">
          <label for="booking_status_id" class="col-sm-2 col-form-label">Booking Status</label>
          <div class="col-sm-8">
            <p>{{ $booking->booking_status->name }}</p>
          </div>
        </div>

        <div class="d-flex justify-content-end">
            <a href="{{ url()->previous() }}" class="btn btn-link mr-2">Cancel</a>
            <a href="{{ route('booking.edit', $booking) }}" class="btn btn-primary">Edit</a>
        </div>
    </div>
</div>
@endsection
