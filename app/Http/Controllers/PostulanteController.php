<?php

namespace App\Http\Controllers;

use App\Models\Informacion_Personal;
use App\Models\Postulante;
use App\Models\Rol;
use App\Models\Usuario;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class PostulanteController extends Controller
{
    //

    public function index(){
        // $rols = Rol::all();
        // $usuarios = Usuario::paginate(5);

        $postulantes = Postulante::join('usuario','postulante.postulante_id_usuario','=','usuario.id_usuario')
            ->join('informacion_personal','usuario.usuario_id_informacion_personal','=','informacion_personal.id_informacion_personal')
            ->join('rol','usuario.usuario_id_rol','=','rol.id_rol')
            ->select('postulante.id_postulante','usuario.usuario','informacion_personal.ap_paterno','informacion_personal.ap_materno','informacion_personal.nombres','informacion_personal.celular','informacion_personal.correo','rol.tipo_rol','postulante.created_at')
            ->paginate(5);

        return view('postulante.index', compact('postulantes'));
    }

    //
    public function create(){

        $roles = Rol::all();

        return view('postulante.create', compact('roles'));
    }

    public function store(Request $request){
        // Usuario::create($request->all());

        try{
            DB::beginTransaction();

            $informacion_personal = new Informacion_Personal();
            $informacion_personal->ap_paterno = $request->ap_paterno;
            $informacion_personal->ap_materno = $request->ap_materno;
            $informacion_personal->nombres = $request->nombres;
            $informacion_personal->celular = $request->celular;
            $informacion_personal->correo = $request->correo;
            $informacion_personal->save();

            
            $usuario = new Usuario();
            $usuario->usuario = $request->usuario;
            $usuario->password = $request->password;
            $usuario->usuario_id_informacion_personal = $informacion_personal->id_informacion_personal;
            $usuario->usuario_id_rol = $request->usuario_id_rol;
            $usuario->save();

            $postulante = new Postulante();
            $postulante->postulante_id_usuario = $usuario->id_usuario;
            $postulante->save();

            DB::commit();

            return redirect()->route('postulantes.index')->with('success', 'Postulante creado correctamente');

        } catch (\Exception $e){
            DB::rollBack();
        }
        
        
    }

    public function show($id_postulante){
        // $rol = Rol::findOrFail($id_rol);
        $postulante = Postulante::findOrFail($id_postulante)
        ->join('usuario','postulante.postulante_id_usuario','=','usuario.id_usuario')
        ->join('informacion_personal','usuario.usuario_id_informacion_personal','=','informacion_personal.id_informacion_personal')
        ->join('rol','usuario.usuario_id_rol','=','rol.id_rol')
        ->select('postulante.id_postulante','usuario.usuario','informacion_personal.ap_paterno','informacion_personal.ap_materno','informacion_personal.nombres','informacion_personal.celular','informacion_personal.correo','rol.tipo_rol','rol.detalle_rol','postulante.created_at')
        ->where('postulante.id_postulante', '=' , $id_postulante)
        ->get();
        // dd($postulante);

        return view('postulante.show', compact('postulante'))->with('postulante', json_decode($postulante, true));

    }
}
