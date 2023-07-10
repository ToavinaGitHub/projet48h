<?php
include "inc/head.php";
?>
<link rel="stylesheet" href="<?php echo base_url("assets/css/login.css")?>">
</head>
<body>

<link rel="stylesheet" href="<?php echo site_url("assets/bootstrap/css/bootstrap.min.css")?>">
<script src="<?php echo site_url("assets/js/parsley.min.js")?>"></script>

<section class="col-12 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">
                                <div class="text-center">
                                    <h4 class="mt-1 mb-5 pb-1">INSCRIVEZ-VOUS</h4>
                                </div>
                                <form method="post" action="<?php echo base_url("Registration_controller/submit")?>" data-parsley-validate id="form">
                                    <div id="etape1">
                                        <div class="form-outline mb-4">
                                            <div class="user-box">
                                                <input type="text" name="nom" id="nom" required data-parsley-required="true" data-parsley-type="nom">
                                                <label for="nom">Nom</label>
                                            </div>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <div class="user-box">
                                                <input type="text" name="prenoms" required data-parsley-minlength="6">
                                                <label>Prenoms</label>
                                            </div>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <div class="user-box">
                                                <input type="date" name="dtn" required>
                                                <label>Date de naissance</label>
                                            </div>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <div class="user-box">
                                                <select name="sexe" required>
                                                    <option value="">Sélectionnez votre sexe</option>
                                                    <option value="0">Femme</option>
                                                    <option value="1">Homme</option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="text-right pt-1 mb-5 pb-1">
                                            <button class="btn btn-outline-primary" type="button" onclick="afficherEtape('etape1')">Suivant</button>
                                        </div>

                                    </div>
                                    <div id="etape2" class="hidden">
                                        <!-- Ajoutez les champs de l'étape 2 ici -->
                                        <div class="form-outline mb-4">
                                            <div class="user-box">
                                                <input type="email" name="email" required>
                                                <label>Email</label>
                                            </div>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <div class="user-box">
                                                <input type="password" name="mdp" required data-parsley-minlength="8">
                                                <label>Mot de passe</label>
                                            </div>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <div class="user-box">
                                                <input type="number" name="poids" min="0" required>
                                                <label>Poids</label>
                                            </div>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <div class="user-box">
                                                <input type="number" name="taille" min="0" required>
                                                <label>Taille</label>
                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <label for="objectif" class="form-label">Quelle est votre objectif?</label>
                                            <?php for($i=0; $i<count($objectifs); $i++) { ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="objectif[]" value="<?php echo $objectifs[$i]['idObjectif'] ?>">
                                                <label><?php echo $objectifs[$i]['nom'] ?> </label>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <div class="text-left pt-1 mb-5 pb-1">
                                            <button class="btn btn-outline-primary" type="submit" onclick="afficherEtape('etape2')">Precedent</button>
                                        </div>
                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-outline-primary btn-block col-12" type="submit">S'inscrire</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                <h4 class="mb-4">We are more than just a company</h4>
                                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="<?php echo site_url("assets/bootstrap/js/bootstrap.min.js")?>"></script>
<?php include "inc/script.php"; ?>
<script>
    function afficherEtape(etape) {
        // Masquer l'étape actuelle
        document.getElementById("etape1").classList.add('hidden');

        // Afficher l'étape suivante
        if (etape === 'etape1') {
            document.getElementById('etape2').classList.remove('hidden');
        }else if (etape === 'etape2'){
            document.getElementById("etape2").classList.add('hidden');
            document.getElementById('etape1').classList.remove('hidden');
        }
    }

</script>
</body>
</html>
