<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Informacion_Personal;
use App\Models\Rol;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class UsuarioController extends Controller
{
    //
    public function index(){
        // $rols = Rol::all();
        // $usuarios = Usuario::paginate(5);

        $usuarios = Usuario::join('informacion_personal','usuario.usuario_id_informacion_personal','=','informacion_personal.id_informacion_personal')
            ->join('rol','usuario.usuario_id_rol','=','rol.id_rol')
            ->select('usuario.id_usuario','usuario.usuario','informacion_personal.ap_paterno','informacion_personal.ap_materno','informacion_personal.nombres','informacion_personal.celular','informacion_personal.correo','rol.tipo_rol','usuario.created_at')
            ->paginate(5);

        return view('usuario.index', compact('usuarios'));
    }

    //
    public function create(){

        $roles = Rol::all();

        return view('usuario.create', compact('roles'));
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
            $usuario->password =  bcrypt($request->password) ;
            $usuario->usuario_id_informacion_personal = $informacion_personal->id_informacion_personal;
            $usuario->usuario_id_rol = $request->usuario_id_rol;
            $usuario->save();

            DB::commit();

            return redirect()->route('usuarios.index')->with('success', 'Usuario creado correctamente');

        } catch (\Exception $e){
            DB::rollBack();
        }
        
        
    }

    public function show($id_usuario){
        // $rol = Rol::findOrFail($id_rol);
        $usuario = Usuario::findOrFail($id_usuario)
        ->join('informacion_personal','usuario.usuario_id_informacion_personal','=','informacion_personal.id_informacion_personal')
        ->join('rol','usuario.usuario_id_rol','=','rol.id_rol')
        ->select('usuario.id_usuario','usuario.usuario','informacion_personal.ap_paterno','informacion_personal.ap_materno','informacion_personal.nombres','informacion_personal.celular','informacion_personal.correo','rol.tipo_rol','usuario.created_at')
        ->where('usuario.id_usuario', '=' , $id_usuario)
        ->get();
        // dd($rol);

        

        // $usuario = Usuario::join('informacion_personal','usuario.usuario_id_informacion_personal','=','informacion_personal.id_informacion_personal')
        //     ->join('rol','usuario.usuario_id_rol','=','rol.id_rol')
        //     ->select('usuario.id_usuario','usuario.usuario','informacion_personal.ap_paterno','informacion_personal.ap_materno','informacion_personal.nombres','informacion_personal.celular','informacion_personal.correo','rol.tipo_rol','usuario.created_at')
        //     ->where('usuario.id_usuario', '=' , $id_usuario)
        //     ->get();

        // dd($usuario);
        // dd($id_usuario);
        // echo $usuario;
        // echo $id_usuario;

        // return view('usuario.show', compact('usuario'));
        return view('usuario.show', compact('usuario'));

    }
}
