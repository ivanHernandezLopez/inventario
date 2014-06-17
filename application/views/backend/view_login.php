<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>PANEL DE ADMINISTRACIÓN DE INVENTARIOS | LOGIN</title>
        <script type="text/javascript" src="<?php echo URL::base(); ?>assets/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo URL::base(); ?>assets/js/jquery-validate.js"></script>       
        <script type="text/javascript" src="<?php echo URL::base(); ?>assets/js/jquery.fancybox.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo URL::base(); ?>assets/css/fancy/jquery.fancybox.css" media="screen"/>
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo URL::base(); ?>assets/css/backend/style_login.css" />
    </head>
    <body>
        	<form id="login" action="<?php echo URL::base(); ?>backend/login" method="POST">
                <h1>BIENVENIDO</h1>
                <fieldset id="inputs">
                    <input id="username" type="text" placeholder="Correo" autofocus  name="usuario" >   
                    <input id="password" type="password" placeholder="Contraseña"  name="contrasena">
                    <input type="hidden" name="token" value="<?php echo Security::token(); ?>">
                    <label class="msg <?php echo $error; ?>"><?php echo $mensaje; ?></label>
                </fieldset>
                <fieldset id="actions">
                    <input type="submit" id="submit" value="Ingresar">
                    <a class="fancybox-effects-a fancybox.iframe" href="<?php echo URL::base(); ?>backend/login/recovery" >Olvido su contraseña?</a>
                </fieldset>
            </form>
    </body>
</html>

<script>
    $(document).ready(function(){

        $(".fancybox-effects-a").fancybox({           
            padding: 0,
            openEffect : 'elastic',
            openSpeed  : 150,
            closeEffect : 'elastic',
            closeSpeed  : 150,
            closeClick : true,
            helpers : {
               overlay : {
                    closeClick : false,
                    css : {
                        'background' : 'rgba(238,238,238,0.85)'
                    }
                }
            },
            afterLoad:function(){

            }
        });
        $("#login").validate({
            rules: {
                usuario: {
                    required:true,
                    email:true,
                },
                contrasena: 'required',          
            },
            messages:{
                usuario:{
                    required:'Campo requerido.',
                    email:'Correo no valido.'
                },
                contrasena:{
                    required:'Campo requerido.',
                }
            },       
        });
    });
   

    
</script>