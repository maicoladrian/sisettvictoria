<?php

namespace App\Http\Controllers;

use App\Models\Acta_Perfil;
use App\Models\Docente;
use App\Models\Notificacion_Temporal;
use App\Models\Postulante;
use App\Models\Tema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class Acta_PerfilController extends Controller
{
    //

    public function index(){
        // $rols = Rol::all();
        // $usuarios = Usuario::paginate(5);

        $acta_perfiles = Acta_Perfil::join('postulante','acta_perfil.acta_perfil_id_postulante','=','postulante.id_postulante')
            ->join('usuario','postulante.postulante_id_usuario','=','usuario.id_usuario')
            ->join('informacion_personal','usuario.usuario_id_informacion_personal','=','informacion_personal.id_informacion_personal')
            ->select('acta_perfil.id_acta_perfil','acta_perfil.fecha_defensa_acta_perfil','acta_perfil.hora_defensa_acta_perfil','acta_perfil.calificacion','acta_perfil.escala','acta_perfil.observaciones','informacion_personal.ap_paterno','informacion_personal.ap_materno','informacion_personal.nombres','acta_perfil.created_at')
            ->paginate(5);

        return view('acta_perfil.index', compact('acta_perfiles'));
    }

    //
    public function create(){
        $docentes = Docente::join('usuario','docente.docente_id_usuario','=','usuario.id_usuario')
            ->join('informacion_personal','usuario.usuario_id_informacion_personal','=','informacion_personal.id_informacion_personal')
            ->join('tipo_docente','docente_id_tipo_docente','=','tipo_docente.id_tipo_docente')
            ->select('docente.*','tipo_docente.detalle_tipo_docente','informacion_personal.ap_paterno','informacion_personal.ap_materno','informacion_personal.nombres')
            ->get();
        $postulantes = Postulante::join('usuario','postulante.postulante_id_usuario','=','usuario.id_usuario')
            ->join('informacion_personal','usuario.usuario_id_informacion_personal','=','informacion_personal.id_informacion_personal')
            ->select('postulante.id_postulante','informacion_personal.ap_paterno','informacion_personal.ap_materno','informacion_personal.nombres')
            ->get();
        $temas = Tema::all();
        return view('acta_perfil.create', compact('docentes','postulantes','temas'));
    }

    public function store(Request $request){
        // Usuario::create($request->all());
        echo "store...";
        try{
            DB::beginTransaction();

            echo "Iniciando registro...";
            $acta_perfil = new Acta_Perfil();
            $acta_perfil->fecha_defensa_acta_perfil = $request->fecha_defensa_acta_perfil;
            $acta_perfil->hora_defensa_acta_perfil = $request->hora_defensa_acta_perfil;
            $acta_perfil->calificacion = $request->calificacion;
            $acta_perfil->escala = $request->escala;
            $acta_perfil->observaciones = $request->observaciones;
            $acta_perfil->acta_perfil_tribunal_1 = $request->acta_perfil_tribunal_1;
            $acta_perfil->acta_perfil_tribunal_2 = $request->acta_perfil_tribunal_2;
            $acta_perfil->acta_perfil_tribunal_fps = $request->acta_perfil_tribunal_fps;
            $acta_perfil->acta_perfil_tutor = $request->acta_perfil_tutor;
            $acta_perfil->acta_perfil_id_postulante = $request->acta_perfil_id_postulante;
            $acta_perfil->acta_perfil_id_tema = $request->acta_perfil_id_tema;
            $acta_perfil->save();
            echo "Registrado acta perfil";
            echo "Registrando notificaciones temporales...";

            $fecha_defensa = $request->fecha_defensa_acta_perfil;
            $fecha_defensa = Carbon::parse($fecha_defensa);
            // $fecha_defensa = $fecha_defensa->format('Y-m-d');

            for($i=1;$i<=3;$i++){

                $fecha_defensa = $fecha_defensa->addMonths(3);
                // nt = notificacion_temporal
                $nt = new Notificacion_Temporal();
                $nt->fecha_enviar = $fecha_defensa;
                $nt->nt_id_acta_perfil = $acta_perfil->id_acta_perfil;
                $nt->nt_id_tecnica_coaching = $i;
                $nt->save();
            }


            DB::commit();
            echo "Redireccionando...";
            return redirect()->route('acta_perfiles.index')->with('success', 'Acta de perfil creado correctamente');

        } catch (\Exception $e){
            echo "catch error... " . $e;
            DB::rollBack();
            
        }
        
        
    }

    public static function buscarActa($id_acta_perfil){
        echo nl2br("Entrando a buscarActa  ...\n");
        $acta_perfil = Acta_Perfil::join('postulante','acta_perfil.acta_perfil_id_postulante','=','postulante.id_postulante')
            ->join('usuario','postulante.postulante_id_usuario','=','usuario.id_usuario')
            ->join('informacion_personal','usuario.usuario_id_informacion_personal','=','informacion_personal.id_informacion_personal')
            ->select('acta_perfil.id_acta_perfil','acta_perfil.fecha_defensa_acta_perfil','acta_perfil.hora_defensa_acta_perfil','acta_perfil.calificacion','acta_perfil.escala','acta_perfil.observaciones','informacion_personal.ap_paterno','informacion_personal.ap_materno','informacion_personal.nombres','informacion_personal.correo','acta_perfil.created_at')
            ->where('acta_perfil.id_acta_perfil','=',$id_acta_perfil)
            ->get();
        echo nl2br("acta_perfil:".$acta_perfil."\n");
        return $acta_perfil;
    }

    public function show($id_acta_perfil){
        // $rol = Rol::findOrFail($id_rol);
        

    }
}
