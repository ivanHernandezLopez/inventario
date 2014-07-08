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
                                <label>Codigo SAP<span class="required">*</span></label>
                                <input class="form-control" name="cod_sap" value="<?php echo $p->cod_sap; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Nombre<span class="required">*</span></label>
                                <input class="form-control" name="dsc_nombre" value="<?php echo $p->dsc_nombre; ?>">
                            </div>
                            <div class="form-group">
                                <label>Apellido paterno</label>
                                <input class="form-control" name="dsc_apellido_pat" value="<?php echo $p->dsc_apellido_pat; ?>">
                            </div>
                            <div class="form-group">
                                <label>Apellido materno</label>
                                <input class="form-control" name="dsc_apellido_mat" value="<?php echo $p->dsc_apellido_mat; ?>">
                            </div>
                            <div class="form-group">
                                <label>Estado<span class="required">*</span></label>
                                <select class="form-control" id="estado" name="id_catestado">
                                    <option value="">Seleccione el estado</option>
                                    <?php foreach($estados as $estado): ?>
                                        <option value="<?php echo $estado->id_catestado; ?>" <?php if($edo->id_catestado==$estado->id_catestado) echo 'selected'; ?>>
                                            <?php echo $estado->dsc_nombre; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Municipio<span class="required">*</span></label>
                                <select class="form-control" id="municipios" name="id_detmunicipio">
                                    <option value="<?php echo $municipio->id_detmunicipio; ?>"><?php echo $municipio->dsc_nombre; ?></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Colonia<span class="required">*</span></label>
                                <input class="form-control" name="dsc_colonia" value="<?php echo $p->dsc_colonia; ?>">
                            </div>
                            <div class="form-group">
                                <label>Calle<span class="required">*</span></label>
                                <input class="form-control" name="dsc_calle" value="<?php echo $p->dsc_calle; ?>">
                            </div>
                            <div class="form-group">
                                <label>Número<span class="required">*</span></label>
                                <input class="form-control" name="dsc_numero" value="<?php echo $p->dsc_numero; ?>">
                            </div>
                            <div class="form-group">
                                <label>Codigo postal<span class="required">*</span></label>
                                <input class="form-control" name="dsc_codigo_postal" value="<?php echo $p->dsc_codigo_postal; ?>">
                            </div>
                            <div class="form-group">
                                <label>Correo<span class="required">*</span></label>
                                <input class="form-control" name="dsc_correo" value="<?php echo $p->dsc_correo; ?>">
                            </div>
                            <div class="form-group">
                                <label>Telefono Oficina<span class="required">*</span></label>
                                <input class="form-control" name="tel_oficina" value="<?php echo $p->tel_oficina; ?>">
                            </div>
                            <div class="form-group">
                                <label>Telefono celular<span class="required">*</span></label>
                                <input class="form-control" name="tel_celular" value="<?php echo $p->tel_celular; ?>">
                            </div>
                            <div class="form-group">
                                <label>Comercializadora<span class="required">*</span></label>
                                <label class="radio-inline">
                                <input id="optionsRadiosInline1" type="radio"  value="si" name="dsc_comercializadora" <?php if($p->dsc_comercializadora=="si") echo 'checked'; ?>>
                                Si
                                </label>
                                <label class="radio-inline">
                                <input id="optionsRadiosInline1" type="radio"  value="no" name="dsc_comercializadora" <?php if($p->dsc_comercializadora=="no") echo 'checked'; ?>>
                                No
                                </label>
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
        $('#proveedor').validate({
             rules: {
                cod_sap:'required',
                dsc_nombre: 'required',
                id_catestado :'required',
                id_detmunicipio:'required',
                dsc_colonia:'required',
                dsc_calle:'required',
                dsc_numero:'required',
                dsc_codigo_postal:'required',
                dsc_correo:{
                    required:true,
                    email:true,
                },
                tel_oficina:'required',
                tel_celular:'required',
                dsc_comercializadora:'required',        
            },
            messages:{
                cod_sap:{
                    required:'Campo requerido',
                },
                dsc_nombre:{
                    required:'Campo requerido',
                },
                id_catestado:{
                    required:'Campo requerido',
                },
                id_detmunicipio:{
                    required:'Campo requerido',
                },
                dsc_colonia:{
                    required:'Campo requerido',
                },
                dsc_calle:{
                    required:'Campo requerido',
                },
                dsc_numero:{
                    required:'Campo requerido',
                },
                dsc_codigo_postal:{
                    required:'Campo requerido',
                },
                dsc_correo:{
                    required:'Campo requerido',
                    email:'Correo no valido',

                },
                tel_oficina:{
                    required:'Campo requerido',
                },
                tel_celular:{
                    required:'Campo requerido',
                },
                dsc_comercializadora:{
                    required:'Campo requerido',
                },
               
            },               
        });
        $('#estado').change(function(){
            var id_estado = $(this).val(); 
            $.post(URLSITE+'backend/proveedores/municipios',{id_estado:id_estado},function(data){
                $('#municipios').html(data);
            });
        });
        
    });
</script>