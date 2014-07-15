<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">Catalogo de materiales</h3>
        <p>
            <a href="<?php echo URL::base(); ?>backend/materiales/agregar">
                <button class="btn btn-primary btn-lg" type="button">Agregar</button>
            </a>
        </p>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Catalogo de materiales 
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th colspan="6">Datos del material</th>
                                <th colspan="2" width="60px">Acciones</th>
                            </tr>
                            <tr>
                                <th>ID</th>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Familia</th>
                                <th>Unidad</th>
                                <th>Proveedor</th>  
                                <th width="30px">Editar</th>
                                <th width="30px">Eliminar</th>                              
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($materiales as $material): ?>
                            <tr>
                                <td><?php echo $material->id_catmaterial; ?></td>
                                <td><?php echo $material->cod_producto; ?></td>
                                <td><?php echo $material->dsc_nombre; ?></td>
                                <td><?php echo $material->familia; ?></td>
                                <td><?php echo $material->unidad; ?></td>
                                <td><?php echo $material->proveedor; ?></td>
                                <td>
                                    <a href="<?php echo URL::base(); ?>backend/materiales/editar/<?php echo $material->id_catmaterial; ?>" title="Editar usuario">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </a>
                                </td>
                                <td>                                   
                                    <a href="javascript:void(0);" id="<?php echo $material->id_catmaterial; ?>" class="delete" title="Eliminar usuario">
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
            alertify.confirm("Desea eliminar a este material", function (e) {
                if (e) {
                    $.post(URLSITE+'backend/materiales/eliminar/'+id,{},function(data){
                        alertify.alert("Material eliminado correctamente",function(){
                        window.location = URLSITE+'backend/materiales';                    
                    })
                    
                    });
                } else {
                    alertify.alert("Acción cancelada por el usuario");
                }
            });
        });
    });
</script>
