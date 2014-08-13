<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PANEL DE ADMINISTRACIÓN</title>
    <!-- Core CSS - Include with every page -->   
    <link href="<?php echo URL::base(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <?php echo Assets::Styles(); ?>
    <?php echo Assets::Scripts(); ?>
    <script type="text/javascript">
        URLSITE = '<?php echo URL::base(); ?>';
    </script>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">           
            <?php echo $menu_superior; ?>

            <?php echo $menu_lateral; ?>
        </nav>

        <div id="page-wrapper">         
                <?php echo $body; ?>
        </div>
    </div>
</body>
    <script>
        $('#side-menu').metisMenu() //Script para el menu desplegable;
        
    </script>
</html>
