<?php

namespace eventos\Http\Controllers;

use eventos\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario=new Usuario();
        $usuario->fill($request->all());
        $usuario->setAttribute("admin",0);
        $usuario->save();

        return redirect()->route('eventos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \eventos\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {

        return view('usuario.show')->withUsuario($usuario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \eventos\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        return view('usuario.edit')->withUsuario($usuario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \eventos\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        $usuario->fill($request->all())->save();
        return redirect()->route('usuarios.show')->withUsuario($usuario);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \eventos\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {

    }

    public function login(Request $request){

        return view('usuario.login');
    }

    public function logar(Request $request){
        $user = DB::table('usuarios')->where('login', $request->get("login"))->first();
        return view('usuario.show')->withUsuario($user);
    }
}
