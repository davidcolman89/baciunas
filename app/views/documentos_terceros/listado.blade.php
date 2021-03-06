@extends('index3')
@section('pagina_titulo')
    Documentos de Terceros
@stop
@section('url_historial')
    <li>{{ link_to_route('home','Inicio') }}</li>
    <li>Documentos de Terceros</li>
@stop
@section('contenido')
    <!-- Widget ID (each widget will need unique ID)-->
    <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-1" data-widget-editbutton="false">

        <header>
            <span class="widget-icon"> <i class="fa fa-table"></i> </span>

            <h2>Listado de Documentos de terceros</h2>

        </header>

        <!-- widget div-->
        <div>

            <!-- widget edit box -->
            <div class="jarviswidget-editbox">
                <!-- This area used as dropdown edit box -->

            </div>
            <!-- end widget edit box -->

            <!-- widget content -->
            <div class="widget-body no-padding">
                <table id="dt-clientes" class="table table-striped table-bordered" width="100%">
                    <thead>
                    <tr>
                        <th class="hasinput" style="">
                            <input type="text" class="form-control" placeholder="Estado del Documento"/>
                        </th>
                        <th class="hasinput" style="">
                            <input type="text" class="form-control" placeholder="#Documento / Cheque"/>
                        </th>
                        <th class="hasinput" style="">
                            <input type="text" class="form-control" placeholder="Fecha Ejecución"/>
                        </th>
                        <th class="hasinput" style="">
                            <input type="text" class="form-control" placeholder="Banco"/>
                        </th>
                        <th class="hasinput" style="">
                            <input type="text" class="form-control" placeholder="Monto"/>
                        </th>
                        <th class="hasinput" style="">
                            <input type="text" class="form-control" placeholder="Cliente"/>
                        </th>
                        <th class="hasinput" style="">
                            <input type="text" class="form-control" placeholder="#Cuenta Bancaria"/>
                        </th>
                    </tr>
                    <tr>
                        <th>Estado</th>
                        <th># Documento/Cheque</th>
                        <th>FechaEje</th>
                        <th>Banco</th>
                        <th>Monto</th>
                        <th>Cliente</th>
                        <th># Cuenta Bancaria</th>
                    </tr>
                    </thead>
                </table>
            </div>
            <!-- end widget content -->

        </div>
        <!-- end widget div -->

    </div>
    <!-- end widget -->

@stop
@section('js')
    <script type="text/javascript">
        $(document).ready(function () {

            /* // DOM Position key index //

             l - Length changing (dropdown)
             f - Filtering input (search)
             t - The Table! (datatable)
             i - Information (records)
             p - Pagination (paging)
             r - pRocessing
             < and > - div elements
             <"#id" and > - div with an id
             <"class" and > - div with a class
             <"#id.class" and > - div with an id and class

             Also see: http://legacy.datatables.net/usage/features
             */

            var oTable = $('#dt-clientes').DataTable({
                "bProcessing": true,
                "sAjaxSource": "{{URL::route('documentos_terceros.listado')}}",
                "aoColumns": [
                    {
                        "mData": "estado",
                        "mRender": function(data, type, full) {
                            return full.estado.Estado;
                        }
                    },
                    {"mData": "NroDocumento"},
                    {
                        "mData": "FechaEje"
                    },
                    {
                        "mData": "banco",
                        "mRender": function(data, type, full) {
                            return full.banco.Banco;
                        }
                    },
                    {"mData": "Monto"},
                    {
                        "mData": "Titular"
                    },
                    {"mData": "NroCuenta"},
                ],
                "columnDefs": [
                    { "type": "html", "targets": 1 }
                ],
                "language": {"url": "{{URL::asset('datatables/json/dataTables.lang.es.json')}}"},
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "Todo"]
                ],
                "iDisplayLength": 25,
                "sDom":
                "<'dt-toolbar'" +
                "<'col-sm-6'l>" +
                "<'col-sm-6'f>" +
                "r" +
                ">" +
                "t" +
                "<'dt-toolbar-footer'<'col-xs-6'i><'col-xs-6'p>>"
            });

            $("#dt-clientes thead th input[type=text]").on('keyup change', function () {

                oTable
                        .column($(this).parent().index() + ':visible')
                        .search(this.value)
                        .draw();

            });

        });
    </script>
@stop