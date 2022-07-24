    <div class="container">
        <form action="{{URL.'cliente/save'}}" method="post" id="myForm">
            <div class="form-group" hidden>
                <input type="hidden" name="IdCliente" value="{{$data->IdCliente}}">
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="Nombres"">Nombres</label>
                        <input type="text" name="Nombres" id="Nombres" value="{{$data->Nombres}}">
                        <div class="messages"></div>
                    </div>
                    <div class="form-group">
                        <label for="Apellidos"">Apellidos</label>
                        <input type="text" name="Apellidos" id="Apellidos" value="{{$data->Apellidos}}">
                        <div class="messages"></div>
                    </div>
                    <div class="form-group">
                        <label for="Direccion"">Dirección</label>
                        <input type="text" name="Direccion" id="Direccion" value="{{$data->Direccion}}">
                        <div class="messages"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="IdUsuario"">Usuario Creador</label>
                        <select name="IdUsuario" id="Usuario">
                            @foreach ($usuario as $item)
                                <option value="{{$item->IdUsuario}}" {{selected($item->IdUsuario, $IdUsuario)}}>
                                    {{$item->Usuario}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Telf"">Teléfono</label>
                        <input type="text" name="Telf" id="Telf" value="{{$data->Telf}}">
                        <div class="messages"></div>
                    </div>
                    <div class="form-group">
                        <label for="Ubicacion"">Ubicacion</label>
                        <input type="text" name="Ubicacion" id="Ubicacion" value="{{$data->Ubicacion}}">
                        <div class="messages"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="Nacimiento"">Fecha de Nacimiento</label>
                        <input type="date" name="Nacimiento" id="Nacimiento" value="{{$data->Nacimiento}}">
                        <div class="messages"></div>
                    </div>
                    <div class="form-group">
                        <label for="DNI"">DNI</label>
                        <input type="text" name="DNI" id="DNI" value="{{$data->DNI}}">
                        <div class="messages"></div>
                    </div>
                    <div class="form-group">
                        <label for="Sexo"">Sexo</label>
                        <input type="text" name="Sexo" id="Sexo" value="{{$data->Sexo}}">
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
    <script src="{{URL}}js/scripts/cliente.js"></script>