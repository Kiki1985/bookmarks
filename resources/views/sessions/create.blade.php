@extends('layout')



@section('content')

<h1>Login</h1>

<form method="POST" action="/login">
 {{ csrf_field() }}

  Name:<br>
  <input type="text" name="name" required><br><br>

  password:<br>
  <input type="password" name="password" required><br><br>

  <input type="submit" value="Submit">

  

 </form>


@endsection