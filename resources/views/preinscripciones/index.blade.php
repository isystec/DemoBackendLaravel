@extends('plantilla.plantilla')
@section('contenido')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <Strong>Pre-inscripciones</Strong>
                </div>
                <div class="card-body">
                    <table class="table table-responsive-sm table-hover table-sm" id="dataTable">
                        <thead>
                        <tr>
                            <th>DNI</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Tipo de relacion del Titular</th>
                            <th>Celular</th>
                            <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>70327395</td>
                            <td>Juan</td>
                            <td>Cubas Bravo</td>
                            <td>Padre</td>
                            <td>987654321</td>
                            <td>
                                <a href="" title="Ver Preinscripcion" class="btn btn-sm btn-outline-info"><i class="fa fa-file-text"></i></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
