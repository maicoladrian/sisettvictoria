@extends('layouts.main', ['activePage' => 'mostrar_docentes', 'titlePage' => 'Lista de Docentes'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Docentes</h4>
                                    <p class="card-category">Docentes registrados</p>
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
                                            <a href="{{ route('docente.create')}}" class="btn btn-sm btn-facebook">Agregar Docente</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>ID</th>
                                                <th>Tipo docente</th>
                                                <th>Apellidos y Nombres</th>
                                                <th>Correo</th>
                                                <th>Creado</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach($docentes as $docente)
                                                <tr>
                                                    <td>{{ $docente->id_docente}}</td>
                                                    <td>{{ $docente->detalle_tipo_docente}}</td>
                                                    <td>{{ $docente->ap_paterno}} {{ $docente->ap_materno}} {{ $docente->nombres}}</td>
                                                    <td>{{ $docente->correo}}</td>
                                                    <td>{{ $docente->created_at}}</td>
                                                    <td class="td-actions text-right">
                                                        
                                                        <a href="{{ route('docentes.show', $docente->id_docente) }}" class="btn btn-info"><i class="material-icons">person</i></a>
                                                        <!-- <a href="#" class="btn btn-info"><i class="material-icons">person</i></a> -->
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
                                    {{ $docentes->links() }}

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection