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
                                            <?php echo $familia->dsc_nombre; ?>
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
                           <div class="form-group">
                                <label>Proveedor <span class="required">*</span></label>
                                <select class="form-control" name="id_catproveedor">
                                    <option value="">Seleccion un proveedor...</option>
                                     <?php foreach($proveedores as $proveedor): ?>
                                        <option value="<?php echo $proveedor->id_catproveedor." ".$proveedor->dsc_apellido_pat." ".$proveedor->dsc_apellido_mat; ?>" <?php if($proveedor->id_catproveedor==$material->id_catproveedor) echo "selected"; ?>>
                                            <?php echo $proveedor->dsc_nombre; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
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