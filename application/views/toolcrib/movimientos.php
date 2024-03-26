<div class="main-container">
            <div class="pd-ltr-20 xs-pd-20-10">
                <div class="min-height-200px">
                    
                    <!-- basic table  Start -->
                    <div class="pd-20 card-box mb-30">
            <div class="x_content">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Movimientos</h2>
                            
                           <form method="POST" action=<?= base_url('toolcrib/excelMov') ?> class="form-horizontal form-label-left" novalidate enctype="multipart/form-data">
                             <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input id="fecha1" style="display: inline;" type="date" name="fecha1">
                                    <input id="fecha2" style="display: inline;" type="date" name="fecha2">


                                    <button id="btnBuscar" onclick="buscar()" style="display: inline;" class="btn btn-success" type="button"><i class="fa fa-search"></i> Buscar</button>
                                    <button type="submit" class="btn btn-warning"><i class="fa fa-pencil"></i> Exportar </button>

                                </div>
                            </form>    
                                
                            <div class="clearfix"></div>
                        </div>

                        <div class="x_content">
                            <div class="table-responsive">
                                <table id="tabla" class="table table-bordered">
                                    <thead>
                                        <tr class="headings">
                                            <th class="column-title text-center">Tipo</th>
                                            <th class="column-title text-center">Usuario</th>
                                            <th class="column-title text-center">Producto</th>
                                            <th class="column-title text-center">Local</th>
                                            <th class="column-title text-center">Cantidad</th>
                                            <th class="column-title text-center">Comentario</th>
                                            <th class="column-title text-center">Fecha</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    if($movimientos) { $i = 1;
                                     foreach ($movimientos->result() as $elem) { ?>

                                            <tr class="even pointer">
                                                <td  class="text-center"><?= $elem->tipo ?></td>
                                                <td  class="text-center"><?= $elem->nombre ?></td>
                                                <td class="text-center"><?= $elem->producto ?></td>
                                                <td  class="text-center"><?= $elem->local ?></td>
                                                <td  class="text-center"><?= $elem->cantidad ?></td>
                                                <td  class="text-center"><?= $elem->comentario ?></td>
                                                <td  class="text-center"><?= $elem->fecha ?></td>
                                                
                                            </tr>
                                    <?php $i++; }
                                      }
                                    ?>
                                    </tbody>

                                </table>

                            </div>


                                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="modal" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title">Editar Producto</h4>
        </div>
        <form id="formContacto" class="form-horizontal form-label-left">
        <div class="modal-body">
        <input type="hidden" id="id" name="id"/>
        <input type="hidden" id="ren" name="ren"/>
        <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Producto</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input maxlength="150" style="text-transform: uppercase;" id="NombreProducto" class="form-control col-md-7 col-xs-12" name="NombreProducto" placeholder="" required="required" type="text">
        </div>
        </div>
        
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipo">Cantidad</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input maxlength="150" style="text-transform: uppercase;" id="Cantidad" class="form-control col-md-7 col-xs-12" name="Cantidad" placeholder="" required="required" type="number">                
            </div>
        </div>

        <br>
       


        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button id="btnModalAgregar" onclick="registrar()" type="button" class="btn btn-primary" data-dismiss="modal">Agregar</button>
        <button id="btnModalEditar" onclick="editar()" type="button" class="btn btn-warning" data-dismiss="modal">Editar</button>
        </div>
        </form>
    </div>
    </div>
</div>
<!-- /page content -->

<!-- footer content -->
<!-- /footer content -->
</div>
</div>


<script>
      function buscar(){
    var fecha1 = $("#fecha1").val();
    var fecha2 = $("#fecha2").val();
    
    if(document.getElementById("fecha1").value.length == 0 || document.getElementById("fecha2").value.length == 0){
        alert('Los campos vacios');
    }else{
    var URL = base_url + "toolcrib/mov";
    $('#tabla tbody tr').remove();
   



    $.ajax({
        type: "POST",
        url: URL,
        data: { fecha1 : fecha1, fecha2 : fecha2 },
        success: function(result) {
            //alert(result);
            if(result)
            {
                var tab = $('#tabla tbody')[0];
                var rs = JSON.parse(result);
                $.each(rs, function(i, elem){
                    var ren = tab.insertRow(tab.rows.length);
                    ren.insertCell(0).innerHTML = elem.tipo;
                    ren.insertCell(1).innerHTML = elem.nombre;
                    ren.insertCell(2).innerHTML = elem.producto;
                    ren.insertCell(3).innerHTML = elem.local;
                    ren.insertCell(4).innerHTML = elem.cantidad;
                    ren.insertCell(5).innerHTML = elem.comentario;
                    ren.insertCell(6).innerHTML = elem.fecha;
                    

                    

                    
                });
            }
            else
            {
                new PNotify({ title: '¡Nada por aquí!', text: 'No se encontraron resultados', type: 'info', styling: 'bootstrap3' });
            }
          },
        error: function(data){
            new PNotify({ title: 'ERROR', text: 'Error', type: 'error', styling: 'bootstrap3' });
            console.log(data);
        },
      });
    }
}
</script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
      document.querySelectorAll('input[type=date]').forEach( node => node.addEventListener('keypress', e => {
        if(e.keyCode == 13) {
          e.preventDefault();
        }
      }))
    });
  </script>

</body>
</html>
