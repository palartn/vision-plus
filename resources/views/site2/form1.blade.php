@extends('site2.master')
@section('content')
       <form action="{{route('form1')}}" method="POST">
        @csrf
    <input type="text" name="text">
    <input type="submit" value="submit">
    </form>

                    </div>
                </div>
            </div>
        </article>
@endsection
