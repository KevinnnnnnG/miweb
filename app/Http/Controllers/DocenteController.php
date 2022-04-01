<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doc = Docente::all();
        return view('docentes.index', compact('doc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $doc = new Docente();

        $doc->nombres = $request->input('nombres');
        $doc->apellidos = $request->input('apellidos');
        if ($request->hasFile('foto')){
            $doc->foto = $request->file('foto')->store('public');
        }
        $doc->titulo = $request->input('titulo');
        $doc->cursoAsociado = $request->input('cursoAsociado');
        $doc->save();
        return 'waw lo lograstes guardar';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doc = Docente::find($id);
        return view('docentes.show', compact('doc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doc = Docente::find($id);
        return view('docentes.edit', compact('doc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $doc = Docente::find($id);
        $doc->fill($request->except('foto'));
        if ($request->hasFile('foto')){
            $doc->foto = $request->file('foto')->store('public');
        }
        $doc->save();
        return 'Docente actualizado';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doc = Docente::find($id);
        $urlImagenBD = $doc->foto;
        $nombreImagen = str_replace('public/','\storage\\', $urlImagenBD);
        /* $rutaCompleta = public_path().$urlImagenBD;*/
        $rutaCompleta = public_path().$nombreImagen;
        unlink($rutaCompleta);
        $doc -> delete();
        return 'Eliminado';
    }
}
