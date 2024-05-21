@extends('layouts.main', ['title' => 'Examole Create'])
@section('content')
<p>address</p>
<div>
    <form method="POST" action="{{ route('address.districts') }}">
        @csrf
        <div class="mb-3">
            <label for="division" class="form-label">Division</label>
            <select name="division_id" id="division" class="form-control" onchange="this.form.submit()">
                <option value="">Select Division</option>
                @foreach($divisions as $division)
                    <option value="{{ $division->id }}">{{ $division->name }}</option>
                @endforeach
            </select>
        </div>
    </form>

    @isset($selectedDivision)
        <form method="POST" action="{{ route('address.thanas') }}">
            @csrf
            <div class="mb-3">
                <label for="district" class="form-label">District</label>
                <select name="district_id" id="district" class="form-control" onchange="this.form.submit()">
                    <option value="">Select District</option>
                    @foreach($selectedDivision->districts as $district)
                        <option value="{{ $district->id }}">{{ $district->name }}</option>
                    @endforeach
                </select>
            </div>
        </form>
    @endisset

    @isset($selectedDistrict)
        <form>
            <div class="mb-3">
                <label for="thana" class="form-label">Thana</label>
                <select name="thana_id" id="thana" class="form-control">
                    <option value="">Select Thana</option>
                    @foreach($selectedDistrict->thanas as $thana)
                        <option value="{{ $thana->id }}">{{ $thana->name }}</option>
                    @endforeach
                </select>
            </div>
        </form>
    @endisset
</div>
@endsection
@section('rightbar')
    <div class="d-flex">
        <a href="{{ url('examole') }}" class="nav-link border btn btn-info btn-hover w-100">Back</a>
    </div>
@endsection
