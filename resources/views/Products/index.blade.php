<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        strong{
            font-size: 16px;

        }
    </style>
</head>

<body>
    <div>

        <H1>Hello Products</H1>
        <a href="{{route('products.create')}}">Create</a>
        @foreach ($data as $products)
            <p><strong>ProductID:</strong> {{$products['id']}}</p>
            <p><strong>name:</strong> {{$products['name']}}</p>
            <p><strong>Price:</strong> {{$products['price']}}</p>
            <p><strong>Description:</strong> {{$products['description']}}</p>
            <a href="{{route('products.edit', ['id'=>$products->id])}}">Edit</a>
            {{-- <a href="{{route('products.show', ['id'=>$products->id])}}">Show</a> --}}
        @endforeach

    </div>
</body>

</html>
