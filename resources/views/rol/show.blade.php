@extends('layouts.main', ['activePage' => 'rols', 'titlePage' => 'Detalles de Rol'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="card-title">Roles</div>
                        <p class="card-category">Vista detallada del Rol {{ $rol->tipo_rol }}</p>
                        <p>{{$rol}}</p>
                    </div>
                    <!-- body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card card-user">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <div class="author">
                                                <a href="">
                                                    <img src="" alt="image" class="avatar">
                                                    <h5 class="title mt-3">{{ $rol->tipo_rol }}</h5>
                                                </a>
                                                <p class="description">
                                                {{ $rol->tipo_rol }}  <br>
                                                {{ $rol->tipo_rol }}  <br>
                                                {{ $rol->tipo_rol }} <br>
                                                {{ $rol->created_at }} 
                                                </p>
                                            </div>
                                        </p>
                                        <div class="card-description">
                                        {{ $rol->detalle_rol }}
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="button-container">
                                            <button class="btn btn-sm btn-primary">Editar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection