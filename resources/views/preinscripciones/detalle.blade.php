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
                                        <div class="form-group row">
                                            <div class="col-md-2">
                                                <label for="">Tipo de Documento</label>
                                                <select class="form-control">
                                                    <option value="" hidden>-- Seleccione --</option>
                                                    <option value="0">Documento Nacional de Identidad</option>
                                                    <option value="1">Pasaporte</option>
                                                    <option value="2">Carnet de Extranjeria</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <label for="">N° de Documento</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="">Nombres</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="">Apellidos</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-2">
                                                <label for="">Celular</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="">Correo</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="">Sexo</label>
                                                <select class="form-control">
                                                    <option value="" hidden>-- Seleccione --</option>
                                                    <option value="0">Femenino</option>
                                                    <option value="1">Masculino</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="">Estado Civil</label>
                                                <select class="form-control">
                                                    <option value="" hidden>-- Seleccione --</option>
                                                    <option value="0">Soltero</option>
                                                    <option value="1">Casado</option>
                                                    <option value="2">Divorsiado</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-3">
                                                <label for="">Dirección</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="">Fecha de Nacimiento</label>
                                                <input class="form-control" type="date">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="">Centro de Labores</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="">Solvencia Económica</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Alumnado</h5>
                                        </div>
                                        <hr>
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
