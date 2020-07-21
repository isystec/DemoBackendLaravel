@extends('plantilla.plantilla')
@section('contenido')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <Strong>Documento del Alumno : {{$prealum->prealum_ape.' '.$prealum->prealum_nom}}</Strong>
                </div>
                <div class="card-body">
                    <table class="table table-responsive-sm table-bordered">
                        <thead>
                            <tr>
                                <th>Documentos</th>
                                <th>Archivos</th>
                                <th>Estado</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($preadoc as $pad)
                            <tr>
                                <td>
                                    @if($pad->tipodocument==1)
                                        <p style="font-variant: small-caps;">Constancia de matricula del año anterior</p>
                                    @elseif($pad->tipodocument==2)
                                        <p style="font-variant: small-caps;">Resolucion Directorias</p>
                                    @elseif($pad->tipodocument==3)
                                        <p style="font-variant: small-caps;">Copias de DNI del Titular o Apoderado y Menor</p>
                                    @elseif($pad->tipodocument==4)
                                        <p style="font-variant: small-caps;">Foto/Pasaporte con fondo Blanco</p>
                                    @else
                                        <p style="font-variant: small-caps;">Certificado o Constancia de no Adeudo/Colegio Particular</p>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{url('verdocumento')}}" title="Ver PDF" class="btn btn-sm btn-outline-danger"><i class="fa fa-file-pdf-o"></i></a>
                                    <a href="" class="btn btn-sm btn-outline-success"><i class="fa fa-download"></i></a>
                                </td>
                                <td>
                                    @if($pad->estado==0)
                                        <a href="{{url('verdocumento')}}" title="Pendiente" class="btn btn-sm btn-outline-warning"><i class="fa fa-toggle-on">Pendiente</i></a>
                                    @elseif($pad->estado==1)
                                        <a href="{{url('verdocumento')}}" title="Pendiente" class="btn btn-sm btn-outline-danger"><i class="fa fa-toggle-on">Rechazadp</i></a>
                                    @else
                                        <a href="{{url('verdocumento')}}" title="Pendiente" class="btn btn-sm btn-outline-success"><i class="fa fa-toggle-on">Aceptado</i></a>
                                    @endif
                                </td>
                                <td>
                                    <a data-target="#modal-delete-{{$pad->docum_id}}" title="eliminar recurso" data-toggle="modal" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                                    @include('documentos.edit')
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{url('documentos')}}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
