@extends('layouts.main', ['activePage' =>'rols', 'titlePage' =>'Nuevo Rol'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('rol.store')}}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Rol</h4>
                                <p class="card-category">Ingresar datos</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="tipo_rol" class="col-sm-2 col-form-label">Tipo de Rol</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="tipo_rol" placeholder="Ingrese el tipo de Rol" autofocus>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="detalle_rol" class="col-sm-2 col-form-label">Detalle del Rol</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="detalle_rol" placeholder="Ingrese el detalle del Rol">
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