@extends('layouts.master')

@section('header')
<h1 align="center">FORMULARIO </h1>
@parent
@stop

@section('navbar')
@stop

@section('content')
<h2>No fue posible acceder, vuelve a intentarlo</h2>
<form action="{{action('App\Http\Controller\PruebasController@validarLogin')}}" method="post">
    {{csrf_field()}}
    <label for="user">Usuario</label>
    <input type="text" name="user">
    <br>
    <label for="password">Contraseña<label/>
    <input type="password" name="password">
    <br>
    <label for="key">Key</label>
    <input type="text" name="key">
    <br>
    <input type="submit" value="submit">
</form>
@stop

@section('footer')
<img src="/images/sticker.jpeg" alt="" height="50" width="50"> <br>
@parent
Derechos reservados <br>
AmericaGonzalez
@stop