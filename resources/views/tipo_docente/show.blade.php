@extends('layouts.main', ['activePage' => 'tipo_docentes', 'titlePage' => 'Detalles tipo de docente'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="card-title">Tipo de Docentes</div>
                        <p class="card-category">Vista detallada de {{ $tipo_docente->detalle_tipo_docente }}</p>
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
                                                    <h5 class="title mt-3">{{ $tipo_docente->detalle_tipo_docente }}</h5>
                                                </a>
                                                <p class="description">
                                                {{ $tipo_docente->detalle_tipo_docente }} <br>
                                                {{ $tipo_docente->created_at }} 
                                                </p>
                                            </div>
                                        </p>
                                        <div class="card-description">
                                        {{ $tipo_docente->detalle_tipo_docente }}
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