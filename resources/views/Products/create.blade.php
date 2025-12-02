<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('products.add')}}" method="POST">
        @csrf
        <input type="text" placeholder="Enter Products..." name="name"><br>
        <input type="text" placeholder="Enter Price..." name="price"><br>
        {{-- <textarea name="description"  placeholder="Enter Products..." value="{{$product->description}}"></textarea><br> --}}
        <input type="" name="description" placeholder="Enter Description..."><br>
        <button type="submit">Add</button>
        <a href="{{route('product.index')}}">Back</a>
    </form>
</body>
</html>
