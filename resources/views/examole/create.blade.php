@extends('layouts.main', ['title' => 'Examole Create'])
@section('content')
    <h4 class="text-center mb-3">Examole Create file</h4>
    <form method="POST" action="{{ url('examole') }}" class="rounded border p-3 ">
        @csrf
        <div class="mb-3 d-flex justify-content-between ">
            <label for="name" class="form-label w-25">Name</label>
            <input type="text" class="form-control w-75" id="name" name="name" required>
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <label for="description" class="form-label w-25">Description</label>
            <textarea class="form-control w-75" id="description" name="description" required></textarea>
        </div>
        <div class="ms-3 d-flex justify-content-between w-50">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1">
                <label class="form-check-label" for="is_active">Active</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
@section('rightbar')
    <div class="d-flex">
        <a href="{{ url('examole') }}" class="nav-link border btn btn-info btn-hover w-100">Back</a>
    </div>
@endsection
