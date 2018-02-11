@extends('layout')



@section('content')

<form method="GET" action="/login">
	<input type="submit" value="Login">
</form>

<form method="GET" action="/register">
	<input type="submit" value="Register">
</form>

@endsection