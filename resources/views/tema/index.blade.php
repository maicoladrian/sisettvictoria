@extends('layouts.main', ['activePage' => 'mostrar_temas', 'titlePage' => 'Lista de Temas'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Temas</h4>
                                    <p class="card-category">Temas registrados</p>
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
                                            <a href="{{ route('tema.create')}}" class="btn btn-sm btn-facebook">Agregar Tema</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>ID</th>
                                                <th>Titulo tema</th>
                                                <th>Estado</th>
                                                
                                                <th>Modalidad </th>
                                                <th>Plazo</th>
                                                
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach($temas as $tema)
                                                <tr>
                                                    <td>{{ $tema->id_tema}}</td>
                                                    <td>{{ substr($tema->titulo_tema, 0, 50) }}...</td>
                                                    <td>{{ $tema->descripcion_estado_tema}}</td>
                                                    <td>{{ $tema->descripcion_modalidad}}</td>
                                                    <td>{{ $tema->plazo_modalidad}}</td>
                                                    
                                                    <td class="td-actions text-right">
                                                        
                                                        <a href="{{ route('temas.show', $tema->id_tema) }}" class="btn btn-info"><i class="material-icons">person</i></a>
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
                                    {{ $temas->links() }}

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection