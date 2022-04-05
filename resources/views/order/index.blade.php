<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('boot_files/css/bootstrap.css') }}" rel="stylesheet">
    <script src="{{ asset('boot_files/js/bootstrap.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <script src="{{ asset('boot_files/js/jquery.min.js') }}"></script>

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
         <th scope="row">{{ $order->id }}</th>
         <td>{{ $order->name }}</td>
         <td>{!! $order->order_body !!}</td>
         <td>{{ $order->created_at }}</td>
         <td><a href=""><i class="fa-solid fa-pen-to-square btn btn btn-primary btn-md"></i></a></a>

        <form class="d-inline" action="{{ route('order.destroy',$order->id) }}" method="POST" >
@csrf
@method('delete')
<button class="fa-solid fa-trash-can btn btn-primary btn-md btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip"></button>  </td>

        </form>
       </tr>
       @endforeach

        </tbody>
      </table>
      {{ $orders->links() }}

    </div>

    @include('sweetalert::alert')

<script>


</script>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">

     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `هل أنت متأكد?`,
              text: "سيتم حذف الملف نهائياً.",
              icon: "error",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });

</script>
</html>
