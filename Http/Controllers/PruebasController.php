<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Suport\Facades\Hash;

class PruebasController extends Controller
{
    //

    public function index()
    {
        $usuarios = DB::table('usuarios')
            ->orderBy('user', 'asc')
            ->get();
        return view('login.showuser', ['usuarios'=>$usuarios]);
    }

    public function create(){
        return view('login.altauser');
    }

    public function save(Request $request)
    {
        $usuario = DB::table('usuarios')->insert([
            'user'=>$request->input('usuario'),
            'password'=>$request->input('clave'),
            'key'=>$request->input('llave')
        ]);
        return rediret()->action('PruebaControlador@index');
    }

    \Illuminate\Http\Request $request
    \Illuminate\Htpp\Response

    public function store(Request $request)
    {
            //
    }

    int $id
    \Illuminate\Http\Response

    public function show($id)
    {
        $usuarios = DB::table('usuarios')
            ->orderBy('user', 'asc')
            ->get();
            return view('login.showusers', ['usuarios=>$usuarios']);
    }



    public function login (){
        return view ('index')
    }

    public function validarLogin (Request $request){
        $user = $request->input ('user');
        $pass = $request->input('password');
        $key = Hash::make($request->input('key'));

        if ($user === 'AmericaGonzalez'){
            $url='login';
        } else {
            $url='error';
        }
        return view ($url, [
            'user'=>$request->input('user'),
            'key'=>$key
        ]);
}
