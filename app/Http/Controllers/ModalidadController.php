<?php

namespace App\Http\Controllers;

use App\Models\Modalidad;
use Illuminate\Http\Request;

class ModalidadController extends Controller
{
    //

    public function create(){
        return view('modalidad.create');
    }

    public function store(Request $request){
        Modalidad::create($request->all());
        
        return redirect()->route('modalidades.index')->with('success', 'Modalidad creado correctamente');
    }

    public function index(){
        // $rols = Rol::all();
        $modalidades = Modalidad::paginate(5);
        return view('modalidad.index', compact('modalidades'));
    }

    public function show(Modalidad $modalidad){
        // $rol = Rol::findOrFail($id_rol);
        // dd($rol);
        return view('modalidad.show', compact('modalidad'));
    }
}
