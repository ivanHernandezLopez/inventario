
<div> 
    <div class="col-lg-12">
        <h3 class="page-header <?php if($error) echo "alert"; ?> <?php echo "alert-".$error; ?>"><?php echo $msg; ?></h3>
        
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading ">
                Para poder agregar una nueva adquisicion proporcionen los datos requeridos
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8" style="position:center;">
                        <p>
                            <a  href="<?php echo URL::base(); ?>backend/adquisiciones/busqueda" class="fancy">
                                <button class="btn btn-primary btn-lg" type="button">Agregar material</button>
                            </a>       
                        </p>
                       <br/><br/>
                        <form action="javascript:void(0);" method="POST">
                            <div class="form-group" style="float:left;">
                                <label>Fecha </label>
                                <input class="form-control" name="dsc_fecha" >
                            </div>
                            <div class="form-group" style="float:right;">
                                <label>Usuario </label>
                                <input class="form-control" name="dsc_usuario" >
                            </div>
                            <br/>
                            <div class="form-group" style="margin-top:65px;">
                                <label >Descripción </label>
                                <textarea class="form-control" name="descripcion" ></textarea>
                            </div>
                            
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
        
    $('.fancy').fancybox({

        href: URLSITE+'backend/adquisiciones/busqueda',
        type: 'ajax'
    });
});


 
</script>
