<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">Catalogo de usuarios</h3>
        <?php if($usuario->tipo_usuario==1): ?>
        <p>
            <a href="<?php echo URL::base(); ?>backend/usuarios/agregar">
                <button class="btn btn-primary btn-lg" type="button">Agregar</button>
            </a>
        </p>
        <?php endif; ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Catalogo de usuarios activos que tienen acceso al sistema actualmente
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th colspan="6">Datos de los usuarios</th>
                                
                                <th colspan="2" width="60px">Acciones</th>
                                
                            </tr>
                            <tr>
                                <th>ID</th>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Ape. Paterno</th>
                                <th>Ape. Materno</th>
                                <th>Correo</th>
                                
                                <th width="30px">Editar</th>
                                <?php if($usuario->tipo_usuario==1): ?>
                                <th width="30px">Eliminar</th>
                                <?php endif; ?>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($usuarios as $usu): ?>

                            <tr>
                                <td><?php echo $usu->id_catusuario; ?></td>
                                <td><?php echo $usu->cod_usuario; ?></td>
                                <td><?php echo $usu->dsc_nombre; ?></td>
                                <td><?php echo $usu->dsc_apellido_pat; ?></td>
                                <td><?php echo $usu->dsc_apellido_mat; ?></td>
                                <td><?php echo $usu->dsc_correo; ?></td>
                                
                                <td>
                                    <a href="<?php echo URL::base(); ?>backend/usuarios/editar/<?php echo $usuario->id_catusuario; ?>" title="Editar usuario">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </a>
                                </td>
                                <?php if($usuario->tipo_usuario==1): ?>
                                <td>                                  
                                    <a href="javascript:void(0);" id="<?php echo $usu->id_catusuario; ?>" class="delete" title="Eliminar usuario">
                                        <span class="glyphicon glyphicon-remove"></span>
                                    </a>
                                </td>
                                <?php endif; ?>
                                
                                
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
            alertify.confirm("Desea eliminar a este usuario", function (e) {
                if (e) {
                    $.post(URLSITE+'backend/usuarios/eliminar/'+id,{},function(data){
                        alertify.alert("Usuario eliminado correctamente",function(){
                        window.location = URLSITE+'backend/usuarios';                    
                    })
                    
                    });
                } else {
                    alertify.alert("Acción cancelada por el usuario");
                }
            });
        });
    });
</script>