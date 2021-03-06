@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Rooms</div>

    <div class="card-body">

        <div class="mb-3">
            <form action="{{ route('room.index') }}" method="GET">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ request()->query('name') }}">
                    </div>
                    <div class="col-md-6">
                        <label for="room_category_id">Room Category</label>
                        <select class="custom-select" id="room_category_id" name="room_category_id">
                            <option value="">Choose..</option>
                            @foreach ($room_categories as $room_category)
                            <option value="{{ $room_category->id }}"
                                {{ $room_category->id == request()->query('room_category_id') ? 'selected' : '' }}>
                                {{ $room_category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary"><i class="ti ti-search mr-1"></i> Search</button>
                <a href="{{ route('room.index') }}" class="btn btn-danger"><i class="ti ti-x mr-1"></i> Reset</a>
            </form>
        </div>

        <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Capacity</th>
                <th>Room Category</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($rooms as $room)
            <tr>
                <th>
                    {{ $loop->iteration + $rooms->firstItem() - 1 }}
                </th>
                <td>{{ $room->name }}</td>
                <td>{{ $room->capacity }}</td>
                <td>{{ $room->room_category->name }}</td>
                <td>
                    <form id="form-room-destroy-{{ $room->id }}" action="{{ route('room.destroy', $room) }}" method="POST">
                        @csrf
                        @method('delete')
                    </form>
                    @can ('edit_room')
                    <a class="btn btn-sm btn-link" href="{{ route('room.edit', $room) }}">Edit</a>
                    @endcan
                    @can ('delete_room')
                    <button type="submit" form="form-room-destroy-{{ $room->id }}" onclick="return confirm('Adakah anda pasti?')" class="btn btn-sm btn-link">Delete</button>
                    @endcan
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $rooms->links() }}

    @can ('create_room')
    <a href="{{ route('room.create') }}" class="btn btn-primary"><i class="ti ti-plus mr-1"></i> Add</a>
    @endcan

    </div>
</div>
@endsection
