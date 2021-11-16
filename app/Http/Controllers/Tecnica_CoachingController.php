<?php

namespace App\Http\Controllers;

use App\Models\Tecnica_Coaching;
use Illuminate\Http\Request;

class Tecnica_CoachingController extends Controller
{
    //

    public function create(){
        return view('tecnica_coaching.create');
    }

    public function store(Request $request){
        Tecnica_Coaching::create($request->all());
        
        return redirect()->route('tecnicas_coaching.index')->with('success', 'Tecnica coaching creado correctamente');
    }

    public function index(){
        // $rols = Rol::all();
        $tecnicas_coaching = Tecnica_Coaching::paginate(5);
        return view('tecnica_coaching.index', compact('tecnicas_coaching'));
    }

    public function show(Tecnica_Coaching $tecnica_coaching){
        // $rol = Rol::findOrFail($id_rol);
        // dd($rol);
        return view('tecnica_coaching.show', compact('tecnica_coaching'));
    }

    public static function buscarTecnicaCoaching($id_tecnica_coaching){
        // return 'tecnica_coaching';
        echo nl2br("Entrando a buscarTecnicaCoaching  ...\n");
        $tecnica = Tecnica_Coaching::select('tecnica_coaching.id_tecnica_coaching','tecnica_coaching.nombre_tecnica','tecnica_coaching.descripcion_tecnica')
            ->where('tecnica_coaching.id_tecnica_coaching','=',$id_tecnica_coaching)
            ->get();
        echo nl2br("acta_perfil:".$tecnica."\n");
        return $tecnica;
    }
}
