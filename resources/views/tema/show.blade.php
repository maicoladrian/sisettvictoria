@extends('layouts.main', ['activePage' => 'temas', 'titlePage' => 'Detalles de Temas'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="card-title">Tema</div>
                        <p class="card-category">Vista detallada del Tema {{ $tema[0]['id_tema'] }}</p>
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
                                                    <img src="{{ asset('/img/tema2.png') }}" alt="image" class="avatar">
                                                    <h5 class="title mt-3">{{ $tema[0]['titulo_tema'] }}</h5>
                                                </a>
                                                <p class="description">
                                                {{ $tema[0]['descripcion_modalidad'] }}  <br>
                                                {{ $tema[0]['plazo_modalidad'] }}  Meses  <br>
                                                
                                                {{ $tema[0]['created_at'] }} 
                                                </p>
                                            </div>
                                        </p>
                                        <div class="card-description">
                                        {{ $tema[0]['descripcion_estado_tema'] }}
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