<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bootstrap Dashboard by Bootstrapious.com</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="<?php echo base_url('resources/vendor/bootstrap/css/bootstrap.min.css'); ?>">
        <!-- Font Awesome CSS-->
        <link rel="stylesheet" href="<?php echo base_url('resources/vendor/font-awesome/css/font-awesome.min.css'); ?>">
        <!-- Fontastic Custom icon font-->
        <link rel="stylesheet" href="<?php echo base_url('resources/css/fontastic.css'); ?>">
        <!-- Google fonts - Roboto -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
        <!-- jQuery Circle-->
        <link rel="stylesheet" href="<?php echo base_url('resources/css/grasp_mobile_progress_circle-1.0.0.min.css'); ?>">
        <!-- Custom Scrollbar-->
        <link rel="stylesheet" href="<?php echo base_url('resources/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css'); ?>">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="<?php echo base_url('resources/css/style.blue.css'); ?>" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="<?php echo base_url('resources/css/custom.css'); ?>">
        <!-- Favicon-->
        <link rel="shortcut icon" href="<?php echo base_url('resources/img/favicon.ico'); ?>">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    </head>
    <body>
        <div class="page login-page">
            <div class="container">
                <div class="form-outer text-center d-flex align-items-center">
                    <div class="form-inner">
                        <div class="logo text-uppercase"><span>ZW</span><strong class="text-primary">Login</strong></div>
                        <p>Para ter acesso ao sistema é necessário realizar o login. Entre com os dados corretamente.</p>
                        <form method="post" action="<?php echo base_url(); ?>" class="text-left form-validate">
                            <div class="form-group-material">
                                <input id="nomeUsuario" type="text" name="nomeUsuario" required data-msg="Por favor, informe seu usuário." class="input-material">
                                <label for="nomeUsuario" class="label-material">Usuário</label>
                            </div>
                            <div class="form-group-material">
                                <input id="senhaUsuario" type="password" name="senhaUsuario" required data-msg="Por favor, informe sua senha." class="input-material">
                                <label for="senhaUsuario" class="label-material">Senha</label>
                            </div>
                            <div class="form-group row centered">
                                <div class="col-sm-6 offset-sm-4 centered">
                                    <button type="submit" class=" btn btn-primary">Salvar</button>          
                                </div>
                            </div> 
                        </form>
                        <a href="#" class="forgot-pass">Esqueceu a senha?</a>

                        <div class="copyrights text-center">
                            <p>Desenvolvido by <a href="https://bootstrapious.com" class="external">Monick Nogueira</a></p>
                            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- JavaScript files-->
            <script src="<?php echo base_url('resources/vendor/jquery/jquery.min.js'); ?>"></script>
            <script src="<?php echo base_url('resources/vendor/popper.js/umd/popper.min.js'); ?>"></script>
            <script src="<?php echo base_url('resources/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
            <script src="<?php echo base_url('resources/js/grasp_mobile_progress_circle-1.0.0.min.js'); ?>"></script>
            <script src="<?php echo base_url('resources/vendor/jquery.cookie/jquery.cookie.js'); ?>"></script>
            <script src="<?php echo base_url('resources/vendor/chart.js/Chart.min.js'); ?>"></script>
            <script src="<?php echo base_url('resources/vendor/jquery-validation/jquery.validate.min.js'); ?>"></script>
            <script src="<?php echo base_url('resources/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
            <script src="<?php echo base_url('resources/js/charts-home.js'); ?>"></script>
            <!-- Main File-->
            <script src="<?php echo base_url('resources/js/front.js'); ?>"></script>
    </body>
</html>