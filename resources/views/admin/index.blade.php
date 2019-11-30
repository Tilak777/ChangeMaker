@extends('layout')

@section('content')


<br><br>
<table class="table table-striped">
  <tr>
    <th style="font-size: 1.4em">Poster</th>
    <th style="font-size: 1.4em">Message</th> 
    <th style="font-size: 1.4em; text-align: center">Action</th>
  </tr>
  @foreach($quotes as $q)
  <tr>
    <td>{{$q->name}}</td>
    <td>{{$q->message}}</td>
    <td style="text-align: center">
    	<a class="btn btn-info" style="margin-left: 8px" href="viewmessage/{{$q->id}}" role="button">View Message</a>
    	<a class="btn btn-success" href="confirmquote/{{$q->id}}?q=1" role="button">Accept</a>
    	<a class="btn btn-danger" href="confirmquote/{{$q->id}}?q=0" role="button">Deny</a>
    </td>
  </tr>
  @endforeach
</table>
@endsection