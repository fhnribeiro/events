<?php

namespace eventos\Http\Controllers;

use eventos\Categoria;
use eventos\Evento;
use Illuminate\Http\Request;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::all();

        return view('evento.index')->withEventos($eventos);
    }

    public function home()
    {
        return view('layout.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('evento.create')->withCategorias($categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $evento = Evento::create($request->all());
        $evento->categoria()->associate($request->get("categoria"))->save();

        return redirect()->route('eventos.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \eventos\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        return view('evento.show')->withEvento($evento);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \eventos\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
        $categorias = Categoria::all();
        return view('evento.edit')->withCategorias($categorias)->withEvento($evento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \eventos\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        $evento->fill($request->all())->save();

        $evento->categoria()->associate($request->get("categoria"))->save();

        return redirect()->route('eventos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \eventos\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        //
    }
}
