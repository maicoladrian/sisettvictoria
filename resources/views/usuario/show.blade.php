@extends('layouts.main', ['activePage' => 'usuarios', 'titlePage' => 'Detalles de Usuario'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="card-title">Usuarios</div>
                        <p class="card-category">Vista detallada del Usuario {{ $usuario[0]['usuario'] }}</p>
                    </div>
                    <!-- body usuario -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card card-user">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <div class="author">
                                                <a href="">
                                                    <img src="" alt="image" class="avatar">
                                                    <h5 class="title mt-3">{{ $usuario[0]['tipo_rol'] }}</h5>
                                                </a>
                                                <p class="description">
                                                {{ $usuario[0]['ap_paterno'] }}  <br>
                                                {{ $usuario[0]['ap_materno'] }}  <br>
                                                {{ $usuario[0]['nombres'] }} <br>
                                                {{ $usuario[0]['celular'] }} <br>
                                                {{ $usuario[0]['correo'] }} <br>
                                                {{ $usuario[0]['usuario'] }} <br>
                                                {{ $usuario[0]['created_at'] }} 
                                                </p>
                                            </div>
                                        </p>
                                        <div class="card-description">
                                        {{ $usuario[0]['detalle_rol'] }}
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