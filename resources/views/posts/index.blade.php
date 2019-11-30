@extends('layout')

@section('content')

<br><br>

<a class="btn btn-success pull-right" href="{{url('create_post')}}" role="button">Create Post</a>


<br><br><br>



@foreach($posts as $p)
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
	<form action="{{url('post_comment/')}}/{{$p->id}}" method="POST">
	  {{csrf_field()}}
	  <div class="form-group">
	    <label for="name">Comment</label>
	    <textarea rows="5" cols="50" class="form-control" name="comment">
	    </textarea>
	  </div>
	  <a href="{{url('view_comments')}}/{{$p->id}}">{{count($p->comments)}} Comments</a>
  	<button type="submit" class="btn btn-danger pull-right">Comment</button>
	</form>
  </div>
</div>
<br><br><br>
@endforeach


@endsection