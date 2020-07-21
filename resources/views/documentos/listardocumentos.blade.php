@extends('plantilla.plantilla')
@section('contenido')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <Strong>Documentos del Alumno :</Strong>
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
                        <tr>
                            <td style="font-variant: small-caps;">Constancia de matricula del año anterior</td>
                            <td>
                                <a href="{{url('verdocumento')}}" title="Ver PDF" class="btn btn-sm btn-outline-danger"><i class="fa fa-file-pdf-o"></i></a>
                            </td>
                            <td>
                                <a href="{{url('verdocumento')}}" title="Pendiente" class="btn btn-sm btn-outline-warning"><i class="fa fa-toggle-on">Pendiente</i></a>
                            </td>
                            <td>
                                <a href="{{url('verdocumento')}}" title="Editar Estado" class="btn btn-sm btn-outline-warning"><i class="fa fa-pencil-square-o"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-variant: small-caps;">Resolucion Directorias</td>
                            <td>
                                <a href="{{url('verdocumento')}}" title="Ver PDF" class="btn btn-sm btn-outline-danger"><i class="fa fa-file-pdf-o"></i></a>
                            </td>
                            <td>
                                <a href="{{url('verdocumento')}}" title="Pendiente" class="btn btn-sm btn-outline-warning"><i class="fa fa-toggle-on">Pendiente</i></a>
                            </td>
                            <td>
                                <a href="{{url('verdocumento')}}" title="Editar Estado" class="btn btn-sm btn-outline-warning"><i class="fa fa-pencil-square-o"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-variant: small-caps;">Copias de DNI del Titular o Apoderado y Menor</td>
                            <td>
                                <a href="{{url('verdocumento')}}" title="Ver PDF" class="btn btn-sm btn-outline-danger"><i class="fa fa-file-pdf-o"></i></a>
                            </td>
                            <td>
                                <a href="{{url('verdocumento')}}" title="Pendiente" class="btn btn-sm btn-outline-warning"><i class="fa fa-toggle-on">Pendiente</i></a>
                            </td>
                            <td>
                                <a href="{{url('verdocumento')}}" title="Editar Estado" class="btn btn-sm btn-outline-warning"><i class="fa fa-pencil-square-o"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-variant: small-caps;"><b style="font-variant: small-caps;">4 </b>Foto/Pasaporte con fondo Blanco</td>
                            <td>
                                <a href="{{url('verdocumento')}}" title="Ver PDF" class="btn btn-sm btn-outline-danger"><i class="fa fa-file-pdf-o"></i></a>
                            </td>
                            <td>
                                <a href="{{url('verdocumento')}}" title="Pendiente" class="btn btn-sm btn-outline-warning"><i class="fa fa-toggle-on">Pendiente</i></a>
                            </td>
                            <td>
                                <a href="{{url('verdocumento')}}" title="Editar Estado" class="btn btn-sm btn-outline-warning"><i class="fa fa-pencil-square-o"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-variant: small-caps;">Certificado o Constancia de no Adeudo/Colegio Particular</td>
                            <td>
                                <a href="{{url('verdocumento')}}" title="Ver PDF" class="btn btn-sm btn-outline-danger"><i class="fa fa-file-pdf-o"></i></a>
                            </td>
                            <td>
                                <a href="{{url('verdocumento')}}" title="Pendiente" class="btn btn-sm btn-outline-warning"><i class="fa fa-toggle-on">Pendiente</i></a>
                            </td>
                            <td>
                                <a href="{{url('verdocumento')}}" title="Editar Estado" class="btn btn-sm btn-outline-warning"><i class="fa fa-pencil-square-o"></i></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
