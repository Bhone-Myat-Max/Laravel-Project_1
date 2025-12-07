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
    {{-- {{dd($categories->all())}} --}}

    <div class="container">
        <div class="card">
            <div class="card-header">
                Edit Products
            </div>
            <div class="card-body">
                {{-- form --}}
                <form action="{{ route('products.update', [$product->id]) }}" method="POST">
                    @csrf
                    <label for="" class="mb-2">Products</label><br>
                    <input type="text" placeholder="Enter Products..." name="name"value="{{ $product->name }}"
                        class="form-control"><br>
                    @error('name')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="" class="mb-2">Price</label><br>
                    <input type="text" class="form-control"  placeholder="Enter Price..." name="price" value="{{ $product->price }}">
                    <br>

                    @error('price')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror
                    {{-- <textarea name="description"  placeholder="Enter Products..." value="{{$product->description}}"></textarea><br> --}}
                    <label for="" class="mb-2">Description</label><br>
                    <input type="" name="description" class="form-control" value="{{ $product->description }}"><br><br>
                    @error('description')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="" class="mb-2">Image</label><br>
                    <img src="{{ asset('ProductImages/'.$product->image) }}" class="w-25 h-auto"><br><br>
                    @error('image')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror


                    <label for="" class="mb-2">Category</label><br>

                    <select name="category_id" id="">
                        @foreach ($categories as $cat)
                            <option value="{{$cat->id}}" {{$cat->id == $product->category_id ? 'selected': ''}}>{{$cat->name}}</option>
                        @endforeach
                    </select><br>

                    <label for="status">Active Or Expired</label>br
                    <input type="checkbox" name="status" role="switch" value="{{$product->status}}" {{ $product->status == 1 ? 'checked' :"" }} >
                        {{-- button --}}
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm me-2">Update</button>
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
