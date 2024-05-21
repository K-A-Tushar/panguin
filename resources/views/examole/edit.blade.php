@extends('layouts.main', ['title' => 'Edit Examole'])
@section('content')
    {{--  --}}
    <h1 class="text-center mb-3">Edit Examole</h1>
    <form method="POST" action="{{ route('examole.update', $examole->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $examole->name }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" required>{{ $examole->description }}</textarea>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1"
                {{ $examole->is_active ? 'checked' : '' }}>
            <label class="form-check-label" for="is_active">Active</label>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
@section('rightbar')
    <div class="d-flex">
        <a href="{{ url('examole') }}" class="nav-link border btn btn-info btn-hover w-100">Back</a>
    </div>
@endsection
