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
    <div class="container">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Body</th>
            <th scope="col">Created At</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($orders as $order )

          <tr>
            <th scope="row">1</th>
            <td>{{ $order->id }}</td>
            <td>{{ $order->name }}</td>
            <td>{{ $order->created_at }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $orders->links() }}

    </div>

</body>

</html>
