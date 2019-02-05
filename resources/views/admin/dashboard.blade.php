@extends('admin.layout')
@section('content')


<h1>Hola {{ auth()->user()->name}} ¡Bienvenido!</h1>
<h2>¿Qué haremos el día de hoy?</h2>

@stop
