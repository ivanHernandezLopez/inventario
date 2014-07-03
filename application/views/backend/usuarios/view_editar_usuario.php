<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header <?php if($error) echo "alert"; ?> <?php echo "alert-".$error; ?>"><?php echo $msg; ?></h3>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading ">
                Para poder agregar un nuevo usuario con permisos al sistema es necesario proporcionar los datos requeridos
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">
                        <form role="form" id="perfil" action="<?php echo URL::base(); ?>backend/usuarios/editar/<?php echo $usuario->id_catusuario; ?>" method="POST">
                            <div class="form-group">
                                <label>Codigo </label>
                                <input class="form-control" name="cod_usuario" value="<?php echo $usuario->cod_usuario; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Nombre <span class="required">*</span></label>
                                <input class="form-control" name="dsc_nombre" value="<?php echo $usuario->dsc_nombre; ?>">
                            </div>
                            <div class="form-group">
                                <label>Apellido Paterno</label>
                                <input class="form-control" name="dsc_apellido_pat" value="<?php echo $usuario->dsc_apellido_pat; ?>">
                            </div>
                            <div class="form-group">
                                <label>Apellido Materno</label>
                                <input class="form-control" name="dsc_apellido_mat" value="<?php echo $usuario->dsc_apellido_mat; ?>">
                            </div>
                            <div class="form-group">
                                <label>Correo <span class="required">*</span></label>
                                <input class="form-control" name="dsc_correo" value="<?php echo $usuario->dsc_correo; ?>">
                            </div>
                            <div class="form-group">
                                <label>Contraseña</label>
                                <input type="password"  value="" class="form-control" name="dsc_contrasena" id="password">
                            </div>
                            <div class="form-group">
                                <label>Repetir contraseña</label>
                                <input type="password"  class="form-control" name="dsc_contrasena_repit">
                            </div>
                            <button type="submit" class="btn btn-default">Guardar</button>
                            <button type="reset" class="btn btn-default">Cancelar</button>
                        </form>
                    </div>
                    
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<script>
    $(document).ready(function(){
         $("#perfil").validate({
            rules: {
                dsc_nombre: 'required',
                dsc_correo: {
                    required:true,
                    email:true,
                },               
                dsc_contrasena_repit:{
                    equalTo:'#password',
                }          
            },
            messages:{
                dsc_nombre:{
                    required:'Campo requerido',
                },
                dsc_correo:{
                    required:'Campo requerido.',
                    email:'Correo no valido.'
                },
                dsc_contrasena:{
                    required:'Campo requerido.',
                },
                 dsc_contrasena_repit:{
                    required:'Campo requerido.',
                    equalTo:'Introduzca misma contraseña'
                }
            },       
        });
    });
</script>