<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('boot_files/css/bootstrap.css') }}" rel="stylesheet">
    <script src={{ asset('boot_files/js/bootstrap.js') }}></script>
</head>

<body>
    <form action="{{ route('site4form') }}" method="POST" enctype="multipart/form-data">
        <div class="container">
            <form>
                @csrf
                <div class="mb-3">
                    <ul>
                        {{-- @foreach ($errors->all() as $error)
                   <li class="alert alert-danger">{{ $error }}</li>
                   @endforeach --}}
                    </ul>
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input name="name" type="text" class="form-control" >
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control"  @error('password') is-invalid @enderror>
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                    <div class="mb-3">
                        <label for="file" class="form-label">file</label>
                        <input type="file" name="file" class="form-control"  @error('file') is-invalid @enderror>
                        @error('file')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </form>
    <script src="{{ asset('boot_files/js/jquery.js') }}"></script>


</body>

</html>
