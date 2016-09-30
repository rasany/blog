@extends('layouts.app')

@section('content')
  <h4 class="page-header">새 글 쓰기</h4>

<form method="post" action="{{ route('posts.store')}}">
  {!! csrf_field() !!}  {{--hidden inputbox--}}

  @include('posts.partial.form')

  <div class="form-group text-center">
    <button type="submit" class="btn btn-primary">Post</button>
  </div>
</form>
@endsection
