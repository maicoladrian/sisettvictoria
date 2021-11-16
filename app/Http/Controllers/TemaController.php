<?php

namespace App\Http\Controllers;

use App\Models\Tema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TemaController extends Controller
{
    //

    public function index(){
        // $rols = Rol::all();
        // $usuarios = Usuario::paginate(5);

        $temas = Tema::join('estado_tema','tema.tema_id_estado_tema','=','estado_tema.id_estado_tema')
            ->join('modalidad','tema.tema_id_modalidad','=','modalidad.id_modalidad')
            ->select('tema.id_tema','tema.titulo_tema','estado_tema.descripcion_estado_tema','modalidad.descripcion_modalidad','modalidad.plazo_modalidad','tema.created_at')
            ->orderBy('id_tema')
            ->paginate(5);

        return view('tema.index', compact('temas'));
    }

    //
    public function create(){
        return view('tema.create');
    }

    public function store(Request $request){
        // Usuario::create($request->all());

        try{
            DB::beginTransaction();

            $tema = new Tema();
            $tema->titulo_tema = $request->titulo_tema;
            $tema->tema_id_estado_tema = $request->tema_id_estado_tema;
            $tema->tema_id_modalidad = $request->tema_id_modalidad;
            $tema->save();

            DB::commit();

            return redirect()->route('temas.index')->with('success', 'Tema creado correctamente');

        } catch (\Exception $e){
            DB::rollBack();
        }
        
        
    }

    public function show($id_tema){
        // $rol = Rol::findOrFail($id_rol);
        $tema = Tema::findOrFail($id_tema)
        ->join('estado_tema','tema.tema_id_estado_tema','=','estado_tema.id_estado_tema')
        ->join('modalidad','tema.tema_id_modalidad','=','modalidad.id_modalidad')
        ->select('tema.id_tema','tema.titulo_tema','estado_tema.descripcion_estado_tema','modalidad.descripcion_modalidad','modalidad.plazo_modalidad','tema.created_at')
        ->where('tema.id_tema', '=' , $id_tema)
        ->get();
        // dd($tema);

        

        // return view('usuario.show', compact('usuario'));
        return view('tema.show', compact('tema'));

    }
}
