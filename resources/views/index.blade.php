<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>

        <H1>Hello Category</H1>
        <a href="{{route('categories.create')}}">Create</a>
        {{-- @foreach ($data as $products)
            <p>{{$products['id']}}:{{$products['name']}}:{{$products['price']}}</p>
            <a href="{{route('products.show', ['id'=>$products->id])}}">Show</a>
        @endforeach --}}

        @foreach ($data as $category)
        <p>{{$category['id']}}:{{$category['name']}}</p>

        <a href="{{route('categories.edit', ['id'=>$category->id])}}">Edit</a>

        @endforeach

    </div>
</body>

</html>
