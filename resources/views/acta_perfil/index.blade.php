@extends('layouts.main', ['activePage' => 'mostrar_acta_perfiles', 'titlePage' => 'Lista de Acta de Perfiles'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Acta de Perfiles</h4>
                                    <p class="card-category">Acta de Perfiles registrados</p>
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
                                            <a href="{{ route('acta_perfil.create')}}" class="btn btn-sm btn-facebook">Agregar Acta de Perfil</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>ID</th>
                                                <th>Fecha defensa</th>
                                                <th>Hora defensa</th>
                                                <th>Calificacion</th>
                                                <th>Postulante</th>
                                                
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach($acta_perfiles as $acta_perfil)
                                                <tr>
                                                    <td>{{ $acta_perfil->id_acta_perfil}}</td>
                                                    <td>{{ $acta_perfil->fecha_defensa_acta_perfil}}</td>
                                                    <td>{{ $acta_perfil->hora_defensa_acta_perfil}}</td>
                                                    <td>{{ $acta_perfil->calificacion}}</td>
                                                    <td>{{ $acta_perfil->ap_paterno}}  {{ $acta_perfil->ap_materno}} {{ $acta_perfil->nombres}}</td>
                                                    
                                                    <td class="td-actions text-right">
                                                        
                                                        <!-- <a href="{{ route('acta_perfiles.show', $acta_perfil->id_acta_perfil) }}" class="btn btn-info"><i class="material-icons">person</i></a> -->
                                                        <!-- <a href="#" class="btn btn-info"><i class="material-icons">person</i></a> -->
                                                        <!-- <button class="btn btn-warning" type="button">
                                                            <i class="material-icons">edit</i>
                                                        </button> -->
                                                        <!-- <button class="btn btn-danger" type="button">
                                                            <i class="material-icons">close</i>
                                                        </button> -->
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer mr-auto">
                                    {{ $acta_perfiles->links() }}

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection