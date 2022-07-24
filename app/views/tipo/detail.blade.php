<div class="container">
    <form action="{{URL.'tipo/save'}}" method="post" id="myForm">
        <div class="form-group" hidden>
            <input type="hidden" name="IdTipo" value="{{$data->IdTipo}}">
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="Nombre"">Nombre</label>
                    <input type="text" name="Nombre" id="Nombre" value="{{$data->Nombre}}">
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
    <script src="{{URL}}js/scripts/tipo.js"></script>