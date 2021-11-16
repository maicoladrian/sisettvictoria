<?php

namespace App\Http\Controllers;

use App\Models\Notificacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use Illuminate\Support\Carbon;

class NotificacionController extends Controller
{
    //

    public function index(){
        // $rols = Rol::all();
        // $usuarios = Usuario::paginate(5);

        $notificaciones = Notificacion::join('tecnica_coaching','notificacion.notificacion_id_tecnica_coaching','=','tecnica_coaching.id_tecnica_coaching')
            ->join('acta_perfil','notificacion.notificacion_id_acta_perfil','=','acta_perfil.id_acta_perfil')
            ->select('notificacion.id_notificacion','notificacion.fecha_hora_envio','tecnica_coaching.nombre_tecnica','tecnica_coaching.descripcion_tecnica','acta_perfil.fecha_defensa_acta_perfil','acta_perfil.hora_defensa_acta_perfil','notificacion.created_at')
            ->paginate(5);

        return view('notificacion.index', compact('notificaciones'));
    }

    //
    public function create(){
        return view('notificacion.create');
    }

    public function store(Request $request){
        // Usuario::create($request->all());

        try{
            DB::beginTransaction();
            
            $notificacion = new Notificacion();
            $notificacion->fecha_hora_envio = now();
            $notificacion->notificacion_id_tecnica_coaching  = $request->notificacion_id_tecnica_coaching;
            $notificacion->notificacion_id_acta_perfil   = $request->notificacion_id_acta_perfil ;
            $notificacion->save();

            DB::commit();

            return redirect()->route('notificaciones.index')->with('success', 'Notificacion creado correctamente');

        } catch (\Exception $e){
            DB::rollBack();
        }
        
        
    }

    public function show($id_notificacion){
        // $rol = Rol::findOrFail($id_rol);
        $notificacion = Notificacion::findOrFail($id_notificacion)
        ->join('tecnica_coaching','notificacion.notificacion_id_tecnica_coaching','=','tecnica_coaching.id_tecnica_coaching')
        ->join('acta_perfil','notificacion.notificacion_id_acta_perfil','=','acta_perfil.id_acta_perfil')
        ->select('notificacion.id_notificacion','notificacion.fecha_hora_envio','tecnica_coaching.nombre_tecnica','tecnica_coaching.descripcion_tecnica','acta_perfil.fecha_defensa_acta_perfil','acta_perfil.hora_defensa_acta_perfil','notificacion.created_at')
        ->where('notificacion.id_notificacion', '=' , $id_notificacion)
        ->get();
        // dd($rol);

        return view('notificacion.show', compact('notificacion'));
    }
}
