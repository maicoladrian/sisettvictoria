@extends('layouts.main', ['activePage' => 'mostrar_tecnica_coaching', 'titlePage' => 'Lista de Tecnica Coaching'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Tecnicas coaching</h4>
                                    <p class="card-category">Tecnicas coaching registrados</p>
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
                                            <a href="{{ route('tecnica_coaching.create')}}" class="btn btn-sm btn-facebook">Agregar Tecnica coaching</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Descripcion</th>
                                                <th>Creado</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach($tecnicas_coaching as $tecnica_coaching)
                                                <tr>
                                                    <td>{{ $tecnica_coaching->id_tecnica_coaching}}</td>
                                                    <td>{{ $tecnica_coaching->nombre_tecnica}}</td>
                                                    <td>{{ $tecnica_coaching->descripcion_tecnica}}</td>
                                                    <td>{{ $tecnica_coaching->created_at}}</td>
                                                    <td class="td-actions text-right">
                                                        
                                                        <a href="{{ route('tecnicas_coaching.show', $tecnica_coaching->id_tecnica_coaching) }}" class="btn btn-info"><i class="material-icons">person</i></a>
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
                                    {{ $tecnicas_coaching->links() }}

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection