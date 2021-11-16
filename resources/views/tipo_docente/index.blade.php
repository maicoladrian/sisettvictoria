@extends('layouts.main', ['activePage' => 'mostrar_tipo_docente', 'titlePage' => 'Lista de Tipo de Docentes'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Tipo de docentes</h4>
                                    <p class="card-category">Tipo de docentes registrados</p>
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
                                            <a href="{{ route('tipo_docente.create')}}" class="btn btn-sm btn-facebook">Agregar Tipo de docente</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>ID</th>
                                                <th>Detalle</th>
                                                <th>Creado</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach($tipo_docentes as $tipo_docente)
                                                <tr>
                                                    <td>{{ $tipo_docente->id_tipo_docente}}</td>
                                                    <td>{{ $tipo_docente->detalle_tipo_docente}}</td>
                                                    <td>{{ $tipo_docente->created_at}}</td>
                                                    <td class="td-actions text-right">
                                                        
                                                        <!-- <a href="{{ route('tipo_docentes.show', $tipo_docente->id_tipo_docente) }}" class="btn btn-info"><i class="material-icons">person</i></a> -->
                                                        <a href="{{ route('tipo_docentes.edit', $tipo_docente->id_tipo_docente) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
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
                                    {{ $tipo_docentes->links() }}

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection