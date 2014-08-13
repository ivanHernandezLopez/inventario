<div class="table-responsive ">
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th colspan="7">Datos del material</th>
            </tr>
            <tr>
                
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Unidad</th>
                <th>Precio</th>  
                <th >Empresa</th>
                <th >Seleccionar</th>                   
            </tr>
        </thead>
        <tbody>
            <?php foreach($materiales as $material): ?>
            <tr>
               
                <td><?php echo $material->cod_producto; ?></td>
                <td><?php echo $material->dsc_nombre; ?></td>
                <td><?php echo $material->dsc_descripcion; ?></td>
                <td><?php echo $material->unidad; ?></td>
                <td><?php echo $material->dsc_precio; ?></td>
                <td><?php echo $material->proveedor; ?></td>
                <td><button type="button" class="agregar" id="" class="btn btn-default">Seleccionar</button></td>
                

            </tr> 
            <?php endforeach; ?>
        </tbody>
    </table>   
</div>


<script>
    $('.agregar').click(function(){
        console.log('123')
        $('#form').css('display','block');
        $('#tabla').css('display','none');
        $('#table-responsive').css('display','none');
    });
</script>