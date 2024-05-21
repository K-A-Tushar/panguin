<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}| etc</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    @include('inc.navbar')
    <hr>
    <div class="container">

        {{-- <h2>{{ $title }}</h2> --}}
        <div class=" mb-2">
            <a class="nav-link border btn btn-info btn-hover" href="{{ url('council/add') }}">Create council <i
                    class="bi bi-plus"></i></a>
        </div>
        <table class="table table-striped table-hover table-bordered table-responsive w-70 mx-auto">
            <colgroup>
                <col width="40%">
                <col width="10%">
                <col width="30%">
                <col width="10%">
                <col width="10%">
                <col width="10%">
            </colgroup>
            <tr>
                <td>Title</td>
                <td>Member</td>
                <td>description</td>
                <td>is_completed</td>
                <td>action</td>
            </tr>

            {{-- @foreach ($councils as $council) --}}
            @forelse ($councils as $council)
                <tr data-bs-toggle="collapse" href="#council_{{ $council->id }}" role="button" aria-expanded="false"
                    aria-controls="{{ $council->id }}">
                    <td>{{ $council->position }}</td>
                    <td>{{ $council->of_person }}</td>
                    <td>{{ $council->description }}</td>
                    <td>{{ $council->is_completed }}</td>
                    <td class="d-flex justify-content-middle ">
                        <div class="collapse" id="council_{{ $council->id }}">
                            <a href="#" class="btn btn-sm btn-primary m-1"><i class="bi bi-eye"></i></a>
                            <a href="#" class="btn btn-sm btn-primary m-1"><i class="bi bi-pencil-square"></i></a>
                            <a href="#" class="btn btn-sm btn-primary m-1"><i class="bi bi-archive"></i></a>
                        </div>
                    </td>
                    {{-- <td><a href="{{ route('council.edit', $council->id) }}">Edit</a></td> --}}
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No councils found <i class="bi bi-emoji-frown"></td>
                </tr>
            @endforelse
            <tr>
                <td colspan="1" class="text-end">Total Member</td>

                <td colspan="5" class="text-start"><strong>{{ $councils->sum('of_person') }}</strong></td>
            </tr>
        </table>
    </div>
    {{--  --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
