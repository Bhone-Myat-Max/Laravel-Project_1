{{-- {{ dd($UserModel) }} --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>

    {{-- font-awsome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card">
            <form action="{{route('users.update', [$UserModel->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- @method('PUT') --}}
                <div class="card-header text-center">
                    <h1>Edit User Account</h1>
                </div>
                <div class="card-body shadow-2xl">
                    <label for="">Name</label><br>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        value="{{ $UserModel->name }}"><br>
                    @error('name')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="">Gender</label><br>
                    <input type="text" name="gender" class="form-control @error('gender') is-invalid @enderror"
                        value="{{ $UserModel->gender }}"><br>
                    @error('gender')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="">Email</label><br>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                        value="{{ $UserModel->email }}"><br>
                    @error('email')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="">Address</label><br>
                    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"
                        value="{{ $UserModel->address }}"><br>
                    @error('address')
                        <div class="invalid-feedback d-block">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="">Password</label><br>
                    <input type="text" name="password" class="form-control  @error('password') is-invalid @enderror"
                        value="{{ $UserModel->password }}"><br>
                    @error('password')
                        <div class="invalid-feedback d-block">
                            <p class="text-danger">Enter Your Password and Password must contain at least 8 characters, 1
                                uppercase, 1 lowercase, 1 number, and 1 symbol.</p>
                        </div>
                    @enderror

                    <label for="image">Image</label><br>
                    <img src="{{ asset('UserImages/' . $UserModel->image) }}" alt="{{ $UserModel->image }} "  class="w-25 h-auto"><br>

                    <label for="">Status</label><br>
                    <input type="checkbox" name="status" role="switch" value="{{ $UserModel->status }}" {{$UserModel->status==1 ? 'checked' : ""}}>


                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm me-3">Submit</button>
                    <a href="{{ route('users.list') }}" class="btn btn-outline-secondary btn-sm">Back</a>
                </div>
            </form>
        </div>
    </div>
</body>

{{-- Script --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>

</html>
