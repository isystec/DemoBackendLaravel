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
                                                        <table class="table table-responsive-sm table-bordered">
                                                            <tbody>
                                                            <tr>
                                                                <td style="font-variant: small-caps;"><b>Tipo de Documento</b></td>
                                                                <td>
                                                                    @if($preapod->preapod_tipodocumento==0)
                                                                        Documento Nacional de Identidad
                                                                    @elseif($preapod->preapod_tipodocumento==1)
                                                                        Carnet de Extranjeria
                                                                    @else
                                                                        Pasaporte
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-variant: small-caps;"><b>N° de Documento</b></td>
                                                                <td>{{$preapod->preapod_identificacion}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-variant: small-caps;"><b>Nombres</b></td>
                                                                <td>{{$preapod->preapod_nom}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-variant: small-caps;"><b>Apellidos</b></td>
                                                                <td>{{$preapod->preapod_ape}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-variant: small-caps;"><b>Celular</b></td>
                                                                <td>{{$preapod->preapod_tel}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-variant: small-caps;"><b>Correo</b></td>
                                                                <td>{{$preapod->preapod_email}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-variant: small-caps;"><b>Sexo</b></td>
                                                                <td>{{$preapod->preapod_sexo}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-variant: small-caps;"><b>Estado Civil</b></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-variant: small-caps;"><b>Direccion</b></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-variant: small-caps;"><b>Fecha de Nacimiento</b></td>
                                                                <td>{{$preapod->preapod_fnac}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-variant: small-caps;"><b>Centro de Labores</b></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-variant: small-caps;"><b>Solvencia Economica</b></td>
                                                                <td></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
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
                                                                <table class="table table-responsive-sm table-bordered">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td style="font-variant: small-caps;"><b>Tipo de Documento</b></td>
                                                                        <td>
                                                                            @if($preapod->preapod_tipodocumento==0)
                                                                                Documento Nacional de Identidad
                                                                            @elseif($preapod->preapod_tipodocumento==1)
                                                                                Carnet de Extranjeria
                                                                            @else
                                                                                Pasaporte
                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="font-variant: small-caps;"><b>Identificacion</b></td>
                                                                        <td>{{$a->prealum_identificacion}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="font-variant: small-caps;"><b>Apellidos</b></td>
                                                                        <td>{{$a->prealum_ape}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="font-variant: small-caps;"><b>Nombres</b></td>
                                                                        <td>{{$a->prealum_nom}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="font-variant: small-caps;"><b>Nacionalidad</b></td>
                                                                        <td>{{$a->pais_nombre}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="font-variant: small-caps;"><b>Sexo</b></td>
                                                                        <td>
                                                                            @if($a->prealum_sexo=0)
                                                                                Femenino
                                                                            @else
                                                                                Masculino
                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="font-variant: small-caps;"><b>Fecha de Nacimiento</b></td>
                                                                        <td>{{$a->prealum_fnac}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="font-variant: small-caps;"><b>Grado al que Postula</b></td>
                                                                        <td>{{$a->prealum_gradopostula}}</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
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
