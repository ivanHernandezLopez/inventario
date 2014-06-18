<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">Catalogo de proveedores</h3>
        <p>
            <a href="<?php echo URL::base(); ?>backend/proveedores/agregar">
                <button class="btn btn-primary btn-lg" type="button">Agregar</button>
            </a>
        </p>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Catalogo de proveedores 
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Descripción</th>
                                <th>Estado</th>
                                <th>Municipio</th>
                                <th>Colonia</th>
                                <th>Correo</th>
                                <th>Pagina web</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($proveedores as $proveedor): ?>
                            <tr>
                                <td><?php echo $proveedor->empresa; ?></td>
                                <td><?php echo $proveedor->estado; ?></td>
                                <td><?php echo $proveedor->municipio; ?></td>
                                <td><?php echo $proveedor->colonia; ?></td>
                                <td><?php echo $proveedor->correo; ?></td>
                                <td><?php echo $proveedor->web; ?></td>
                            </tr> 
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
               
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>

