@extends('layouts.main', ['activePage' => 'mostrar_estado_tema', 'titlePage' => 'Lista de Estado de Temas'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Estado de Temas</h4>
                                    <p class="card-category">Estado de Temas registrados</p>
                                </div>
                                <div class="card-body">
                                    @if(session('success'))
                                    <div class="alert alert-success" role="success">
                                        {{ session('success')}}
                                    </div>
                                    <!-- <div type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        {{ session('success')}}
                                    </div> -->
                                    @endif
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <a href="{{ route('estado_tema.create')}}" class="btn btn-sm btn-facebook">Agregar Estado de Tema</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>ID</th>
                                                <th>Descripcion</th>
                                                <th>Creado</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach($estado_temas as $estado_tema)
                                                <tr>
                                                    <td>{{ $estado_tema->id_estado_tema}}</td>
                                                    <td>{{ $estado_tema->descripcion_estado_tema}}</td>
                                                    <td>{{ $estado_tema->created_at}}</td>
                                                    <td class="td-actions text-right">
                                                        
                                                        <!-- <a href="{{ route('estado_temas.show', $estado_tema->id_estado_tema) }}" class="btn btn-info"><i class="material-icons">person</i></a> -->
                                                        <button class="btn btn-warning" type="button">
                                                            <i class="material-icons">edit</i>
                                                        </button>
                                                        <button class="btn btn-danger" type="button">
                                                            <i class="material-icons">close</i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer mr-auto">
                                    {{ $estado_temas->links() }}

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection