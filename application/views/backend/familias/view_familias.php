<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">Catalogo de familias</h3>
        <p>
            <a href="<?php echo URL::base(); ?>backend/familias/agregar">
                <button class="btn btn-primary btn-lg" type="button">Agregar</button>
            </a>
        </p>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Catalogo de familias 
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th colspan="4" width="300px">Datos de las familias</th>
                                <th colspan="2" width="40px">Acciones</th>
                            </tr>
                            <tr>
                                <th>ID</th>
                                <th width="50px">Num. de familia</th>
                                <th width="200px">Descripción</th>
                                <th width="50px">Responsable</th>
                               
                                <th width="20px">Editar</th>
                                <th width="20px">Eliminar</th>                              
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($familias as $familia): ?>
                            <tr>
                                 <td><?php echo $familia->id_catfamilia; ?></td>
                                <td><?php echo $familia->num_familia; ?></td>
                                <td><?php echo $familia->dsc_descripcion; ?></td>
                                <td><?php echo $familia->nom_responsable; ?></td>
                                <td>
                                    <a href="<?php echo URL::base(); ?>backend/familias/editar/<?php echo $familia->id_catfamilia; ?>" title="Editar usuario">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </a>
                                </td>
                                <td>                                   
                                    <a href="javascript:void(0);" id="<?php echo $familia->id_catfamilia; ?>" class="delete" title="Eliminar usuario">
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
            alertify.confirm("Desea eliminar a esta familia", function (e) {
                if (e) {
                    $.post(URLSITE+'backend/familias/eliminar/'+id,{},function(data){
                        alertify.alert("Familia eliminado correctamente",function(){
                        window.location = URLSITE+'backend/familias';                    
                    })
                    
                    });
                } else {
                    alertify.alert("Acción cancelada por el usuario");
                }
            });
        });
    });
</script>
