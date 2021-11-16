@extends('layouts.main', ['activePage' =>'acta_perfiles', 'titlePage' =>'Nuevo Acta de Perfil'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('acta_perfil.store')}}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card" id="app">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Acta de Perfil</h4>
                                <p class="card-category">Ingresar datos</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="fecha_defensa_acta_perfil" class="col-sm-2 col-form-label">Fecha defensa</label>
                                    <div class="col-sm-7">
                                        <input type="date" class="form-control" name="fecha_defensa_acta_perfil" placeholder="Ingrese la de defensa" autofocus>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="hora_defensa_acta_perfil" class="col-sm-2 col-form-label">Hora defensa</label>
                                    <div class="col-sm-7">
                                        <input type="time" class="form-control" name="hora_defensa_acta_perfil" placeholder="Ingrese la hora de defensa">
                                    </div>
                                </div>


                                <div class="row">
                                    <label for="calificacion" class="col-sm-2 col-form-label">Calificacion</label>
                                    <div class="col-sm-7">
                                        <input v-model="cal" type="text" class="form-control" name="calificacion" placeholder="Ingrese la calificacion" v-on:keyup="calcularEscala()" autocomplete="off">
                                    </div>
                                </div>


                                <div class="row">
                                    <label for="escala" class="col-sm-2 col-form-label">Escala</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="escala" placeholder="Ingrese la escala" v-model="esca">
                                        <!-- <select class="form-control" data-style="btn btn-link" name="escala" id="escala">
                                            <option value="">Seleccione escala</option>
                                            <option value="Reprobado">Reprobado</option>
                                            <option value="Regular Aprobado">Regular Aprobado</option>
                                            <option value="Bueno Aprobado">Bueno Aprobado</option>
                                            <option value="Muy Bueno Aprobado">Muy Bueno Aprobado</option>
                                            <option value="Distinguido Aprobado">Distinguido Aprobado</option>
                                            <option value="Sobresaliente Aprobado">Sobresaliente Aprobado</option>
                                            
                                        </select> -->
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <label for="observaciones" class="col-sm-2 col-form-label">Observaciones</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="observaciones" placeholder="Ingrese las observaciones">
                                    </div>
                                </div>

                                <div class="row">
                                    <label for="acta_perfil_tribunal_1" class="col-sm-2 col-form-label">Tribunal 1</label>
                                    <div class="col-sm-7">
                                        <!-- <input type="text" class="form-control" name="acta_perfil_tribunal_1" placeholder="Ingrese el tribunal 1"> -->
                                        <select class="form-control" data-style="btn btn-link" name="acta_perfil_tribunal_1" id="acta_perfil_tribunal_1">
                                            <option value="">Seleccione el tribunal 1</option>
                                            @foreach($docentes as $docente)
                                                {{ $detalle_tipo_docente = $docente['detalle_tipo_docente']; }}
                                                @if ($detalle_tipo_docente != 'Formacion Politica Sindical')
                                                    @if($docente['docente_id_usuario'] != 1)
                                                        <option value="{{$docente['id_docente']}}">{{$docente['ap_paterno']}} {{$docente['nombres']}}</option>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="acta_perfil_tribunal_2" class="col-sm-2 col-form-label">Tribunal 2</label>
                                    <div class="col-sm-7">
                                        <!-- <input type="text" class="form-control" name="acta_perfil_tribunal_2" placeholder="Ingrese el tribunal 2"> -->
                                        <select class="form-control" data-style="btn btn-link" name="acta_perfil_tribunal_2" id="acta_perfil_tribunal_2">
                                            <option value="">Seleccione el tribunal 2</option>
                                            @foreach($docentes as $docente)
                                                {{ $detalle_tipo_docente = $docente['detalle_tipo_docente']; }}
                                                @if ($detalle_tipo_docente != 'Formacion Politica Sindical')
                                                    @if($docente['docente_id_usuario'] != 1)
                                                        <option value="{{$docente['id_docente']}}">{{$docente['ap_paterno']}} {{$docente['nombres']}}</option>
                                                    @endif
                                                @endif

                                                <!-- <option value="{{$docente['id_docente']}}">{{$docente['ap_paterno']}} {{$docente['nombres']}}</option> -->
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="acta_perfil_tribunal_fps" class="col-sm-2 col-form-label">Tribunal FPS</label>
                                    <div class="col-sm-7">
                                        <!-- <input type="text" class="form-control" name="acta_perfil_tribunal_fps" placeholder="Ingrese el tribunal de FPS"> -->
                                        <select class="form-control" data-style="btn btn-link" name="acta_perfil_tribunal_fps" id="acta_perfil_tribunal_fps">
                                            <option value="">Seleccione el tribunal FPS</option>
                                            @foreach($docentes as $docente)
                                                {{ $detalle_tipo_docente = $docente['detalle_tipo_docente']; }}
                                                @if ($detalle_tipo_docente == 'Formacion Politica Sindical')
                                                    <option value="{{$docente['id_docente']}}">{{$docente['ap_paterno']}} {{$docente['nombres']}}</option>
                                                @endif

                                                <!-- <option value="{{$docente['id_docente']}}">{{$docente['ap_paterno']}} {{$docente['nombres']}}</option> -->
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="acta_perfil_tutor" class="col-sm-2 col-form-label">Tutor</label>
                                    <div class="col-sm-7">
                                        <!-- <input type="text" class="form-control" name="acta_perfil_tutor" placeholder="Ingrese el Tutor"> -->
                                        <select class="form-control" data-style="btn btn-link" name="acta_perfil_tutor" id="acta_perfil_tutor">
                                            <option value="">Seleccione el Tutor</option>
                                            @foreach($docentes as $docente)
                                                {{ $detalle_tipo_docente = $docente['detalle_tipo_docente']; }}
                                                @if ($detalle_tipo_docente != 'Formacion Politica Sindical')
                                                    @if($docente['docente_id_usuario'] != 1)
                                                        <option value="{{$docente['id_docente']}}">{{$docente['ap_paterno']}} {{$docente['nombres']}}</option>
                                                    @endif
                                                @endif

                                                <!-- <option value="{{$docente['id_docente']}}">{{$docente['ap_paterno']}} {{$docente['nombres']}}</option> -->
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="acta_perfil_id_postulante" class="col-sm-2 col-form-label">Postulante</label>
                                    <div class="col-sm-7">
                                        <!-- <input type="text" class="form-control" name="acta_perfil_id_postulante" placeholder="Ingrese el postulante"> -->
                                        <select class="form-control" data-style="btn btn-link" name="acta_perfil_id_postulante" id="acta_perfil_id_postulante">
                                            <option value="">Seleccione el Postulante</option>
                                            @foreach($postulantes as $postulante)
                                                <option value="{{$postulante['id_postulante']}}">{{$postulante['ap_paterno']}} {{$postulante['nombres']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="acta_perfil_id_tema" class="col-sm-2 col-form-label">Tema</label>
                                    <div class="col-sm-7">
                                        <!-- <input type="text" class="form-control" name="acta_perfil_id_tema" placeholder="Ingrese el tema"> -->
                                        <select class="form-control" data-style="btn btn-link" name="acta_perfil_id_tema" id="acta_perfil_id_tema">
                                            <option value="">Seleccione el Tema</option>
                                            @foreach($temas as $tema)
                                                <option value="{{$tema['id_tema']}}">{{$tema['titulo_tema']}}</option>
                                            @endforeach
                                        </select>
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


    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

    <!-- vue offline -->
    <!-- <script src="{{ asset('js/vue.min.js') }}"></script> -->
    <!-- <script src="js/vue.min.js"></script> -->

    <!-- vue inicio -->
    <script>
        var vm = new Vue({
            el: '#app',
            data: { 
                cal: '',
                esca:'' 
            },
            methods: {
                calcularEscala: function () {
                    if(this.cal <= 50){
                        this.esca = 'Reprobado';
                    }else if(this.cal > 50 && this.cal <= 60){
                        this.esca = 'Regular aprobado';
                    }else if(this.cal > 60 && this.cal <= 70){
                        this.esca = 'Bueno aprobado';
                    }else if(this.cal > 70 && this.cal <= 80){
                        this.esca = 'Muy bueno aprobado';
                    }else if(this.cal > 80 && this.cal <= 90){
                        this.esca = 'Distinguido aprobado';
                    }else if(this.cal > 90 && this.cal <= 100){
                        this.esca = 'Sobresaliente aprobado';
                    }
                    // return this.esca;
                }
            }
        })
    </script>
    
    <!-- vue fin -->
@endsection