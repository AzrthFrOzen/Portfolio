    <div class="container">
        <form action="{{URL.'permiso/save'}}" method="post" id="myForm">
            <div class="form-group" hidden>
                <input type="hidden" name="IdPermiso" value="{{$data->IdPermiso}}">
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="IdTipo"">Nivel de Usuario</label>
                        <select name="IdTipo" id="Tipo">
                            @foreach ($tipo as $item)
                                <option value="{{$item->IdTipo}}" {{selected($item->IdTipo, $IdTipo)}}>
                                    {{$item->Nombre}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Tablas">Permisos</label>
                        <input type="text" name="Tablas" id="Tablas" value="{{$data->Tablas}}">
                        <div class="messages"></div>
                    </div>                  
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="{{URL}}js/scripts/validate.js"></script>
    <script src="{{URL}}js/scripts/show_errors_validations.js"></script>
    <script src="{{URL}}js/scripts/permiso.js"></script>