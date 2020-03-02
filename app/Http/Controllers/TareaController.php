<?php

namespace App\Http\Controllers;

use App\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$tareas - 
        //$nombre = strtoupper($nombre);
        $tareas = Tarea::all();
        //dd($tareas);
        return view('tarea/tareaIndex', compact('tareas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //$nombre = strtoupper($nombre);

        return view('tarea.tareaForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //insertar en db
        //dd($request->all());
        //dd($request->input('Nombre'));
        //dd($request->Nombre);
        $tarea = new Tarea();
        $tarea->tarea = $request->tarea;
        $tarea->descripcion = $request->descripcion;
        $tarea->fecha_entrega = $request->fecha_entrega;
        $tarea->prioridad = $request->prioridad;
        $tarea->save();

        return redirect()->route('tarea.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function show(Tarea $tarea)
    {
        //
        //$tarea = consultar tarea where id =$tarea
        //dd($tarea);
        return view('tarea.tareaShow', compact('tarea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarea $tarea)
    {
        //
        return view('tarea.tareaForm' ,compact('tarea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarea $tarea)
    {
        //
        $tarea->tarea = $request->tarea;
        $tarea->descripcion = $request->descripcion;
        $tarea->fecha_entrega = $request->fecha_entrega;
        $tarea->prioridad = $request->prioridad;
        $tarea->save();

        return redirect()->route('tarea.show',$tarea->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarea $tarea)
    {
        //
        $tarea->delete();
        return redirect()->route('tarea.index');
    }
}
