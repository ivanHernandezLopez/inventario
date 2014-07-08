 <?php foreach($municipios as $municipio): ?>
    <option value="<?php echo $municipio->id_detmunicipio; ?>">
        <?php echo $municipio->dsc_nombre; ?>
    </option>
<?php endforeach; ?>