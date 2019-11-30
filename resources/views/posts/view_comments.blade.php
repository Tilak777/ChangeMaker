@extends('layout')

@section('content')

<br><br>

<a class="btn btn-success pull-right" href="{{url('create_post')}}" role="button">Create Post</a>


<br><br><br>

<div class="card">
  <div class="card-header">
    <strong>Post ID: {{$p->postuniquekey}}</strong>
  </div>
  <div class="card-body">
	 <blockquote>
	  <p>{{$p->description}}</p>
	  <footer>Posted by: <cite title="Source Title">{{$p->name}}</cite></footer>
	</blockquote>
	<br>
  </div>
</div>


<h3>Comments</h3>

<br>


@foreach($comments as $c)

<div class="card" style="background-color: grey; color: #fff">
  <div class="card-body">
    <p class="card-text">{{$c->comment}}</p>
  </div>
</div>

<br><br>

@endforeach


@endsection