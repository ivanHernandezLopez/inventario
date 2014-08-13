<div class="provedores_form" id="div<?php echo $num; ?>">
<button type="button" class="btn btn-default eliminar" id="<?php echo $num; ?>" style="float:right;margin-top:25px;background:red;border-color:red;">X</button>
<div class="form-group">
    <label>Razón social de la empresa <span class="required">*</span></label>
    <select class="form-control" name="id_catproveedor[]" style="width:90%">
        <option value="">Seleccion un proveedor...</option>
         <?php foreach($proveedores as $proveedor): ?>
            <option value="<?php echo $proveedor->id_catproveedor; ?>">
                <?php echo $proveedor->dsc_razon_social; ?>
            </option>
        <?php endforeach; ?>
    </select>
</div>

<div class="form-group">
    <label>Precio <span class="required">*</span></label>
    <input class="form-control" type="text" name="dsc_precio[]" >
    </select>
</div>

</div>

<script>
    $('.eliminar').click(function(){
        var id = $(this).attr('id');
        $('#div'+id).remove();
    });
</script>