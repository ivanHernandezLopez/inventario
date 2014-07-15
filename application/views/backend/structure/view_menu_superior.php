<div class="navbar-header">
    <a class="navbar-brand" href="javascript:void(0);"><?php echo $titulo_principal; ?></a>
</div>
<!-- /.navbar-header -->
 <ul class="nav navbar-top-links navbar-right">
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);" style="color:#fff !important;">
            <i ><?php echo strtoupper($usuario->dsc_nombre." ".$usuario->dsc_apellido_pat." ".$usuario->dsc_apellido_mat." "); ?></i>  
            <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
            <li>
                <a href="<?php echo URL::base(); ?>backend/usuarios/perfil">
                <i class="fa fa-user fa-fw"></i>Mi perfil
            </a>
            </li>
            <li class="divider"></li>
            <li><a href="<?php echo URL::base(); ?>backend/login/logout"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
            </li>
        </ul>
        <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->
</ul>