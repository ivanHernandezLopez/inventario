<h2>Catalogo de productos</h2> 
                    
<a href="<?php echo URL::base(); ?>backend/proveedores/agregar" class="bt_green">
    <span class="bt_green_lft">
        </span><strong>Nuevo producto</strong><span class="bt_green_r">
    </span>
</a>
<br/>
<table id="example" class="display" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Descripción</th>
            <th>Estado</th>
            <th>Municipio</th>
            <th>Colonia</th>
            <th>Correo</th>
            <th>Pagina web</th>
        </tr>
    </thead>
 
    <tfoot>
        <tr>
           <th>Descripción</th>
            <th>Estado</th>
            <th>Municipio</th>
            <th>Colonia</th>
            <th>Correo</th>
            <th>Pagina web</th>
        </tr>
    </tfoot>
 
    <tbody>
        <?php foreach($proveedores as $proveedor): ?>
        <tr>
            <td><?php echo $proveedor->empresa; ?></td>
            <td><?php echo $proveedor->estado; ?></td>
            <td><?php echo $proveedor->municipio; ?></td>
            <td><?php echo $proveedor->colonia; ?></td>
            <td><?php echo $proveedor->correo; ?></td>
            <td><?php echo $proveedor->web; ?></td>
        </tr> 
        <?php endforeach; ?>
    </tbody>
</table>
