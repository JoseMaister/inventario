<div class="main-container">
            <div class="pd-ltr-20 xs-pd-20-10">
                <div class="min-height-200px">
                    
                    <!-- basic table  Start -->
                    <div class="pd-20 card-box mb-30">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Usuarios</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">

                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <p style="display: inline;">
                                    Nombre:
                                    <input type="radio" class="flat" name="rbBusqueda" id="rbNombre" value="nombre" checked />
                                    No. Empleado:
                                    <input type="radio" class="flat" name="rbBusqueda" id="rbNoEmpleado" value="no_empleado" />
                                    Correo:
                                    <input type="radio" class="flat" name="rbBusqueda" id="rbCorreo" value="correo" />
                                </p>

                                <input id="txtBusqueda" style="display: inline;" type="text">


                                <p style="margin-left: 10px; display: inline;">
                                    Ver usuarios inactivos:
                                    <input type="checkbox" class="flat" id="cbActivo"/>
                                </p>

                                <button onclick="buscar()" style="display: inline;" class="btn btn-success" type="button"><i class="fa fa-search"></i> Buscar</button>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

         <div class="min-height-200px">
                    
                    <!-- basic table  Start -->
                    <div class="pd-20 card-box mb-30">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_content">

                            <div class="table-responsive">
                                <table id="tblUsuarios" class="table table-hover">
                                    <thead>
                                        <tr class="headings">
                                            <th class="column-title">Foto</th>
                                            <th class="column-title">Nombre</th>
                                            <th class="column-title">No. Empleado</th>
                                            <th class="column-title">Departamento</th>
                                            <th class="column-title">Puesto</th>
                                            <th class="column-title">Correo</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    if(false) {
                                     //foreach ($usuarios->result() as $elem) { 
                                    if(false) { ?>
                                     

                                            <tr class="even pointer">
                                                <td><a href="<?= base_url('usuarios/ver/'.$elem->id) ?>"><img src=<?= 'data:image/bmp;base64,' . base64_encode($elem->foto); ?> class="avatar" alt="Avatar"></a></td>
                                                <td>
                                                    <a><?= strtoupper($elem->User) ?></a><br/>
                                                    <?php $date = date_create($elem->ultima_sesion); ?>
                                                    <small>Ultima Sesión: <?= date_format($date, 'd/m/Y h:i A'); ?></small>
                                                </td>
                                                <td><?= $elem->no_empleado ?></td>
                                                <td><?= $elem->departamento ?></td>
                                                <td><?= $elem->puesto ?></td>
                                                <td><?= $elem->correo ?></td>
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
        </div>
      


<script>
    $(function(){
        load();
    });
</script>
</body>
</html>
