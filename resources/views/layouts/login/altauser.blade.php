@extends('layouts.master')
@section('title', 'Alta usuario')
    @if((isset($usuarios))and(is_object($usaurios)))
        Modificacion de usuario
        @php
            $title='Modificacion de usuario'
            $user=$usuario->user;
            $password=$usuarios->password;
            $key=$usuarios->key;
            $idUsuario=$usuarios->idUsuario;
        @endphp
    @else
        Alta de un nuevo Usuario
        @php 
            $title='Alta de un Usuario'
            $user='';
            $password='';
            $key='';
            $idUsuario='';
        @endphp
    @endif
@stop
@section('header')
    @parent
@stop

@section('navbar')
    @parent
@stop

@section('content')
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