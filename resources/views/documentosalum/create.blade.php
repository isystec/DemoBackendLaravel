@extends('plantilla.plantilla')
@section('contenido')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <Strong>Documentos create</Strong>
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
                                    <form action="{{url('documentosalum')}}" method="POST" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <table class="table table-responsive-sm table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Documentos</th>
                                                <th>Subir archivo</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Constancia de matricula del año anterios</td>
                                                <td>
                                                    <input type="file" name="consta" accept=".pdf,.doc,.JPG,.PNG" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Resolucion Directorial</td>
                                                <td>
                                                    <input type="file" name="reso_direc" id="" accept=".pdf,.doc,.JPG,.PNG" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Copias de DNI del Titular o Apoderado y Menor</td>
                                                <td>
                                                    <input type="file" name="copi_dni_apodymenor" id="" accept=".JPG,.PNG" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>4 </b>Fotos<b>/</b>Pasaporte con fondo blanco</td>
                                                <td>
                                                    <input type="file" name="foto_pasaporte" id="" accept=".JPG,.PNG" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Certificado o Constancia de no Adeudo<b>/</b>Colegio Particular</td>
                                                <td>
                                                    <input type="file" name="certi_noadeudo" accept=".pdf,.doc,.JPG,.PNG" required>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Subir">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
@endsection
