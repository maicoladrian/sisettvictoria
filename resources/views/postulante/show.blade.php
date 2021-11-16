@extends('layouts.main', ['activePage' => 'postulantes', 'titlePage' => 'Detalles de Postulante'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="card-title">Postulante</div>
                        <p class="card-category">Vista detallada del Postulante {{ $postulante[0]['usuario'] }}</p>
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
                                                    <img src="{{ asset('/img/avatar.png') }}" alt="image" class="avatar">
                                                    <h5 class="title mt-3">{{ $postulante[0]['tipo_rol'] }}</h5>
                                                </a>
                                                <p class="description">
                                                {{ $postulante[0]['ap_paterno'] }}  <br>
                                                {{ $postulante[0]['ap_materno'] }}  <br>
                                                {{ $postulante[0]['nombres'] }} <br>
                                                {{ $postulante[0]['celular'] }} <br>
                                                {{ $postulante[0]['correo'] }} <br>
                                                {{ $postulante[0]['usuario'] }} <br>
                                                {{ $postulante[0]['created_at'] }} 
                                                </p>
                                            </div>
                                        </p>
                                        <div class="card-description">
                                        {{ $postulante[0]['detalle_rol'] }}
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