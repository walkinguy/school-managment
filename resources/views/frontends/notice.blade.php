@extends('frontends.layout')
@section('content')

<div class="container">
<ul class="list-group my-5">
    <h1 class="lead pb-4">Published Notices</h1>
    @foreach ($notices as $notice)
<li class="list-group-item"><a href="{{asset('storage/'.$notice->file)}}"><i class="fa fa-circle"></i> {{$notice->title}}</a></li>
@endforeach
  </ul>
</div>

@endsection