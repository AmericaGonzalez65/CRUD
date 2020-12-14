@extends('layouts.master')
@section('title', 'Mostrar usuario')
@section('header')
    @parent
@stop

@section('navbar')
    @parent
@stop

@section('contenido')
    <div> <a href="{{action('PruebaControlador@create')}}"></a> Agregar nuevo registro <img src="/images/insercion.png" alt=""></div>
    <br>
    <table class="table table-hover table-dark">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Usuario</th>
                <th scope="col">Password</th>
                <th scope="col">Llave</th>
                <th scope="col">Actualizacion</th>
                <th scope="col">Borrar</th>
            </tr>    
        </thead>    
        <tbody>
        @foreach($usuarios as $user)
        <tr>
            <th scope="row">{{$user->idUsuario}}</th>
            <td>{{$user->user}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->key}}</td>
            <td><a href="{{action('PruebaControlador@create' ['id'=>$user->idUsuario])}}"></a></td>
            <td><img src="/images/actualizacion.png"></td>
            <td><img src="/images/eliminacion.png"></td>
        </tr>
        @endforeach
        </tbody>
    </table>
@stop

@section('footer')
    <img src="/images/sticker.jpeg" alt="" height="50" width="50"> <br>
    @parent
    Derechos reservados <br>
    AmericaGonzalez
@stop