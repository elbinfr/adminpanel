<div class="row">
    <div class="col-md-12">
        <div class="block-flat">
            <div class="header">
                <h4>Nuevo Cliente</h4>
            </div>
            <div class="content">
                {!! Form::open(['url' => '/clientes', 'method' => 'POST', 'class' => 'form-crud']) !!}
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>