@extends('layouts.panel')
@section('title','Dashboard')
@section('content')
<h1><b>Bienvenido</b> {{ auth()->user()->name }}</h1> 
@endsection
