<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>{{ config('app.name') }}| etc</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    
    @include('inc.navbar')
    <hr>
    <div class="container">
        <h4>{{$title }}</h4>
        <div class="col-md-6 col-sm-12 col-lg-4 m-auto">

            <form action="{{ url('todo')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" name="description" id="description">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="is_completed" id="is_completed">
                    <label class="form-check-label" for="is_completed">Is completed</label>
                </div>
                <button type="submit" class="btn btn-primary m-auto w-100">Submit</button>
            </form>
        </div>
            
    </div>
        {{--  --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
