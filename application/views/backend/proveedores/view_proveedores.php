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
                                <th colspan="5">Datos del usuario</th>
                                <th colspan="2" width="60px">Acciones</th>
                            </tr>
                            <tr>
                                <th>Nombre</th>
                                <th>Estado</th>
                                <th>Municipio</th>
                                <th>Colonia</th>
                                <th>Correo</th> 
                                <th width="30px">Editar</th>
                                <th width="30px">Eliminar</th>                              
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($proveedores as $proveedor): ?>
                            <tr>
                                <td><?php echo $proveedor->dsc_nombre." ".$proveedor->dsc_apellido_pat." ".$proveedor->dsc_apellido_mat; ?></td>
                                <td><?php echo $proveedor->id_catestado; ?></td>
                                <td><?php echo $proveedor->id_detmunicipio; ?></td>
                                <td><?php echo $proveedor->dsc_colonia; ?></td>
                                <td><?php echo $proveedor->dsc_correo; ?></td>
                                <td>
                                    <a href="<?php echo URL::base(); ?>backend/proveedores/editar/<?php echo $proveedor->id_catproveedor; ?>" title="Editar usuario">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </a>
                                </td>
                                <td>                                   
                                    <a href="javascript:void(0);" id="<?php echo $proveedor->id_catproveedor; ?>" class="delete" title="Eliminar usuario">
                                        <span class="glyphicon glyphicon-remove"></span>
                                    </a>
                                </td>
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
<script>
    $(document).ready(function(){
        $('.delete').click(function(){
            var id = $(this).attr('id');         
            alertify.confirm("Desea eliminar a este proveedor", function (e) {
                if (e) {
                    $.post(URLSITE+'backend/proveedores/eliminar/'+id,{},function(data){
                        alertify.alert("Proveedor eliminado correctamente",function(){
                        window.location = URLSITE+'backend/proveedores';                    
                    })
                    
                    });
                } else {
                    alertify.alert("Acción cancelada por el usuario");
                }
            });
        });
    });
</script>
