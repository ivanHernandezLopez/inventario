<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header <?php if($error) echo "alert"; ?> <?php echo "alert-".$error; ?>"><?php echo $msg; ?></h3>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading ">
                Para poder agregar una nuevo familia es necesario proporcionar los datos requeridos
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">
                        <form role="form" id="familias" action="<?php echo URL::base(); ?>backend/familias/agregar" method="POST">
                            <div class="form-group">
                                <label>Codigo SAP<span class="required">*</span></label>
                                <input class="form-control" name="cod_sap" >
                            </div>
                            <div class="form-group">
                                <label>Nombre<span class="required">*</span></label>
                                <input class="form-control" name="dsc_nombre" >
                            </div>
                            <div class="form-group">
                                <label>Descripción</label>
                                 <textarea class="form-control" rows="3" name="dsc_descripcion"></textarea>
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
         $(document).ready(function(){
         $("#familias").validate({
            rules: {
                cod_sap:'required',
                dsc_nombre: 'required',
            },
            messages:{
                cod_sap:{
                    required:'Campo requerido',
                },
                dsc_nombre:{
                    required:'Campo requerido',
                },              
            },       
        });
    });
    });
</script>