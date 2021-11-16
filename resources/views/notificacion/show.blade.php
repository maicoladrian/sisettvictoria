@extends('layouts.main', ['activePage' => 'notificaciones', 'titlePage' => 'Detalles de Notificaciones'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="card-title">Notificacion</div>
                        <p class="card-category">Vista detallada de la Notificacion {{ $notificacion[0]['id_tema'] }}</p>
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
                                                    <h5 class="title mt-3">{{ $notificacion[0]['id_notificacion'] }}</h5>
                                                </a>
                                                <p class="description">
                                                {{ $notificacion[0]['nombre_tecnica'] }}  <br>
                                                {{ $notificacion[0]['fecha_hora_envio'] }}  <br>
                                                {{ $notificacion[0]['descripcion_tecnica'] }} <br>
                                                
                                                {{ $notificacion[0]['created_at'] }} 
                                                </p>
                                            </div>
                                        </p>
                                        <div class="card-description">
                                        {{ $notificacion[0]['fecha_defensa_acta_perfil'] }}
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