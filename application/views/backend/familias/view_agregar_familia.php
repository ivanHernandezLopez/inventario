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
                                <label>Número de Familia<span class="required">*</span></label>
                                <input class="form-control" name="num_familia" >
                            </div>
                            <div class="form-group">
                                <label>Descripción<span class="required">*</span></label>
                                 <textarea class="form-control" rows="3" name="dsc_descripcion"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Responsable<span class="required">*</span></label>
                                <input class="form-control" name="nom_responsable" >
                            </div>
                            <div class="form-group">
                                <label>Extensión</label>
                                <input class="form-control" name="num_extension" >
                            </div>
                            <div class="form-group">
                                <label>Región</label>
                                <input class="form-control" name="dsc_region" >
                            </div>
                            <div class="form-group">
                                <label>Área</label>
                                <input class="form-control" name="dsc_area" >
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
                num_familia:'required',
                dsc_descripcion: 'required',
                nom_responsable:'required',
            },
            messages:{
                num_familia:{
                    required:'Campo requerido',
                },
                dsc_descripcion:{
                    required:'Campo requerido',
                },
                nom_responsable:{
                    required:'Campo requerido',
                }              
            },       
        });
    });
    });
</script>