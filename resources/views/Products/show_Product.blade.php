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
    <h1>Product Show</h1>
    <p><strong>Product_ID:</strong> {{$product['id']}}</p>
    <p><strong>Name: </strong> {{$product['name']}}</p>
    <p><strong>Price: </strong> {{$product['price']}}</p>
    <p><strong>Description: </strong> {{$product['description']}}</p>
    <a href="{{route('product.back')}}">Back</a>
</body>
</html>
