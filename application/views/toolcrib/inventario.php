<div class="main-container">
            <div class="pd-ltr-20 xs-pd-20-10">
                <div class="min-height-200px">
                    
                    <!-- basic table  Start -->
                    <div class="pd-20 card-box mb-30">
                        <div class="clearfix mb-20">
                            <div class="pull-left">
                                <h2>Catalogo de Productos</h2>
                            </div>
                            <div class="pull-right">
                                <p style="display: inline;">
                                        Producto: 
                                        <input type="radio" class="flat" name="rbBusqueda" id="prod" value="prod"  />
                                        Marca: 
                                        <input type="radio" class="flat" name="rbBusqueda" id="marca" value="marca"/>
                                        Modelo: 
                                        <input type="radio" class="flat" name="rbBusqueda" id="modelo" value="modelo"/>
                                        Proveedor: 
                                        <input type="radio" class="flat" name="rbBusqueda" id="prov" value="prov"/>
                                    
                                    </p>

                                    <input id="txtBuscar" style="display: inline;" type="text" name="txtBuscar">


                                    <button id="btnBuscar" onclick="buscar()" style="display: inline;" class="btn btn-success btn-sm" type="button"><i class="fa fa-search"></i> Buscar</button>
                                    <a href=<?= base_url("toolcrib/producto_nuevo"); ?>><button id="send" type="button" class="btn btn-primary btn-sm">Agregar Nuevo Producto</button></a>
                            </div>
                        </div>
                        <table class="table">
                                  <thead>
                                        <tr class="headings">
                                            <th class="column-title text-center">Codigo</th>
                                            <th class="column-title text-center">Producto</th>
                                            <th class="column-title text-center">Descripcion</th>
                                            <th class="column-title text-center">Proveedor</th>
                                            <th class="column-title text-center">Marca</th>
                                            <th class="column-title text-center">Modelo</th>
                                            
                                            <th class="column-title text-center">Precio</th>
                                            <th class="column-title text-center">Unidad de Medida</th>
                                            
                                            
                                            
                                            <th class="column-title text-center">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    if($productos) { $i = 1;
                                     foreach ($productos->result() as $elem) { ?>

                                            <tr class="even pointer">
                                                <td  class="text-center"><?= $elem->codigo ?></td>
                                                <td  class="text-center"><?= $elem->producto ?></td>
                                                <td style="width: 500px;"><?= $elem->descripcion ?></td>
                                                <td  class="text-center"><?= $elem->proveedor ?></td>
                                                <td  class="text-center"><?= $elem->marca ?></td>
                                                <td  class="text-center"><?= $elem->modelo ?></td>
                                                
                                                <td  class="text-center"><?= "$ ".$elem->precio ?></td>
                                                <td  class="text-center"><?= $elem->um ?></td>
                                                
                                                
                                                
                                                
                                                <td class="text-center">
                                                <a href=<?= base_url("toolcrib/verProducto/".$elem->idProducto); ?>><button type="button"class="btn btn-success btn-sm"><i class="fa fa-eye"></i> Existencias </button></a>
                                                <a href=<?= base_url("toolcrib/modificarProd/".$elem->idProducto); ?>><button type="button"class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Editar </button></a>
                                                
                                                </td>
                                            </tr>
                                    <?php $i++; }
                                      }
                                    ?>
                                    </tbody>

                                </table>
                        