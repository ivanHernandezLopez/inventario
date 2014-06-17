
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>PANEL DE ADMINISTRACIÓN DE INVENTARIOS | LOGIN</title>
        <script>
            URLSITE = '<?php echo URL::base(); ?>';
        </script>
        <script type="text/javascript" src="<?php echo URL::base(); ?>assets/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo URL::base(); ?>assets/js/jquery-validate.js"></script>  
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo URL::base(); ?>assets/css/backend/style_recovery.css" />
    </head>
    <body>
        <div class="password-recovery">
            <div class="well">
                <div class="row-fluid">
                    <div class="span24">
                        <h1>Recuperar tu contraseña</h1>
                    </div>

                    <div class="checkout-body row-fluid">
                        <div class="span24">
                            <form name="fancy_password_remember" method="post" action="javascript:void(0);" class="checkout-retrieve-pwd form-inline">
                                <fieldset>
                                    <h4>Introduce tu dirección de correo electrónico y te enviaremos una contraseña provisional</h4>
                                        <div class="control-group">
                                            <label class="control-label " for="fancy_password_remember_email">Email</label>
                                            <div class="controls">
                                                <input type="text" id="fancy_password_remember_email" name="usuario" id="email"  value="" class="input-xlarge" >
                                                <input type="hidden" name="token" value="<?php echo Security::token(); ?>">
                                                
                                            </div>
                                            </div>
                                    <ul>
                                        <li><button type="submit" class="btn btn-main btn-medium">Enviar</button></li>
                                    </ul>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
