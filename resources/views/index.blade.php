@extends('layout')

@section('content')

<h1>Bookmarks</h1>

<div style="float: left; margin-right: 10px">
	<form method="GET" action="/login">
		<input type="submit" value="Login">
	</form>
</div>

<div style="float: left">
	<form method="GET" action="/register">
		<input type="submit" value="Register">
	</form>
</div>

@endsection
