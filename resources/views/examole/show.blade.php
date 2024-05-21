@extends('layouts.main', ['title' => 'Show Examole'])
@section('content')
    <h1 class="text-center mb-3">Show Examole</h1>
    <div class="row">
        <div class="col-3 border-bottom">Name</div>
        <div class="col-9 border-start border-bottom">{{ $examole->name }}</div>
    </div>
    <div class="row">
        <div class="col-3">Description</div>
        <div class="col-9 border-start">{{ $examole->description }}</div>
    </div>
    <div class="row mt-5 border-top">
        <div class="col-4">{{ $examole->is_active ? 'Active' : 'Inactive' }}</div>
        <div class="col-4">Create : {{ $examole->created_at }}</div>
        <div class="col-4">
            @if ($examole->updated_at)
                Update : {{ $examole->updated_at }}
            @else
                <a class="nav-link border btn btn-info btn-hover w-100" href="{{ url('examole/edit/' . $examole->id) }}">Update Now</a>
            @endif
        </div>
    </div>
    {{-- <a href="{{ route('examole.index') }}" class="btn btn-secondary">Back</a> --}}
    </div>
@endsection
@section('rightbar')
    <div class="d-flex">
        <a href="{{ url('examole') }}" class="nav-link border btn btn-info btn-hover w-100">Back</a>
    </div>
@endsection
