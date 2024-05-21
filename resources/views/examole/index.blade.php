@extends('layouts.main', ['title' => 'Examole Table'])
@section('content')
    <table class="table table-hover table-bordered table-striped table-responsive ">
        <colgroup>
            <col style="width: 5%;">
            <col style="width: 25%;">
            <col style="width: 60%;">
            <col style="width: 5%;">
            <col style="width: 10%;">
        </colgroup>
        <thead class="text-center border-bottom border-3">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Active</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($examoles as $examole)
                <tr class="">
                    <td>{{ $examole->id }}</td>
                    <td>{{ $examole->name }}</td>
                    <td data-bs-toggle="collapse" href="#Deteils{{ $examole->id }}" role="button" aria-expanded="false"
                        aria-controls="Deteils{{ $examole->id }}">
                        {{ $examole->description }}</td>
                    <td>{{ $examole->is_active }}</td>
                    <td class="text-center">
                        @include('inc.actiondrop' , ['view' => url('examole', $examole->id), 'edit' => url('examole/edit', $examole->id), 'delete' => url('examole', $examole->id)])
                    </td>
                </tr>
                <tr class="collapse collapsing" id="Deteils{{ $examole->id }}">
                    <td colspan="6">Create Time : <i>{{ $examole->created_at }}</i> | Update Time :
                        <i>{{ $examole->updated_at }}</i>| Delete Status : {{ $examole->deleted_at }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $examoles->links() }}
    </div>
@endsection
@section('rightbar')
    <div class="d-flex">
        <a href="{{ url('examole/create') }}" class="nav-link border btn btn-info btn-hover w-100">Create</a>
    </div>
@endsection
