@extends('plantilla.plantilla')
@section('contenido')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <Strong>Documentos</Strong>
                </div>
                <div class="card-body">
                    <a class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Entrega de Documentacion Virtual</h5>
                        </div>
                        <hr>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="" >
                                        <table class="table table-responsive-sm table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Documentos</th>
                                                <th>Subir archivo</th>
                                                <th>Estado</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Constancia de matricula del año anterios</td>
                                                <td>
                                                    <input type="file" name="" id="" accept=".pdf,.doc,.JPG,.PNG" required>
                                                </td>
                                                <td>
                                                    <a href="" title="" class="btn btn-sm btn-outline-warning"><i class="fa-bell-slash-o">Pendiente</i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Resolucion Directorial</td>
                                                <td>
                                                    <input type="file" name="" id="" accept=".pdf,.doc,.JPG,.PNG" required>
                                                </td>
                                                <td>
                                                    <a href="" title="" class="btn btn-sm btn-outline-warning"><i class="fa-bell-slash-o">Pendiente</i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Copias de DNI del Titular o Apoderado y Menos</td>
                                                <td>
                                                    <input type="file" name="" id="" accept=".JPG,.PNG" required>
                                                </td>
                                                <td>
                                                    <a href="" title="" class="btn btn-sm btn-outline-warning"><i class="fa-bell-slash-o">Pendiente</i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>4 </b>Fotos<b>/</b>Pasaporte con fondo blanco</td>
                                                <td>
                                                    <input type="file" name="" id="" accept=".JPG,.PNG" required>
                                                </td>
                                                <td>
                                                    <a href="" title="" class="btn btn-sm btn-outline-warning"><i class="fa-bell-slash-o">Pendiente</i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Certificado o Constancia de no Adeudo<b>/</b>Colegio Particular</td>
                                                <td>
                                                    <input type="file" accept=".pdf,.doc,.JPG,.PNG" required>
                                                </td>
                                                <td>
                                                    <a href="" title="" class="btn btn-sm btn-outline-warning"><i class="fa-bell-slash-o">Pendiente</i></a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-footer">
                    <a href="{{url('')}}" class="btn btn-primary btn-lg btn-block">Subir</a>
                </div>
            </div>
        </div>
    </div>
@endsection
