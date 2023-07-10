<?php
?>

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="index.html"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-title">Entreprise </li><!-- /.menu-title -->
                <li class="menu-item ">
                    <a href="<?php echo base_url("AddEntreprise_controller/infoEntreprise")?>" class="dropdown-toggle" >
                        <i class="menu-icon fa fa-cogs"></i> profil entreprise </a>

                </li>



                <li class="menu-title">Tableau de bord</li><!-- /.menu-title -->


                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart-o"></i>Tableau de bord</a>
                    <ul class="sub-menu children dropdown-menu">

                        <li class="menu-item ">
                            <a href="<?php echo base_url("AddJournal_controller/loadcodeJournal")?>" class="dropdown-toggle" > <i class=" ti-notepad"></i>Liste 1</a>
                        </li>

                    </ul>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-list"></i>Statistique</a>
                    <ul class="sub-menu children dropdown-menu">

                        <li class="menu-item ">
                            <a href="<?php echo base_url("InsererJournal_controller/")?>" class="dropdown-toggle" > <i class=" fa fa-edit (alias)"></i>Inserer Journal</a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-list"></i>Analytique</a>
                    <ul class="sub-menu children dropdown-menu">

                        <li class="menu-item ">
                            <a href="<?php echo base_url("CRUD_Produit_controller/")?>" class="dropdown-toggle" > <i class=" fa fa-edit (alias)"></i>Ajout de produit</a>
                        </li>
                        <li class="menu-item ">
                            <a href="<?php echo base_url("CRUD_Centre_controller/")?>" class="dropdown-toggle" > <i class=" fa fa-list-alt"></i>Ajout de centre</a>
                        </li>
                        <li class="menu-item ">
                            <a href="<?php echo base_url("RepartCentre_controller/")?>" class="dropdown-toggle" > <i class=" fa fa-list-alt"></i>Repartition par centre</a>
                        </li>
                        <li class="menu-item ">
                            <a href="<?php echo base_url("CoutRevient_controller/choose")?>" class="dropdown-toggle" > <i class=" fa fa-list-alt"></i>Cout revient</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>