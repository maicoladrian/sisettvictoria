@extends('layouts.main', ['activePage' =>'tipo_docente', 'titlePage' =>'Nuevo tipo de Docente'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('tipo_docente.store')}}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Tipo de Docente</h4>
                                <p class="card-category">Ingresar datos</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="detalle_tipo_docente" class="col-sm-2 col-form-label">Detalle tipo de docente</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="detalle_tipo_docente" placeholder="Ingrese el detalle" autofocus>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection