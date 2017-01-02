<div class="row">
    <div class="col-md-12">
        <div class="block-flat">
            <div class="header">
                <h4>Clientes Registrados</h4>
            </div>
            <div class="content">
                <div class="table-responsive">
                    <table class="table table-bordered" id="clientes-dt" style="width: 100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>DNI</th>
                                <th>Ap. Paterno</th>
                                <th>Ap. Materno</th>
                                <th>Nombres</th>
                                <th>Direcci&oacute;n</th>
                                <th>Tel&eacute;fono</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    (function(){
        var clientes_dt = "#clientes-dt";
        var url_base = "{{ url('/clientes') }}";
        var url_api = "/api/clientes";
        var token = "{{ csrf_token() }}";

        var columns = [
            {
                "className":      'details-control',
                "orderable":      false,
                "searchable": false,
                "data":           null,
                "defaultContent": ''
            },
            {data: 'dni'},
            {data: 'paterno'},
            {data: 'materno'},
            {data: 'nombres'},
            {data: 'direccion'},
            {data: 'telefono'}
        ];

        function load(){
            changeHeaderPage();
        }

        initDataTableServerSideCRUD(clientes_dt, url_base, url_api, token, columns);
        setTimeout(load, 0);
    })();
</script>