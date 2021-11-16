@extends('layouts.main', ['activePage' =>'docentes', 'titlePage' =>'Nuevo Docente'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('docente.store')}}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Docente</h4>
                                <p class="card-category">Ingresar datos</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="ap_paterno" class="col-sm-2 col-form-label">Ap. Paterno</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="ap_paterno" placeholder="Ingrese el Apellido Paterno" autofocus>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="ap_materno" class="col-sm-2 col-form-label">Ap. Materno</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="ap_materno" placeholder="Ingrese el Apellido Materno">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="nombres" class="col-sm-2 col-form-label">Nombres</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="nombres" placeholder="Ingrese los nombres">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="celular" class="col-sm-2 col-form-label">Celular</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="celular" placeholder="Ingrese el numero de celular">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="correo" class="col-sm-2 col-form-label">Correo</label>
                                    <div class="col-sm-7">
                                        <input type="email" class="form-control" name="correo" placeholder="Ingrese el Correo">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="usuario" class="col-sm-2 col-form-label">Usuario</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="usuario" placeholder="Ingrese el Usuario">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-7">
                                        <input type="password" class="form-control" name="password" placeholder="Ingrese el Password">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="usuario_id_rol" class="col-sm-2 col-form-label">Rol</label>
                                    <div class="col-sm-7">
                                        <!-- <input type="text" class="form-control" name="usuario_id_rol" placeholder="Ingrese el Rol"> -->
                                        <select class="form-control selectpicker" data-style="btn btn-link" name="usuario_id_rol" id="usuario_id_rol">
                                            <option value="">Elija un rol</option>
                                            @foreach ($roles as $rol)
                                                {{ $tipo_rol = $rol['tipo_rol']; }}
                                                @if ($tipo_rol == 'Docente')
                                                    <option value="{{ $rol['id_rol'] }}" selected>{{ $tipo_rol }}</option>
                                                @else
                                                    <option value=" {{ $rol['id_rol'] }}" disabled="disabled"> {{ $tipo_rol  }} </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="docente_id_tipo_docente" class="col-sm-2 col-form-label">Tipo docente</label>
                                    <div class="col-sm-7">
                                        <!-- <input type="text" class="form-control" name="docente_id_tipo_docente" placeholder="Ingrese el tipo docente"> -->
                                        <select class="form-control selectpicker" data-style="btn btn-link" name="docente_id_tipo_docente" id="docente_id_tipo_docente">
                                            <option value="">Elija el tipo de docente</option>
                                            @foreach ($tipo_docentes as $tipo_docente)
                                                <option value=" {{ $tipo_docente['id_tipo_docente'] }} "> {{ $tipo_docente['detalle_tipo_docente'] }} </option>
                                            @endforeach
                                        </select>
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