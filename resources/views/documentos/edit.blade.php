<div class="modal fade" id="modal-delete-{{$pad->docum_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Estado</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{url('documentos/'.$pad->docum_id)}}" method="POST">
                @method('PATCH')
                {{ csrf_field() }}
                @if (count($errors)>0)
                    <div class="alert alert-danger">
                        <p>Corregir los siguientes campos:</p>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="modal-body">
                    <label class="col-md-4 col-form-label">Estado</label>
                    <div class="col-md-7">
                        <select class="form-control" id="" name="estado">
                            <option value="" hidden>--- Seleccione ---</option>
                            <option value="0">Pendiente</option>
                            <option value="1">Rechazado</option>
                            <option value="2">Aceptado</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <button class="btn btn-primary" type="submit">
                            <span class="d-none spinner-border spinner-border-sm" role="status" aria-hidden="true">                                                                            </span>
                            Enviar
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.modal-content-->
    </div>
    <!-- /.modal-dialog-->
</div>
