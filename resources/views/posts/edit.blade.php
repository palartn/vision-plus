@extends('layouts.admin')
@section('content')

{{-- <form action="{{ url('post') }}" method="post"> --}}
<form action="{{ route('post.update',$post->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" class="form-control" name="name" value="{{ $post->name }}" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Body</label>
      <textarea class="form-control" name="body">{{ $post->body }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
