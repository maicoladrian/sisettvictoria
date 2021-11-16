<?php

namespace App\Http\Controllers;

use App\Models\Notificacion_Temporal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Notificacion_TemporalController extends Controller
{
    //
    public function index(){
        // $rols = Rol::all();
        // $usuarios = Usuario::paginate(5);

        $notificaciones_temporal = Notificacion_Temporal::join('tecnica_coaching','notificacion_temporal.nt_id_tecnica_coaching','=','tecnica_coaching.id_tecnica_coaching')
            ->join('acta_perfil','notificacion_temporal.nt_id_acta_perfil','=','acta_perfil.id_acta_perfil')
            ->join('postulante','acta_perfil.acta_perfil_id_postulante','=','postulante.id_postulante')
            ->join('usuario','postulante.postulante_id_usuario','=','usuario.id_usuario')
            ->join('informacion_personal','usuario.usuario_id_informacion_personal','=','informacion_personal.id_informacion_personal')
            ->select('notificacion_temporal.id_notificacion_temporal','notificacion_temporal.fecha_enviar','notificacion_temporal.estado','tecnica_coaching.nombre_tecnica','tecnica_coaching.descripcion_tecnica','informacion_personal.ap_paterno','informacion_personal.ap_materno','informacion_personal.nombres','informacion_personal.correo','notificacion_temporal.created_at')
            ->paginate(5);

        return view('notificacion_temporal.index', compact('notificaciones_temporal'));
    }

    //
    public function create(){
        return view('notificacion_temporal.create');
    }

    public function store(Request $request){
        // Usuario::create($request->all());

        try{
            DB::beginTransaction();
            
            $notificacion = new Notificacion_Temporal();
            $notificacion->fecha_enviar = $request->fecha_enviar;
            $notificacion->nt_id_acta_perfil   = $request->nt_id_acta_perfil;
            $notificacion->nt_id_tecnica_coaching  = $request->nt_id_tecnica_coaching;
            $notificacion->save();

            DB::commit();
            echo "Guardado correctamente...";
            // return redirect()->route('notificaciones.index')->with('success', 'Notificacion creado correctamente');

        } catch (\Exception $e){
            DB::rollBack();
        }
        
        
    }

    public function show($id_notificacion_temporal){
        // $rol = Rol::findOrFail($id_rol);
        $notificacion_temporal = Notificacion_Temporal::findOrFail($id_notificacion_temporal)
        ->join('tecnica_coaching','notificacion_temporal.nt_id_tecnica_coaching','=','tecnica_coaching.id_tecnica_coaching')
        ->join('acta_perfil','notificacion_temporal.nt_id_acta_perfil','=','acta_perfil.id_acta_perfil')
        ->join('postulante','acta_perfil.acta_perfil_id_postulante','=','postulante.id_postulante')
        ->join('usuario','postulante.postulante_id_usuario','=','usuario.id_usuario')
        ->join('informacion_personal','usuario.usuario_id_informacion_personal','=','informacion_personal.id_informacion_personal')
        ->select('notificacion_temporal.id_notificacion_temporal','notificacion_temporal.fecha_enviar','notificacion_temporal.estado','tecnica_coaching.nombre_tecnica','tecnica_coaching.descripcion_tecnica','informacion_personal.ap_paterno','informacion_personal.ap_materno','informacion_personal.nombres','informacion_personal.correo','notificacion_temporal.created_at')
        ->where('notificacion_temporal.id_notificacion_temporal', '=' , $id_notificacion_temporal)
        ->get();
        // dd($rol);

        return view('notificacion_temporal.show', compact('notificacion_temporal'));
    }


    // public function edit(Rol $rol){
    //     return view('rol.edit', compact('rol'));
    // }

    public function update(Request $request){

        $nt = Notificacion_Temporal::findOrFail($request->id_notificacion_temporal);
        $nt->estado = '1';
        $nt->save();

        // $nt = Notificacion_Temporal::findOrFail($id_notificacion_temporal);
        // $data = $request->only('estado');

        // $data = $request->all();

        // $nt->update($data);
        // return redirect()->route('rols.index')->with('success','Rol actualizado correctamente');

    }
}
