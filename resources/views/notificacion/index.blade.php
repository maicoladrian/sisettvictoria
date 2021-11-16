@extends('layouts.main', ['activePage' => 'mostrar_notificaciones', 'titlePage' => 'Lista de Notificaciones enviadas'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Notificaciones</h4>
                                    <p class="card-category">Notificaciones enviadas</p>
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
                                            <a href="{{ route('notificacion.create')}}" class="btn btn-sm btn-facebook">Agregar Notificacion</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>ID</th>
                                                <th>Fecha y hora</th>
                                                <th>Tecnica Coaching</th>
                                                <th>Fecha defensa</th>
                                                <th>Hora defensa</th>
                                                
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach($notificaciones as $notificacion)
                                                <tr>
                                                    <td>{{ $notificacion->id_notificacion}}</td>
                                                    <td>{{ $notificacion->fecha_hora_envio}}</td>
                                                    <td>{{ $notificacion->nombre_tecnica}}</td>
                                                    <td>{{ $notificacion->fecha_defensa_acta_perfil}}</td>
                                                    <td>{{ $notificacion->hora_defensa_acta_perfil}}</td>
                                                    
                                                    <td class="td-actions text-right">
                                                        
                                                        <a href="{{ route('notificaciones.show', $notificacion->id_notificacion) }}" class="btn btn-info"><i class="material-icons">person</i></a>
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
                                    {{ $notificaciones->links() }}

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection