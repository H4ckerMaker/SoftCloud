@extends('layouts.navfoot')
@section('title','Log-in')
@section('content')
<div>Log-In</div>
<form method="post" action="{{ route('login') }}">
    <input type="email" name="email" placeholder="Inserisci email">
    <input type="password" name="pass" placeholder="Inserisci password">
    <input type="submit" name="submitBtn" value="Log-In">
</form>
@endsection