<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                + Create Category
            </div>
            <div class="card-body">
                <form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="name" class="mb-2">Category name:</label><br>

                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Category name" name="name" value="{{old('name')}}">
                     @error('name')
                        <div class="invalid-feedback d-block">
                            {{$message}}
                        </div>
                    @enderror

                    <div class="card-body">
                        <label for="image">Image</label><br>
                        <input type="file" name="image" id=""/>
                    </div>



                    <div class="card-footer">
                        <button type="submit" class="btn btn-outline-primary btn-sm me-2">Add</button>
                        <a href="{{route('categories.index')}}" class="btn btn-outline-secondary btn-sm">back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>
{{-- Script --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>
</html>
