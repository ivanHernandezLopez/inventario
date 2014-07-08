<div class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">  
            <li>
                <a href="javascript:void(0);" style="background:#F5F5F5 !important;">
                     <img src="<?php echo URL::base(); ?>assets/img/logo.png" width="50%" >
                </a>
            </li>   
            <li>
                <a class="<?php if($controller=='usuarios') echo 'actually'; ?>" href="<?php echo URL::base(); ?>backend/usuarios" style="color:#fff !important;">
                    <span class="glyphicon glyphicon-user"></span></i>Usuarios
                </a>
            </li>                 
            <li>
                <a class="<?php if($controller=='proveedores') echo 'actually'; ?>" href="<?php echo URL::base(); ?>backend/proveedores" style="color:#fff !important;">
                    <span class="glyphicon glyphicon-lock"></span></i>Proveedores
                </a>
            </li>
            <li>
                <a class="<?php if($controller=='familias') echo 'actually'; ?>" href="<?php echo URL::base(); ?>backend/familias" style="color:#fff !important;">
                    <span class="glyphicon glyphicon-lock"></span></i>Familias
                </a>
            </li>
            <li>
                <a class="<?php if($controller=='materiales') echo 'actually'; ?>" href="<?php echo URL::base(); ?>backend/materiales" style="color:#fff !important;">
                    <span class="glyphicon glyphicon-lock"></span></i>Materiales
                </a>
            </li>
            <li>
                <a href="#" style="color:#fff !important;"><i class="fa fa-bar-chart-o fa-fw"></i> Menu desplegable<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#" style="color:#fff !important;">Opcion 1</a>
                    </li>
                    <li>
                        <a href="#" style="color:#fff !important;">Opcion 1</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

        </ul>
        <!-- /#side-menu -->
    </div>
    <!-- /.sidebar-collapse -->
</div>