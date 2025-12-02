<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('products.update',[$product->id])}}" method="POST">
        @csrf
        <input type="text" placeholder="Enter Products..." name="name" value="{{$product->name}}"><br>
        <input type="text" placeholder="Enter Price..." name="price" value="{{$product->price}}"><br>
        {{-- <textarea name="description"  placeholder="Enter Products..." value="{{$product->description}}"></textarea><br> --}}
        <input type="" name="description" value="{{$product->description}}"><br>
        <button type="submit">Update</button>
        <a href="{{route('product.index')}}">Back</a>
    </form>
</body>
</html>
