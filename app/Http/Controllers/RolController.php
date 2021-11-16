<?php

namespace App\Http\Controllers;
use App\Models\Rol;

use Illuminate\Http\Request;

class RolController extends Controller
{

    public function index(){
        // $rols = Rol::all();
        $rols = Rol::paginate(5);
        return view('rol.index', compact('rols'));
    }

    //
    public function create(){
        return view('rol.create');
    }

    public function store(Request $request){
        Rol::create($request->all());
        
        return redirect()->route('rols.index')->with('success', 'Rol creado correctamente');
    }

    public function show(Rol $rol){
        // $rol = Rol::findOrFail($id_rol);
        // dd($rol);
        return view('rol.show', compact('rol'));
    }

    public function edit(Rol $rol){
        return view('rol.edit', compact('rol'));
    }

    public function update(Request $request, $id_rol){
        $rol = Rol::findOrFail($id_rol);
        $data = $request->only('tipo_rol', 'detalle_rol');

        $data = $request->all();

        $rol->update($data);
        return redirect()->route('rols.index')->with('success','Rol actualizado correctamente');

    }
}
