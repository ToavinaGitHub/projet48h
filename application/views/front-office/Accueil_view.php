<?php
include "inc/head.php";
include "inc/Header.php";
include "inc/left_pannel.php";
?>
<link rel="stylesheet" href="<?php echo base_url("assets/css/login.css")?>">
</head>
<body>
<link rel="stylesheet" href="<?php echo site_url("assets/bootstrap/css/bootstrap.min.css")?>">
<link rel="stylesheet" href="<?php echo site_url("assets/css/styles.min.css")?>">
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
                                    <h4 class="mt-1 mb-5 pb-1">Login </h4>
                                </div>
                                <form method="post" action="<?php echo base_url("Login_controller/checkLogin")?>" data-parsley-validate id="form">
                                    <p>Please login to your account</p>
                                    <div class="form-outline mb-4">
                                        <div class="user-box">
                                            <input type="text" name="email" id="email" required data-parsley-required="true" data-parsley-type="email">
                                            <span class="bt-flabels__error-desc">Required/Invalid Email</span>
                                            <label for="email">E-mail</label>
                                        </div>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <div class="user-box">
                                            <input type="password" name="password" required data-parsley-minlength="6">
                                            <span class="bt-flabels__error-desc">Must have at least 6 characters</span>
                                            <label>Password</label>
                                        </div>
                                    </div>
                                    <?php if (isset($erreur)){?>
                                        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                            <span class="badge badge-pill badge-danger">!!!</span>
                                            <?php echo $erreur;?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    <?php } ?>
                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button class="btn btn-outline-primary btn-block col-12" type="submit">Log in</button>
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
</body>
</html>
