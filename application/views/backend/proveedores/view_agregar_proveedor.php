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
                        <form role="form" id="proveedor" action="<?php echo URL::base(); ?>backend/proveedores/agregar" method="POST">
                            <div class="form-group">
                                <label>Número de proveedor SAP</label>
                                <input class="form-control" name="num_proveedor" >
                            </div>
                            <div class="form-group">
                                <label>Razón social de la empresa<span class="required">*</span></label>
                                <input class="form-control" name="dsc_razon_social" >
                            </div>
                            <div class="form-group">
                                <label>RFC<span class="required">*</span></label>
                                <input class="form-control" name="rfc_empresa" >
                            </div>
                            <div class="form-group">
                                <label>Domicilio<span class="required">*</span></label>
                                <input class="form-control" name="dsc_domicilio" >
                            </div>
                            <div class="form-group">
                                <label>Estado<span class="required">*</span></label>
                                <select class="form-control" id="estado" name="id_catestado">
                                    <option value="">Seleccione el estado</option>
                                    <?php foreach($estados as $estado): ?>
                                        <option value="<?php echo $estado->id_catestado; ?>">
                                            <?php echo $estado->dsc_nombre; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Municipio<span class="required">*</span></label>
                                <select class="form-control" id="municipios" name="id_detmunicipio">
                                    <option value="">Seleccione el municipio</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Contacto<span class="required">*</span></label>
                                <input class="form-control" name="dsc_contacto" >
                            </div>
                            <div class="form-group">
                                <label>Telefono Oficina<span class="required">*</span></label>
                                <input class="form-control" name="tel_oficina" >
                            </div>
                            <div class="form-group">
                                <label>Correo<span class="required">*</span></label>
                                <input class="form-control" name="dsc_correo" >
                            </div>
                            <div class="form-group">
                                <label>Comercializadora<span class="required">*</span></label>
                                <label class="radio-inline">
                                <input id="optionsRadiosInline1" type="radio"  value="si" name="dsc_comercializadora">
                                Si
                                </label>
                                <label class="radio-inline">
                                <input id="optionsRadiosInline1" type="radio" checked="true" value="no" name="dsc_comercializadora">
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
                num_proveedor:'required',
                dsc_razon_social: 'required',
                rfc_empresa:'required',
                dsc_domicilio:'required',
                id_catestado :'required',
                id_detmunicipio:'required',
                dsc_contacto:'required',
                dsc_correo:{
                    required:true,
                    email:true,
                },
                tel_oficina:'required',
                dsc_comercializadora:'required',        
            },
            messages:{
                num_provedor:{
                    required:'Campo requerido',
                },
                dsc_razon_social:{
                    required:'Campo requerido',
                },
                rfc_empresa:{
                    required:'Campo requerido',
                },
                dsc_domicilio:{
                    required:'Campo requerido',
                },
                id_catestado:{
                    required:'Campo requerido',
                },
                id_detmunicipio:{
                    required:'Campo requerido',
                },
                dsc_contacto:{
                    required:'Campo requerido',
                },
                dsc_calle:{
                    required:'Campo requerido',
                },                
                dsc_correo:{
                    required:'Campo requerido',
                    email:'Correo no valido',

                },
                tel_oficina:{
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