@extends('layouts.main', ['activePage' =>'modalidades', 'titlePage' =>'Nueva Modalidad'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('modalidad.store')}}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Modalidad</h4>
                                <p class="card-category">Ingresar datos</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="descripcion_modalidad" class="col-sm-2 col-form-label">Descripcion de la Modalidad</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="descripcion_modalidad" placeholder="Ingrese la descripcion de la modalidad" autofocus>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="plazo_modalidad" class="col-sm-2 col-form-label">Plazo modalidad</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="plazo_modalidad" placeholder="Ingrese el plazo de la modalidad (Meses)">
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