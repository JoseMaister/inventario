<!-- page content -->
<div class="main-container">
            <div class="pd-ltr-20 xs-pd-20-10">
                <div class="min-height-200px">
                    
                    <!-- basic table  Start -->
                    <div class="pd-20 card-box mb-30">
            <div class="x_content">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Tool Crib Pedidos</h2>
                            <div class="clearfix"></div>
                            
                        
                        <a href=<?= base_url("toolcrib/reporte"); ?>><button id="send" type="submit" class="btn btn-primary">Reporte</button></a>
                        </div>



                        <div class="x_content" >





                            <div class="table-responsive" >
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="headings">
                                            
                                            <!--<th class="column-title">Responsable</th>-->
                                            <th >No. Pedido</th>
                                            <th >No. Empleado</th>
                                            <th >Usuario</th>
                                            <th >Fecha</th>
                                            <th >Estatus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if ($pedido) {
                                        foreach ($pedido->result() as $elem) {
                                            ?>
                                                <tr class="even pointer">
                                                    
                                                    <td><?= $elem->idToolCrib ?></td>
                                                    <td><?= $elem->no_empleado ?></td>
                                                    <td><?= $elem->nombre ?></td>
                                                    <td><?= $elem->fecha ?></td>
                                                    <?php
                                                    if($elem->estatus =="APROBADO"){
                                                        ?>
                                                    <td><a href="<?= base_url('toolcrib/verPedido/' . $elem->idToolCrib) ?>" class="btn btn-success"><?= $elem->estatus ?></a></td>
                                                <?php }
                                                else{
                                                    ?>
                                                    <td><button class="btn btn-warning"><?= $elem->estatus ?></button></td>

                                              <?php  }
                                            ?>
                                                </tr>

                                        <?php }
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
<!-- /page content -->

<!-- footer content -->

<!-- /footer content -->
</div>
</div>



</body>
</html>
