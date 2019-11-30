@extends('layout')

@section('content')
	<form action="{{url('create_post')}}" method="POST">
		{{csrf_field()}}
	  <div class="form-group">
	    <label for="name">Name (if desired, leave otherwise)</label>
	    <input type="text" class="form-control" id="name" placeholder="Full Name" name="fullname">
	  </div>
	  <div class="form-group">
	    <label for="name">Description</label>
	    <textarea rows="10" cols="50" class="form-control" id="qmessage" placeholder="Place in your confession" name="description">
	    </textarea>
	  </div>
  	<button type="submit" class="btn btn-danger">Submit</button>
</form>
@endsection