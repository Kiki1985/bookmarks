@extends('layout')



@section('content')

<h1>Register</h1>

<form method="POST" action="/register">
 {{ csrf_field() }}

  Name:<br>
  <input type="text" name="name" required><br><br>

  email:<br>
  <input type="text" name="email" required><br><br>

  password:<br>
  <input type="password" name="password" required><br><br>

  <input type="submit" value="Submit">

  @include('errors')

 </form>


@endsection