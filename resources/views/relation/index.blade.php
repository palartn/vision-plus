@extends('layouts.admin')
@section('content')

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
