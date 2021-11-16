<?php

namespace App\Http\Controllers;

use App\Models\Tipo_Docente;
use Illuminate\Http\Request;

class Tipo_DocenteController extends Controller
{
    //

    public function create(){
        return view('tipo_docente.create');
    }

    public function store(Request $request){
        Tipo_Docente::create($request->all());
        
        return redirect()->route('tipo_docentes.index')->with('success', 'Tipo de Docente creado correctamente');
    }

    public function index(){
        // $rols = Rol::all();
        $tipo_docentes = Tipo_Docente::paginate(5);
        return view('tipo_docente.index', compact('tipo_docentes'));
    }

    public function show(Tipo_Docente $tipo_docente){
        // $rol = Rol::findOrFail($id_rol);
        // dd($rol);
        return view('tipo_docente.show', compact('tipo_docente'));
    }

    public function edit(Tipo_Docente $tipo_docente){
        return view('tipo_docente.edit', compact('tipo_docente'));
    }

    public function update(Request $request, $id_tipo_docente){
        $tipo_docente = Tipo_Docente::findOrFail($id_tipo_docente);
        $data = $request->only('detalle_tipo_docente');

        $data = $request->all();

        $tipo_docente->update($data);
        return redirect()->route('tipo_docentes.index')->with('success','Tipo de docente actualizado correctamente');

    }
}
