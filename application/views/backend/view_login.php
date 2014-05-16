<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>PANEL DE ADMINISTRACIÓN DE INVENTARIOS | LOGIN</title>
        <script> URLSITE = '<?php echo URL::base(); ?>'; </script>
        <script type="text/javascript" src="<?php echo URL::base(); ?>assets/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo URL::base(); ?>assets/js/backend/niceforms.js"></script>
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo URL::base(); ?>assets/css/backend/style_login.css" />
    </head>
    <body>
        <div id="main_container">   
            <div class="login_form">        
                <h3>Panel de administración</h3>
                <a href="#" class="forgot_pass">Recuperar contraseña</a>         
                <form action="<?php echo URL::base(); ?>backend/login" method="POST" class="niceform">        
                    
                    <fieldset>
                    <label class="<?php echo $error; ?> error"><?php echo $mensaje; ?></label>

                        <dl>
                            <dt><label for="email">Usuario:</label></dt>
                            <dd><input type="text" name="usuario" id="" size="54" /></dd>
                        </dl>
                        <dl>
                            <dt><label for="password">Contraseña:</label></dt>
                            <dd><input type="password" name="contrasena" id="" size="54" /></dd>
                        </dl>
                        
                        <dl>
                            <dt><label></label></dt>
                            <dd>
                        <input type="checkbox" name="remember" /><label class="check_label">Recordar</label>
                            </dd>
                        </dl>
                        <input type="hidden" name="token" value="<?php echo Security::token(); ?>">
                        <dl class="submit">
                            <input type="submit" name="submit" class="boton" value="Ingresar" />
                        </dl>                
                    </fieldset>                
                </form>
            </div>   
        </div>		
    </body>
</html>
<script>
$(document).ready(function(){
    $( ".error" ).slideUp(2000).delay(1000);
});
</script>