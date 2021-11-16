@extends('layouts.main', ['activePage' =>'temas', 'titlePage' =>'Nuevo Tema'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('tema.store')}}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Tema</h4>
                                <p class="card-category">Ingresar datos</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="titulo_tema" class="col-sm-2 col-form-label">Titulo tema</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="titulo_tema" placeholder="Ingrese titulo del tema" autofocus>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="tema_id_estado_tema" class="col-sm-2 col-form-label">Estado tema</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="tema_id_estado_tema" placeholder="Ingrese el estado del tema">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="tema_id_modalidad" class="col-sm-2 col-form-label">Modalidad</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="tema_id_modalidad" placeholder="Ingrese la modalidad">
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