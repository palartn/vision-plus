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
    <div class="container ">
 <div class="d-flex justify-content-between align-items-center mb-3 ">
<h1>Add New Body</h1>
<a onclick="history.back()" class="btn btn-primary px-5">Back</a>
 </div>
@if ($errors->any())
<div class="alert alert-danger" name="alert" id="alert">
    <ul>
        @foreach ($errors->all() as $error )
        <li>
            {{$error}}
        </li>
        @endforeach
    </ul>
  </div>
@endif

 <form action="{{route('order.store')}}" method="POST">
    @csrf
 <div class="mb-3">
     <label for="">Name</label>
     <input type="text" name="name" class="form-control" placeholder="Name">
 </div>
 <div class="mb-3">
     <label for="">Body</label>
     <textarea id="mytextarea" name="body" class="form-control" rows="5" placeholder="Body"></textarea>
 </div>
 <button class="btn btn-success px-5">Add New</button>
    </div>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.0.1/tinymce.min.js" integrity="sha512-WVGmm/5lH0QUFrXEtY8U9ypKFDqmJM3OIB9LlyMAoEOsq+xUs46jGkvSZXpQF7dlU24KRXDsUQhQVY+InRbncA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
<script>
    tinymce.init({
      selector: '#mytextarea',
      plugins:'code',

    });
  </script>

