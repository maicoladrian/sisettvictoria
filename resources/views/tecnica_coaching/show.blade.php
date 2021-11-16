@extends('layouts.main', ['activePage' => 'tecnicas_coaching', 'titlePage' => 'Detalles Tecnica coaching'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="card-title">Tecnicas Coaching</div>
                        <p class="card-category">Vista detallada de {{ $tecnica_coaching->nombre_tecnica }}</p>
                    </div>
                    <!-- body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card card-user">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <div class="author">
                                                <a href="#">
                                                    <img src="{{ asset('/img/coaching.png') }}" alt="image" class="avatar">
                                                    <h5 class="title mt-3">{{ $tecnica_coaching->descripcion_tecnica }}</h5>
                                                </a>
                                                <p class="description">
                                                {{ $tecnica_coaching->descripcion_tecnica }} <br>
                                                {{ $tecnica_coaching->created_at }} 
                                                </p>
                                            </div>
                                        </p>
                                        <div class="card-description">
                                        {{ $tecnica_coaching->descripcion_tecnica }}
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