@extends('layouts.panel')
@section('title','Dashboard')
@section('content')
<h1><b>Bienvenido</b> {{ auth()->user()->name }} {{ auth()->user()->phone }}</h1> 
<h2>Cambios proximamente</h2>
@endsection
