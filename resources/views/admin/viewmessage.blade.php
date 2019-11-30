@extends('layout')

@section('content')

<blockquote>
  <p>{{$quote->message}}</p>
  <footer>Posted by user: <cite title="Source Title">{{$quote->name}}</cite></footer>
</blockquote>

@endsection