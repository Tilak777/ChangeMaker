@extends('layout')

@section('content')
	<form action="{{url('post_quote')}}" method="POST">
		{{csrf_field()}}
	  <div class="form-group">
	    <label for="name">Name</label>
	    <input type="text" class="form-control" id="name" placeholder="Full Name" name="fullname">
	  </div>
	  <div class="form-group">
	    <label for="name">Message</label>
	    <textarea rows="4" cols="50" class="form-control" id="qmessage" placeholder="Place in your quotes" name="quote">
	    </textarea>
	  </div>
  	<button type="submit" class="btn btn-danger">Save Quote</button>
</form>
@endsection