<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header <?php if($error) echo "alert"; ?> <?php echo "alert-".$error; ?>"><?php echo $msg; ?></h3>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading ">
                Para poder agregar un nuevo materiales es necesario proporcionar los datos requeridos
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">
                        <form role="form" id="material" action="<?php echo URL::base(); ?>backend/materiales/agregar" method="POST">
                            <div class="form-group">
                                <label>Codigo SAP<span class="required">*</span></label>
                                <input class="form-control" name="cod_sap" >
                            </div>
                            <div class="form-group">
                                <label>Nombre</label>
                                <input class="form-control" name="dsc_nombre" >
                            </div>
                            <div class="form-group">
                                <label>Descripción</label>
                                <textarea class="form-control" rows="3" name=""></textarea>
                            </div>
                            <div class="form-group">
                                <label>Familia</label>
                                <select class="form-control"></select>
                            </div>
                            <div class="form-group">
                                <label>Unidad <span class="required">*</span></label>
                                <select class="form-control">
                                    <?php foreach($unidades as $unidad): ?>
                                        <option value="<?php echo $unidad->id_catunidad; ?>">
                                            <?php echo $unidad->dsc_nombre; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                           <div class="form-group">
                                <label>Proveedor <span class="required">*</span></label>
                                <input class="form-control" name="dsc_nombre" >
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
         $("#material").validate({
            rules: {
                cod_usuario:'required',
                dsc_nombre: 'required',
                dsc_correo: {
                    required:true,
                    email:true,
                }, 
                dsc_contrasena:'required',              
                dsc_contrasena_repit:{
                    equalTo:'#password',
                }          
            },
            messages:{
                cod_usuario:{
                    required:'Campo requerido',
                },
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