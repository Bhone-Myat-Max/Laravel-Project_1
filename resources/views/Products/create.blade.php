<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
{{-- Bootstrap --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<body>


    <div class="container">
        <div class="card">
            <div class="card-header">
                + Create Products
            </div>
            <div class="card-body">
                <form action="{{ route('products.add') }}" method="POST">
                    @csrf
                    <label for="name">Product</label><br>
                    <input type="text" placeholder="Enter Products..." name="name"><br>
                    <label for="name">Price</label><br>
                    <input type="text" placeholder="Enter Price..." name="price"><br>
                    {{-- <textarea name="description"  placeholder="Enter Products..." value="{{$product->description}}"></textarea><br> --}}
                    <label for="name">Description</label><br>
                    <input type="" name="description" placeholder="Enter Description..."><br><br>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-outline-primary btn-sm me-2">Add</button>
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
