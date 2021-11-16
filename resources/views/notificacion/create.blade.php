@extends('layouts.main', ['activePage' =>'notificaciones', 'titlePage' =>'Nueva Notificacion'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('notificacion.store')}}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Notificacion</h4>
                                <p class="card-category">Ingresar datos</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="notificacion_id_tecnica_coaching " class="col-sm-2 col-form-label">Tecnica Coaching</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="notificacion_id_tecnica_coaching " placeholder="Ingrese la tecnica coaching" autofocus>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="notificacion_id_acta_perfil " class="col-sm-2 col-form-label">Acta Perfil</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="notificacion_id_acta_perfil " placeholder="Ingrese el acta perfil">
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection