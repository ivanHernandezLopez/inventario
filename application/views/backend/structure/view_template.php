<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>PANEL DE ADMINISTRACIÓN DE INVENTARIOS</title>
        <link rel="stylesheet" type="text/css" href="<?php echo URL::base(); ?>assets/css/backend/style_template.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo URL::base(); ?>assets/css/backend/style_form.css" />
        <?php echo Assets::styles(); ?>
        <script> URLSITE='<?php echo URL::base(); ?>'; </script>
        <script type="text/javascript" src="<?php echo URL::base(); ?>assets/js/jquery.js"></script>
        <?php echo Assets::scripts(); ?>
        <script type="text/javascript" src="<?php echo URL::base(); ?>assets/js/backend/niceforms.js"></script>
        
    </head>
    <body>
        <div id="main_container">
            <div class="header">   
                <div class="right_header">
                    Bienvenido : <?php echo $usuario->dsc_nombre; ?> | <a href="<?php echo URL::base(); ?>backend/login/logout" class="logout">Salir</a>
                </div>
            </div>
            <div class="main_content">                  
                <div class="center_content"> 
                    
                    <div class="left_content main_cont">   
                        <div class="sub_menu">
                            <ul>
                                <li><a href="<?php echo URL::base(); ?>backend/inicio">Tabla compuesta</a></li>
                                <li><a href="#">Menu vertial con css</a></li>
                                <li><a href="#">Menu vertial con css</a></li>
                                <li><a href="#">Menu vertial con css</a></li>
                                <li><a href="#">Menu vertial con css</a></li>
                                <li><a href="#">Menu vertial con css</a></li>
                            </ul>
                        </div>
                    </div>     
                    <div class="right_content">                   
                        <?php echo $body; ?>
                    </div><!-- end of right content-->
                </div>   <!--end of center content -->               
                <div class="clear"></div>
            </div> <!--end of main content-->    
            <div class="footer">            
            	
            </div>
        </div>		
    </body>
</html>
