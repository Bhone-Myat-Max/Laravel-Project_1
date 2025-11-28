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

        @foreach ($data as $category)
        <p>{{$category['id']}}:{{$category['name']}}</p>

        <a href="{{route('categories.show', ['id'=>$category->id])}}" >show</a>


        @endforeach
        {{-- @foreach ($category as $data)
        <p>{{$data['id']}}:{{$data['name']}}</p>

        @endforeach --}}
            {{-- @foreach ($articles as $data )
                <p>{{$data['id']}}:{{$data['name']}}</p>
            @endforeach --}}
    </div>
</body>

</html>
