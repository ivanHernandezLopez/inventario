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
                                <label>Codigo SAP</label>
                                <input class="form-control" name="cod_sap" >
                            </div>
                            <div class="form-group">
                                <label>Nombre</label>
                                <input class="form-control" name="dsc_nombre" >
                            </div>
                            <div class="form-group">
                                <label>Apellido paterno</label>
                                <input class="form-control" name="dsc_apellido_pat" >
                            </div>
                            <div class="form-group">
                                <label>Apellido materno</label>
                                <input class="form-control" name="dsc_apellido_mat" >
                            </div>
                            <div class="form-group">
                                <label>Estado</label>
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
                                <label>Municipio</label>
                                <select class="form-control" id="municipios" name="id_detmunicipio">
                                    <option value="">Seleccione el municipio</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Colonia</label>
                                <input class="form-control" name="dsc_colonia" >
                            </div>
                            <div class="form-group">
                                <label>Calle</label>
                                <input class="form-control" name="dsc_calle" >
                            </div>
                            <div class="form-group">
                                <label>Número</label>
                                <input class="form-control" name="dsc_numero" >
                            </div>
                            <div class="form-group">
                                <label>Codigo postal</label>
                                <input class="form-control" name="dsc_codigo_postal" >
                            </div>
                            <div class="form-group">
                                <label>Correo</label>
                                <input class="form-control" name="dsc_correo" >
                            </div>
                            <div class="form-group">
                                <label>Telefono Oficina</label>
                                <input class="form-control" name="tel_oficina" >
                            </div>
                            <div class="form-group">
                                <label>Telefono celular</label>
                                <input class="form-control" name="tel_celular" >
                            </div>
                            <div class="form-group">
                                <label>Comercializadora</label>
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

        $('#estado').change(function(){
            var id_estado = $(this).val(); 
            $.post(URLSITE+'backend/proveedores/municipios',{id_estado:id_estado},function(data){
                $('#municipios').html(data);
            });
        });
        
    });
</script>