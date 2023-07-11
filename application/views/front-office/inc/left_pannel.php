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
        background-color: #353535;
    }

</style>
<aside id="left-panel" class="left-panel" style="background-color: #353535;margin-top: 1px;color: #D9D9D9;">
    <nav class="navbar navbar-expand-sm navbar-default" style="background-color: #353535;color: #D9D9D9;>
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li  class="menu-title">Mon profil</li><!-- /.menu-title -->
                <li class="menu-item">
                    <a href="<?php echo base_url("Profil_controller/makaol")?>" class="dropdown-toggle" >
                        <i class="menu-icon fa fa-cogs"></i> Profil </a>
                </li>
                <li class="menu-item">
                    <a href="<?php echo base_url("Suggestion_controller/afficherMonRegime")?>" class="dropdown-toggle" >
                        <i class="menu-icon fa fa-cogs"></i> Mon regime </a>
                </li>
                <li class="menu-item">
                    <a href="<?php echo base_url("Imc_controller/ShowImc")?>" class="dropdown-toggle" >
                        <i class="menu-icon fa fa-cogs"></i> Mon IMC </a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart-o"></i>Mise a jour</a>
                    <ul class="sub-menu children dropdown-menu" style="background-color: #353535">
                        <li class="menu-item" style="color: white;">
                            <a href="<?php echo base_url("Modifpoids_controller/makaol")?>" class="dropdown-toggle" > <i class=" ti-notepad"></i>Poids</a>
                        </li>
                        <li class="menu-item" style="color: white;">
                            <a href="<?php echo base_url("Modiftaille_controller/makaol")?>" class="dropdown-toggle" > <i class=" ti-notepad"></i>Taille</a>
                        </li>
                        <li class="menu-item" style="color: white;">
                            <a href="<?php echo base_url("Modifob_controller/makaol")?>" class="dropdown-toggle" > <i class=" ti-notepad"></i>Objectif</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-title">Decouverte</li><!-- /.menu-title -->

                <li class="menu-item">
                    <a href="<?php echo base_url("Suggestion_controller")?>" class="dropdown-toggle" >
                        <i class="menu-icon fa fa-cogs"></i>Suggestions</a>
                </li>

                <li class="menu-title">Financiere</li><!-- /.menu-title -->
                <li class="menu-item">
                    <a href="<?php echo base_url("Code_controller")?>" class="dropdown-toggle" >
                        <i class="menu-icon fa fa-cogs"></i>Ajout monnaie</a>
                </li>




            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<?php include "script.php"; ?>