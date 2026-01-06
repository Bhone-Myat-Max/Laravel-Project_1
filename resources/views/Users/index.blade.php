<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- font-awsome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        /* td,
        th {
           width: 200px
        } */

        td img {
            width: 50px;
            height: 50px;
            object-fit: cover;
        }
    </style>
</head>

<body>

    {{-- {{dd($UserModel)}} --}}

    <div class="container-xxl ">
        <div class="table-responsive">
            <h2 class="my-5 text-center">Users</h2>
            <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm mb-3">+ Create</a>
            {{-- Table --}}
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th class="bg-dark text-white ">#</th>
                        <th class="bg-dark text-white">NAME</th>
                        <th class="bg-dark text-white">GENDER</th>
                        <th class="bg-dark text-white">EMAIL</th>
                        <th class="bg-dark text-white">ADDRESS</th>
                        {{-- <th class="bg-dark text-white">PASSWORD</th> --}}
                        <th class="bg-dark text-white">IMAGE</th>
                        <th class="bg-dark text-white">STATUS</th>
                        <th class="bg-dark text-white">ACTION</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($UserModel as $UserLists)
                        <tr class="">
                            <td>{{ $UserLists['id'] }}</td>
                            <td>{{ $UserLists['name'] }}</td>
                            <td>{{ $UserLists['gender'] }}</td>
                            <td>{{ $UserLists['email'] }}</td>
                            <td>{{ $UserLists['address'] }}</td>
                            <td>
                                @if ($UserLists->status == 1)
                                    <span class="text-success">Active</span>
                                @else
                                    <span class="text-danger">Inactive</span>
                                @endif
                            </td>

                            <td>
                                <img src="{{ asset('UserImages/' . $UserLists['image']) }}"
                                    alt="{{ $UserLists['image'] }}">
                            </td>

                            <td class="d-flex">
                                <a href="{{ route('users.edit', ['id' => $UserLists['id']]) }}"
                                    class="btn btn-success btn-sm me-2"><i class="fa-solid fa-pen-to-square"></i></a>
                                <form action="{{ route('users.delete', ['id' => $UserLists['id']]) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                            class="fa-solid fa-trash-can"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</body>
{{-- Script --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>

</html>
