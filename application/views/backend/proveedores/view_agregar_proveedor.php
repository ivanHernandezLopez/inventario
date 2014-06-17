<h2>Proporciene los datos requeridos para guardar un nuevo proveedor</h2>
<div class="form">
    <form action="<?php echo URL::base(); ?>backend/proveedores/agregar" method="post" class="niceform">

        <fieldset>
            <dl>
                <dt><label for="email">Empresa:</label></dt>
                <dd><input type="text" name="" id="" size="54" /></dd>
            </dl>
            <dl>
                <dt><label for="gender">Estado:</label></dt>
                <dd>
                    <select size="1" name="gender" id="">
                        <option value="">Select option 1</option>
                        <option value="">Select option 2</option>
                        <option value="">Select option 3</option>
                        <option value="">Select option 4</option>
                        <option value="">Select option 5</option>
                    </select>
                </dd>
            </dl>
            <dl>
                <dt><label for="gender">Municipio:</label></dt>
                <dd>
                    <select size="1" name="gender" id="">
                        <option value="">Select option 1</option>
                        <option value="">Select option 2</option>
                        <option value="">Select option 3</option>
                        <option value="">Select option 4</option>
                        <option value="">Select option 5</option>
                    </select>
                </dd>
            </dl>
            <dl>
                <dt><label for="email">Colonia:</label></dt>
                <dd><input type="text" name="" id="" size="54" /></dd>
            </dl>
            <dl>
                <dt><label for="email">Calle:</label></dt>
                <dd><input type="text" name="" id="" size="54" /></dd>
            </dl>

            <dl>
                <dt><label for="comments">Comentarios:</label></dt>
                <dd><textarea name="comments" id="comments" rows="5" cols="36"></textarea></dd>
            </dl>
            
             <dl class="submit">
            <input type="submit" name="submit" id="submit" value="Submit" />
             </dl>
             
             
            
        </fieldset>
        
    </form>
</div> 