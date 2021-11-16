@extends('layouts.main', ['activePage' =>'tecnica_coaching', 'titlePage' =>'Nueva tecnica coaching'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('tecnica_coaching.store')}}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Tecnica Coaching </h4>
                                <p class="card-category">Ingresar datos</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="nombre_tecnica" class="col-sm-2 col-form-label">Nombre tecnica coaching</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="nombre_tecnica" placeholder="Ingrese el nombre de la tecnica" autofocus>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="descripcion_tecnica" class="col-sm-2 col-form-label">Descripciong de tecnica coaching</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="descripcion_tecnica" placeholder="Ingrese la descripcion de la tecnica" autofocus>
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