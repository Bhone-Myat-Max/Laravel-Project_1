<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- font-awsome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Bootstrap --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2 class="mt-4">Hello Products</h2><br>
        <a href="{{ route('products.create') }}" class="btn btn-outline-success btn-sm mb-4">+ Create</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="bg-dark text-white ">ID</th>
                    <th class="bg-dark text-white">NAME</th>
                    <th class="bg-dark text-white">PRICE</th>
                    <th class="bg-dark text-white">DESCRIPTION</th>
                    <th class="bg-dark text-white">ACTION</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($data as $products)
                    <tr>
                        <td>{{ $products['id'] }}</td>
                        <td>{{ $products['name'] }}</td>
                        <td>{{ $products['price'] }}</td>
                        <td>{{ $products['description'] }}</td>
                        <td class="d-flex">
                            <a href="{{ route('products.edit', ['id' => $products->id]) }}"
                                class="btn btn-outline-success btn-sm "><i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="{{ route('products.delete', ['id' => $products['id']]) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger btn-sm ms-3"><i class="fa-solid fa-trash-can"></i></button>

                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>



        {{-- @foreach ($data as $products)
            <p> {{ $products['id'] }}</p>
            <p> {{ $products['name'] }}</p>
            <p>{{ $products['price'] }} Ks</p>
            <p> {{ $products['description'] }}</p>

            <a href="{{ route('products.edit', ['id' => $products->id]) }}">Edit</a>
            <a href="{{ route('products.show', ['id' => $products->id]) }}">Show</a>
            <form action="{{ route('products.delete', ['id' => $products['id']]) }}" method="POST">
                @csrf
                <button type="delete">Delete</button>
            </form>
            <hr>
        @endforeach --}}



    </div>
</body>
{{-- Script --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>

</html>
