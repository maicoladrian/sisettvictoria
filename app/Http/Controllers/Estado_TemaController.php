<?php

namespace App\Http\Controllers;

use App\Models\Estado_Tema;
use Illuminate\Http\Request;

class Estado_TemaController extends Controller
{
    //

    public function create(){
        return view('estado_tema.create');
    }

    public function store(Request $request){
        Estado_Tema::create($request->all());
        
        return redirect()->route('estado_temas.index')->with('success', 'Estado tema creado correctamente');
    }

    public function index(){
        // $rols = Rol::all();
        $estado_temas = Estado_Tema::paginate(5);
        return view('estado_tema.index', compact('estado_temas'));
    }

    public function show(Estado_Tema $estado_tema){
        // $rol = Rol::findOrFail($id_rol);
        // dd($rol);
        return view('estado_tema.show', compact('estado_tema'));
    }
}
