<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header <?php if($error) echo "alert"; ?> <?php echo "alert-".$error; ?>"><?php echo $msg; ?></h3>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading ">
                Para poder agregar un nuevo materiale es necesario proporcionar los datos requeridos
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">
                        <form role="form" id="material" action="<?php echo URL::base(); ?>backend/materiales/editar/<?php echo $material->id_catmaterial; ?>" method="POST">
                            <div class="form-group">
                                <label>Codigo<span class="required">*</span></label>
                                <input class="form-control" name="cod_sap" value="<?php echo $material->cod_producto; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Nombre<span class="required">*</span></label>
                                <input class="form-control" name="dsc_nombre" value="<?php echo $material->dsc_nombre; ?>">
                            </div>
                            <div class="form-group">
                                <label>Descripción</label>
                                <textarea class="form-control" rows="3" name="dsc_descripcion"><?php echo $material->dsc_descripcion; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Familia<span class="required">*</span></label>
                                <select class="form-control" name="id_catfamilia">
                                    <option value="">Seleccion una familia...</option>
                                     <?php foreach($familias as $familia): ?>
                                        <option value="<?php echo $familia->id_catfamilia; ?>" <?php if($familia->id_catfamilia==$material->id_catfamilia) echo "selected"; ?>>
                                            <?php echo $familia->dsc_descripcion; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Unidad <span class="required">*</span></label>
                                <select class="form-control" name="id_catunidad">
                                    <option value="">Seleccion una unidad...</option>
                                    <?php foreach($unidades as $unidad): ?>
                                        <option value="<?php echo $unidad->id_catunidad; ?>" <?php if($unidad->id_catunidad==$material->id_catunidad) echo "selected"; ?>>
                                            <?php echo $unidad->dsc_nombre; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            

                            <div id="proveedores" >
                            <?php $i=1; foreach($provs as $prov): ?>
                            <div class="provedores_form" id="div<?php echo $i; ?>">
                            <button type="button" class="btn btn-default eliminar" id="<?php echo $i; ?>" style="float:right;margin-top:25px;background:red;border-color:red;">X</button>
                            <input type="hidden" id="id<?php echo $i; ?>" value="<?php echo $prov->id_catmatprov; ?>" name="id[]">
                            <div class="form-group">
                                <label>Razón social de la empresa <span class="required">*</span></label>
                                <select class="form-control" name="id_catproveedor[]" style="width:90%">
                                    <option value="">Seleccion un proveedor...</option>
                                     <?php foreach($proveedores as $proveedor): ?>
                                        <option value="<?php echo $proveedor->id_catproveedor; ?>" <?php if($prov->id_proveedor==$proveedor->id_catproveedor) echo "selected"; ?>>
                                            <?php echo $proveedor->dsc_razon_social; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Precio <span class="required">*</span></label>
                                <input class="form-control" type="text" name="dsc_precio[]" value="<?php echo $prov->dsc_precio; ?>">
                                </select>
                            </div>

                            </div>
                            <?php $i++; endforeach; ?>
                            <button type="button" class="btn btn-default agregar_proveedor" style="float:right;">AGREGAR PROVEEDOR</button>
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

        $('.eliminar').click(function(){
            var id = $(this).attr('id');
            var id_catmatprov = $('#id'+id).val();
            $.post(URLSITE+'backend/materiales/eliminarp',{id:id_catmatprov},function(){
                $('#div'+id).remove();
            });
            
        });

        $('.agregar_proveedor').click(function(){
            var num = $('.provedores_form').length+1;
            $.post(URLSITE+'backend/materiales/proveedor',{num:num},function(data){
                $('#proveedores').prepend(data);
            });
         });


         $("#material").validate({
            rules: {
                cod_sap:'required',
                dsc_nombre: 'required',
                id_catfamilia: 'required',
                id_catunidad: 'required',
                id_catproveedor: 'required',                      
            },
            messages:{
                cod_sap:{
                    required:'Campo requerido',
                },
                dsc_nombre:{
                    required:'Campo requerido',
                },
                id_catfamilia:{
                    required:'Campo requerido',
                },
                id_catunidad:{
                    required:'Campo requerido',
                },
                id_catproveedor:{
                    required:'Campo requerido',
                },
            },       
        });
    });
</script>