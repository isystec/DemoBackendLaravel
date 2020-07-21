@extends('plantilla.plantilla')
@section('contenido')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <Strong>Apoderados</Strong>
                </div>
                <div class="card-body">
                    <table class="table table-responsive-sm table-hover table-sm" id="dataTable">
                        <thead>
                        <tr>
                            <th>DNI</th>
                            <th>Apellidos</th>
                            <th>Nombres</th>
                            <th>Telefono</th>
                            <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($preapoderados as $preapod)
                            <tr>
                                <td>{{$preapod->preapod_identificacion}}</td>
                                <td>{{$preapod->preapod_ape}}</td>
                                <td>{{$preapod->preapod_nom}}</td>
                                <td>{{$preapod->preapod_tel}}</td>
                                <td>
                                    <a href="{{url('verdocumento/'.$preapod->preapod_id)}}" title="Ver Preinscripcion" class="btn btn-sm btn-outline-info"><i class="fa fa-file-text"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
