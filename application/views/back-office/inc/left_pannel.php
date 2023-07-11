<?php
?>
    <style>
        .navbar ul .menu-title{
            color: #D9D9D9;
        }
        .navbar ul .menu-item a{
            color: #D9D9D9;
        }
        .navbar ul .menu-item-has-children a{
            color: #D9D9D9;
        }
        .sub-menu children dropdown-menu{
            background-color: #284B63;
        }

    </style>
    <aside id="left-panel" class="left-panel" style="background-color: #284B63;margin-top: 1px;color: #D9D9D9;">
        <nav class="navbar navbar-expand-sm navbar-default" style="background-color: #284B63;color: #D9D9D9;>
        <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li  class="menu-title">DASHBOARD</li><!-- /.menu-title -->
            <li class="menu-item">
                <a href="<?php echo base_url("Admin_controller/listeClient")?>" class="dropdown-toggle" >
                    <i class="menu-icon fa fa-cogs"></i> Liste Client </a>
            </li>
            <li class="menu-item">
                <a href="<?php echo base_url("Admin_controller/Programme")?>" class="dropdown-toggle" >
                    <i class="menu-icon fa fa-cogs"></i> Client programme </a>
            </li>
            <li class="menu-item">
                <a href="<?php echo base_url("TableauCroise_controller")?>" class="dropdown-toggle" >
                    <i class="menu-icon fa fa-cogs"></i> Activite client(tableau croisé) </a>
            </li>
            <li class="menu-item">
                <a href="<?php echo base_url("Regime_controller")?>" class="dropdown-toggle" >
                    <i class="menu-icon fa fa-cogs"></i> CRUD REGIME </a>
            </li>
            <li class="menu-item">
                <a href="<?php echo base_url("Sport_controller")?>" class="dropdown-toggle" >
                    <i class="menu-icon fa fa-cogs"></i> CRUD Activité sportif </a>
            </li>
            <li class="menu-item">
                <a href="<?php echo base_url("Graphe_controller/clientsParMois")?>" class="dropdown-toggle" >
                    <i class="menu-icon fa fa-cogs"></i> Nb Client par mois </a>
            </li>
        </ul>
        </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
<?php include "script.php"; ?>