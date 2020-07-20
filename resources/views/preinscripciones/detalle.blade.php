@extends('plantilla.plantilla')
@section('contenido')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <Strong>Detalle de la Pre-inscripcion</Strong>
                </div>
                <div class="card-body">
                    <form action="">
                        @method('POST')
                        {{csrf_field()}}
                            @if (count($errors)>0)
                                <div class="alert alert-danger">
                                    <p>Corregir los siguientes campos:</p>
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                                <div class="list-group">
                                    <a class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Titular o Apoderado</h5>
                                        </div>
                                        <hr>
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Apoderados</strong> </div>
                                                <div class="card-body">
                                                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label" for="hf-email">Tipo de Documento</label>
                                                            <div class="col-md-9">
                                                                @if($preapod->preapod_tipodocumento==0)
                                                                    <input class="form-control" value="Documento Nacional de Identidad" readonly>
                                                                @elseif($preapod->preapod_tipodocumento==1)
                                                                    <input class="form-control" value="Carnet de Extranjeria" readonly>
                                                                @else
                                                                    <input class="form-control" value="Pasaporte" readonly>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label" for="hf-email">N° de Documento</label>
                                                            <div class="col-md-9">
                                                                <input class="form-control" value="{{$preapod->preapod_identificacion}}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label" for="hf-email">Nombres</label>
                                                            <div class="col-md-9">
                                                                <input class="form-control"value="{{$preapod->preapod_nom}}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label" for="hf-email">Apellidos</label>
                                                            <div class="col-md-9">
                                                                <input class="form-control" value="{{$preapod->preapod_ape}}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label" for="hf-email">Celular</label>
                                                            <div class="col-md-9">
                                                                <input class="form-control" value="{{$preapod->preapod_tel}}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label" for="hf-email">Correo</label>
                                                            <div class="col-md-9">
                                                                <input class="form-control" value="{{$preapod->preapod_email}}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label" for="hf-email">Sexo</label>
                                                            <div class="col-md-9">
                                                                <input class="form-control"value="{{$preapod->preapod_sexo}}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label" for="hf-email">Estado Civil</label>
                                                            <div class="col-md-9">
                                                                <input class="form-control" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label" for="hf-email">Direccion</label>
                                                            <div class="col-md-9">
                                                                <input class="form-control" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label" for="hf-email">Fecha de Nacimiento</label>
                                                            <div class="col-md-9">
                                                                <input class="form-control" value="{{$preapod->preapod_fnac}}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label" for="hf-email">Centro de Labores</label>
                                                            <div class="col-md-9">
                                                                <input class="form-control" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-3 col-form-label" for="hf-email">Solvencia Económica</label>
                                                            <div class="col-md-9">
                                                                <input class="form-control" readonly>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Alumnado</h5>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            @foreach($alumnos as $a)
                                                <div class="col-md-6">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <strong>Alumnado:</strong>{{' '.$a->prealum_nom.' '.$a->prealum_ape}}</div>
                                                        <div class="card-body">
                                                            <form class="form-horizontal" action="" method="post">
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 col-form-label" for="hf-email">Tipo de Documento</label>
                                                                    <div class="col-md-9">
                                                                        @if($preapod->preapod_tipodocumento==0)
                                                                            <input class="form-control" value="Documento Nacional de Identidad" readonly>
                                                                        @elseif($preapod->preapod_tipodocumento==1)
                                                                            <input class="form-control" value="Carnet de Extranjeria" readonly>
                                                                        @else
                                                                            <input class="form-control" value="Pasaporte" readonly>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 col-form-label" for="hf-email">Identificacion</label>
                                                                    <div class="col-md-9">
                                                                        <input class="form-control" value="{{$a->prealum_identificacion}}" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 col-form-label" for="hf-email">Apellidos</label>
                                                                    <div class="col-md-9">
                                                                        <input class="form-control" value="{{$a->prealum_ape}}" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 col-form-label" for="hf-email">Nombres</label>
                                                                    <div class="col-md-9">
                                                                        <input class="form-control" value="{{$a->prealum_nom}}" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 col-form-label" for="hf-email">Nacionalidad</label>
                                                                    <div class="col-md-9">
                                                                        <input class="form-control" value="{{$a->pais_nombre}}" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 col-form-label" for="hf-email">Sexo</label>
                                                                    <div class="col-md-9">
                                                                        @if($a->prealum_sexo=0)
                                                                            <input class="form-control" value="Femenino" readonly>
                                                                        @else
                                                                            <input class="form-control" value="Masculino" readonly>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 col-form-label" for="hf-email">Fecha de Nacimiento</label>
                                                                    <div class="col-md-9">
                                                                        <input class="form-control" value="{{$a->prealum_fnac}}" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 col-form-label" for="hf-email">Grado al que Postula</label>
                                                                    <div class="col-md-9">
                                                                        <input class="form-control" value="{{$a->prealum_gradopostula}}" readonly>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <!-- /.col-->
                                        </div>
                                    </a>
                                </div>
                    </form>
                </div>
                    <div class="card-footer">
                        <a href="{{url('preinscripciones')}}" class="btn btn-danger">Cancelar</a>
                    </div>
            </div>
        </div>
    </div>
@endsection
