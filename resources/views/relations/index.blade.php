@extends('layouts.admin')
@section('content')
@foreach ($aa as $a11 )
{{ $a11->name }}

@endforeach
<form action="{{ route('one_to_many_submit') }}" method="post">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Body</label>
      <textarea class="form-control" name="price"></textarea>
    </div>

    <button type="submit" class="btn btn-success px-5">Submit</button>
  </form>
@endsection
