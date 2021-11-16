<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use App\Models\Usuario;
use App\Models\Informacion_Personal;
use App\Models\Rol;
use App\Models\Tipo_Docente;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class DocenteController extends Controller
{
    //

    public function index(){
        // $rols = Rol::all();
        // $usuarios = Usuario::paginate(5);

        $docentes = Docente::join('tipo_docente','docente.docente_id_tipo_docente','=','tipo_docente.id_tipo_docente')
            ->join('usuario','docente.docente_id_usuario','=','usuario.id_usuario')
            ->join('informacion_personal','usuario.usuario_id_informacion_personal','=','informacion_personal.id_informacion_personal')
            ->join('rol','usuario.usuario_id_rol','=','rol.id_rol')
            ->select('docente.id_docente','tipo_docente.detalle_tipo_docente','usuario.usuario','informacion_personal.ap_paterno','informacion_personal.ap_materno','informacion_personal.nombres','informacion_personal.celular','informacion_personal.correo','rol.tipo_rol','docente.created_at')
            ->paginate(5);

        return view('docente.index', compact('docentes'));
    }

    //
    public function create(){

        $roles = Rol::all();

        $tipo_docentes = Tipo_Docente::all();

        return view('docente.create', compact('roles','tipo_docentes'));
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
            $usuario->password = bcrypt($request->password);
            $usuario->usuario_id_informacion_personal = $informacion_personal->id_informacion_personal;
            $usuario->usuario_id_rol = $request->usuario_id_rol;
            $usuario->save();

            $docente = new Docente();
            $docente->docente_id_tipo_docente = $request->docente_id_tipo_docente;
            $docente->docente_id_usuario = $usuario->id_usuario;
            $docente->save();

            DB::commit();

            return redirect()->route('docentes.index')->with('success', 'Docente creado correctamente');

        } catch (\Exception $e){
            DB::rollBack();
        }
        
        
    }

    public function show($id_docente){
        // $rol = Rol::findOrFail($id_rol);
        $docente = Docente::findOrFail($id_docente)
        ->join('usuario','docente.docente_id_usuario','=','usuario.id_usuario')
        ->join('informacion_personal','usuario.usuario_id_informacion_personal','=','informacion_personal.id_informacion_personal')
        ->join('rol','usuario.usuario_id_rol','=','rol.id_rol')
        ->join('tipo_docente','docente.docente_id_tipo_docente','=','tipo_docente.id_tipo_docente')
        ->select('docente.id_docente','tipo_docente.detalle_tipo_docente','usuario.usuario','informacion_personal.ap_paterno','informacion_personal.ap_materno','informacion_personal.nombres','informacion_personal.celular','informacion_personal.correo','rol.tipo_rol','docente.created_at')
        ->where('docente.id_docente', '=' , $id_docente)
        ->get();
        // dd($rol);
        // return view('usuario.show', compact('usuario'));
        return view('docente.show', compact('docente'));

    }
}
