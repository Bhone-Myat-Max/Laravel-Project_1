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


    <div class="container">
        <div class="card">
            <div class="card-header">
                Edit Products
            </div>
            <div class="card-body">
                <form action="{{ route('products.update', [$product->id]) }}" method="POST">
                    @csrf
                    <label for="" class="mb-2">Products</label><br>
                    <input type="text" placeholder="Enter Products..." name="name"
                        value="{{ $product->name }}"><br>
                    <label for="" class="mb-2">Price</label><br>
                    <input type="text" placeholder="Enter Price..." name="price" value="{{ $product->price }}">
                    Ks<br>
                    {{-- <textarea name="description"  placeholder="Enter Products..." value="{{$product->description}}"></textarea><br> --}}
                    <label for="" class="mb-2">Description</label><br>
                    <input type="" name="description" value="{{ $product->description }}"><br><br>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-outline-primary btn-sm me-2">Update</button>
                        <a href="{{ route('product.index') }}" class="btn btn-outline-secondary btn-sm">Back</a>
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
