@extends('plantilla.plantilla')
@section('contenido')
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <Strong>Documentos del alumno: </Strong>
                </div>
                <div class="card-body">
                    <table class="table table-responsive-sm table-hover table-sm" id="dataTable">
                        <thead>
                        <tr>
                            <th>Identificacion</th>
                            <th>Apellidos</th>
                            <th>Nombres</th>
                            <th>Sexo</th>
                            <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($alumnos as $a)
                        <tr>
                            <td>{{$a->prealum_identificacion}}</td>
                            <td>{{$a->prealum_ape}}</td>
                            <td>{{$a->prealum_nom}}</td>
                            <td>
                                @if($a->prealum_sexo==0)
                                    Femenino
                                @else
                                    Masculino
                                @endif
                            </td>
                            <td>
                                <a href="{{url('ListarDocumentos')}}" title="Ver Preinscripcion" class="btn btn-sm btn-outline-info"><i class="fa fa-file-text"></i></a>
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
