<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('boot_files/css/bootstrap.css') }}" rel="stylesheet">
    <script src={{ asset('boot_files/js/bootstrap.js') }}></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <a href="{{route('order.create')}}" class="btn btn-primary mt-5 px-5">Add New</a>
    <table class="table table-striped ">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Body</th>
            <th scope="col">Created At</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($orders as $order )

          <tr>
            <th scope="row">1</th>
            <td>{{ $order->id }}</td>
            <td>{{ $order->name }}</td>
            <td>{{ $order->created_at }}</td>
            <td><i class="fa-solid fa-pen-to-square btn btn btn-primary btn-md"></i>  <i class="fa-solid fa-trash-can btn btn-primary btn-md"></i></td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $orders->links() }}

    </div>

</body>

</html>
