@extends('layouts.admin')
@section('content')

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Product</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach ($data as $item)
    
    
      
      <th scope="row">{{$item->user->id}}</th>
      <td>{{$item->user->name}}</td>
      <td> {{$item->name}}</td>
    </tr>
    @endforeach
    
     
  </tbody>
</table>




{{-- <form action="{{ url('post') }}" method="post"> --}}
<form action="{{route('one_to_many_submit')}}" method="post">
    @csrf
    <div class="container">
      <label for="exampleInputEmail1" class="form-label ">Name</label>
      <input type="text" class="form-control mb-3" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
      <label for="exampleInputEmail1" class="form-label ">price</label>
      <input type="text" class="form-control mb-3" name="price">
    <button type="submit" class="btn btn-success px-5">Add</button>
  </form>
@endsection
