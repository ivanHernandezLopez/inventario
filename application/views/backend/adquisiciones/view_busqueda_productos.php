
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading ">
                Para poder agregar un nuevo proveedor es necesario proporcionar los datos requeridos
            </div>
            <div class="panel-body" id="tabla">
                <div class="row">
                    <div class="col-lg-8 materiales">
                        <form role="form" id="proveedor" action="<?php echo URL::base(); ?>backend/proveedores/agregar" method="POST">
                            <div class="form-group" >
                                <label>Nombre del material</label>
                                <input class="form-control" id="nombre" >
                            </div>
                            <div class="form-group" >
                                <label>Codigo<span class="required">*</span></label>
                                <input class="form-control" id="codigo" >
                            </div>
                            <br/>
                            
                            <button type="button" id="b" class="btn btn-default">Buscar</button>
                            <button type="button" id="c" class="btn btn-default">Cancelar</button>
                            
                        </form>

                    </div>
                    
                </div>
                <!-- /.row (nested) -->
            </div>

            <div class="panel-body" id="form" style="display:none;">
                <div class="row">
                    <div class="col-lg-8 materiales">
                        <form role="form" id="proveedor" action="<?php echo URL::base(); ?>backend/proveedores/agregar" method="POST">
                            <div class="form-group" >
                                <label>Nombre del material</label>
                                <input class="form-control" id="nombre" >
                            </div>
                            <div class="form-group" >
                                <label>Codigo<span class="required">*</span></label>
                                <input class="form-control" id="codigo" >
                            </div>
                            <br/>
                            
                            <button type="button" id="b" class="btn btn-default">Buscar</button>
                            <button type="button" id="c" class="btn btn-default">Cancelar</button>
                            
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
    $('#b').click(function(){
        var nombre = $('#nombre').val();
        var codigo = $('#codigo').val();
        $.post(URLSITE+'backend/adquisiciones/materiales',{nombre:nombre,codigo:codigo},function(data){
            $('table').remove();
            $('.materiales').append(data);
        });
    });
    
</script>
