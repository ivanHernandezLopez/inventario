<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header <?php if($error) echo "alert"; ?> <?php echo "alert-".$error; ?>"><?php echo $msg; ?></h3>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading ">
                Para poder agregar un nuevo proveedor es necesario proporcionar los datos requeridos
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">
                        <form role="form" id="proveedor" action="<?php echo URL::base(); ?>backend/proveedores/editar/<?php echo $p->id_catproveedor; ?>" method="POST">
                            <div class="form-group">
                                <label>Número de proveedor SAP</label>
                                <input class="form-control" name="num_proveedor" value="<?php echo $p->num_proveedor ;?>">
                            </div>
                            <div class="form-group">
                                <label>Razón social de la empresa<span class="required">*</span></label>
                                <input class="form-control" name="dsc_razon_social" value="<?php echo $p->dsc_razon_social ;?>">
                            </div>
                            <div class="form-group">
                                <label>RFC</label>
                                <input class="form-control" name="rfc_empresa" value="<?php echo $p->rfc_empresa ;?>">
                            </div>
                            <div class="form-group">
                                <label>Dirección<span class="required">*</span></label>
                                <textarea class="form-control" type="text" name="dsc_domicilio" ><?php echo $p->dsc_domicilio; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Nombre 1<span class="required">*</span></label>
                                <input class="form-control" type="text" name="nombre1" value="<?php echo $p->nombre1; ?>">
                            </div>
                            <div class="form-group">
                                <label>Nombre 2</label>
                                <input class="form-control" type="text" name="nombre2" value="<?php echo $p->nombre2; ?>">
                            </div>
                            <div class="form-group">
                                <label>Telefono 1<span class="required">*</span></label>
                                <input class="form-control" type="text" name="telefono1" value="<?php echo $p->telefono1; ?>">
                            </div>
                            <div class="form-group">
                                <label>Telefono 2</label>
                                <input class="form-control" type="text" name="telefono2" value="<?php echo $p->telefono2; ?>">
                            </div>
                            <div class="form-group">
                                <label>Telefono 3</label>
                                <input class="form-control" type="text" name="telefono3" value="<?php echo $p->telefono3; ?>">
                            </div>
                            <div class="form-group">
                                <label>Correo electronico 1<span class="required">*</span></label>
                                <input class="form-control" type="text" name="correo1" value="<?php echo $p->correo1; ?>">
                            </div>
                            <div class="form-group">
                                <label>Correo electronico 2</label>
                                <input class="form-control" type="text" name="correo2" value="<?php echo $p->correo2; ?>">
                            </div>
                            <div class="form-group">
                                <label>Correo electronico 3</label>
                                <input class="form-control" type="text" name="correo3" value="<?php echo $p->correo3; ?>">
                            </div>
                            
                            
                            <div class="form-group">
                                <label>Comercializadora<span class="required">*</span></label>
                                <label class="radio-inline">
                                <input id="optionsRadiosInline1" type="radio"  value="si" name="dsc_comercializadora" <?php if($p->dsc_comercializadora=="si") echo "checked"; ?>>
                                Si
                                </label>
                                <label class="radio-inline">
                                <input id="optionsRadiosInline1" type="radio"  value="no" name="dsc_comercializadora" <?php if($p->dsc_comercializadora=="no") echo "checked"; ?>>
                                No
                                </label>
                            </div>

                            <div class="form-group">
                                <label>Material a cotizar</label>
                                <textarea class="form-control" type="text" name="dsc_materiales"><?php echo $p->dsc_materiales; ?></textarea>
                            </div>
                           <?php if($usuario->tipo_usuario==1 OR $usuario->tipo_usuario==2): ?>
                            <button type="submit" class="btn btn-default">Guardar</button>
                            <button type="reset" class="btn btn-default">Cancelar</button>
                            <?php endif; ?>
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
        $('#proveedor').validate({
             rules: {               
                dsc_razon_social: 'required',                
                dsc_domicilio:'required',
                nombre1:'required',
                telefono1:'required',
                correo1:'required',
                dsc_comercializadora:'required',        
            },            
        });
        
        
    });
</script>