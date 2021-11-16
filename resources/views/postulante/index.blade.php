@extends('layouts.main', ['activePage' => 'mostrar_postulantes', 'titlePage' => 'Lista de Postulantes'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Postulantes</h4>
                                    <p class="card-category">Postulantes registrados</p>
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
                                            <a href="{{ route('postulante.create')}}" class="btn btn-sm btn-facebook">Agregar Postulante</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>ID</th>
                                                <th>Ap. Paterno</th>
                                                <th>Ap. Materno </th>
                                                <th>Nombres</th>
                                                <th>Celular</th>
                                                <th>Correo</th>
                                                <th>Usuario</th>
                                                <th>Rol</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach($postulantes as $postulante)
                                                <tr>
                                                    <td>{{ $postulante->id_postulante}}</td>
                                                    <td>{{ $postulante->ap_paterno}}</td>
                                                    <td>{{ $postulante->ap_materno}}</td>
                                                    <td>{{ $postulante->nombres}}</td>
                                                    <td>{{ $postulante->celular}}</td>
                                                    <td>{{ $postulante->correo}}</td>
                                                    <td>{{ $postulante->usuario}}</td>
                                                    <td>{{ $postulante->tipo_rol}}</td>
                                                    <td class="td-actions text-right">
                                                        
                                                        <a href="{{ route('postulantes.show', $postulante->id_postulante) }}" class="btn btn-info"><i class="material-icons">person</i></a>
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
                                    {{ $postulantes->links() }}

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection