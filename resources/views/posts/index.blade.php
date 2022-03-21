@extends('layouts.admin')
@section('content')
<a href="/post/create" class="btn btn-dark">Create</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($posts as $post)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $post->name }}</td>
            <td>{{ $post->body }}</td>

            <td>
                <a href="{{ route('post.edit',$post->id) }}" class="btn btn-info">Edit</a>

                <form method="post" action="{{ route('post.destroy',$post->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

            </td>
          </tr>
        @empty
<h1>No Posts yet</h1>
        @endforelse


    </tbody>
  </table>
@endsection
