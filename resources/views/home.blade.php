@extends('layout')



@section('content')

<p>Wellcome user {{ Auth::user()->name }}</p>

<form method="POST" action="/links">
 {{ csrf_field() }}

  

  <p>Insert e-mail adress:</p><br>
  <input type="text" name="adrese" ><br><br>

  <input type="submit" value="Submit">

</form> 


	@foreach($links as $link)
		<p><a target="_blank" href="https://{{ $link->adrese }}">{{ $link->adrese }}</a></p>
	@endforeach



@include('errors')



<form "POST" action="/logout">

<input type="submit" value="Logout">

</form>


@endsection