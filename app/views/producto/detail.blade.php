    <div class="container">
        <form action="{{URL.'producto/save'}}" method="post" id="myForm">
            <div class="form-group" hidden>
                <input type="hidden" name="IdProducto" value="{{$data->IdProducto}}">
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="Nombre"">Nombre</label>
                        <input type="text" name="Nombre" id="Nombre" value="{{$data->Nombre}}">
                        <div class="messages"></div>
                    </div>
                    <div class="form-group">
                        <label for="Descripcion"">Descripción</label>
                        <input type="text" name="Descripcion" id="Descripcion" value="{{$data->Descripcion}}">
                        <div class="messages"></div>
                    </div>
                    <div class="form-group">
                        <label for="IdMarca"">Marca</label>
                        <select name="IdMarca" id="Marca">
                            @foreach ($marcas as $item)
                                <option value="{{$item->IdMarca}}" {{selected($item->IdMarca, $IdMarca)}}>
                                    {{$item->Nombre}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="IdCateg"">Categoría</label>
                        <select name="IdCateg" id="Categoria">
                            @foreach ($categorias as $item)
                                <option value="{{$item->IdCateg}}" {{selected($item->IdCateg, $IdCateg)}}>
                                    {{$item->Nombre}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="PrecioCosto"">Precio Costo</label>
                        <input type="number" step="0.01" name="PrecioCosto" id="PrecioCosto" value="{{$data->PrecioCosto}}">
                        <div class="messages"></div>
                    </div>
                    <div class="form-group">
                        <label for="PrecioVenta"">Precio Venta</label>
                        <input type="number" step="0.01" name="PrecioVenta" id="PrecioVenta" value="{{$data->PrecioVenta}}">
                        <div class="messages"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="Stock"">Stock</label>
                        <input type="number" step="1" name="Stock" id="Stock" value="{{$data->Stock}}">
                        <div class="messages"></div>
                    </div>
                    <div class="form-group">
                        <label for="StockMinimo"">Stock Mínimo</label>
                        <input type="number" step="1" name="StockMinimo" id="StockMinimo" value="{{$data->StockMinimo}}">
                        <div class="messages"></div>
                    </div>
                    <div class="form-group">
                        <label for="estado"">Estado</label>
                        <input type="checkbox" name="estado" id="estado" {{checked($data->estado)}}>
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
    <script src="{{URL}}js/scripts/producto.js"></script>