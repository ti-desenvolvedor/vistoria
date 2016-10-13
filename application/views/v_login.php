<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Extranet">
        <meta name="author" content="Thomas Gonçalves">
        <!-- Bloquear a indexação de pesquisa com metatags  -->
        <meta name="robots" content="noindex">
        <meta name="googlebot" content="noindex">
        <!-- Bloquear a indexação de pesquisa com metatags  -->        
        <link rel="icon" type="image/gif" href="<?php echo base_url() . 'assets/imagens/icon-sold.gif'; ?>">
        <link rel="shortcut icon" type="image/gif"  href="<?php echo base_url() . 'assets/imagens/icon-sold.gif'; ?>">
        <title>Login</title>
        <style>
            .login{
                width:310px;
                margin: auto;
                padding: 0px

            }
            .login .input-group{
                margin: 6px 0 6px 0 ;
                padding: 0px
            }
            .profile-img-card {
                width: 96px;
                height: 96px;
                margin: 0 auto 10px;
                display: block;
                -moz-border-radius: 50%;
                -webkit-border-radius: 50%;
                border-radius: 50%;
            }
            .card {
                background-color: #fff;
                /* just in case there no content*/
                padding: 20px 25px 30px;
                margin: 0 auto 25px;
                margin-top: 50px;
                /* shadows and rounded borders */
                -moz-border-radius: 2px;
                -webkit-border-radius: 2px;
                border-radius: 2px;
                -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            }
        </style>
        <!-- ICON -->
        <link rel="shortcut icon" type="image/gif"  href="<?php echo base_url('assets/imagens/icon-sold.gif'); ?>">
        <!-- ICON -->
        <!-- CSS -->		
        <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/font-awesome-4.3.0/css/font-awesome.min.css'); ?>" rel="stylesheet" media="screen">
        <!-- CSS -->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->	
        <!-- Custom styles for this template -->
        <link href="<?= base_url('assets/css/signin.css') ?>" rel="stylesheet">



        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="nav-top" name="nav-top" class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div id="LAYOUT_HEADER" class="container-fluid">


                <div class="navbar-header ">
                    <a class="navbar-brand" href="#">            
                        <i class="fa fa-internet-explorer fa-lg"></i>
                    </a>
                    <a class="navbar-brand" href="#">   
                        Extranet Sub Regional
                    </a>
                </div>
            </div>
        </div>
        <div id="topo"></div>
        <br/><br/><br/>

        <div class="container " >
            <?php
            if (isset($logout_message)) {
                echo "<div class='message'>";
                echo $logout_message;
                echo "</div>";
            }
            ?>

            <form class="login panel panel-default " role="form" method="post" action="<?= base_url() . 'login/logar' ?>">
                <div class=" panel-heading"> Login</div>
                <div class="panel-body">

                    <h2 class="form-signin-heading">
                        <img class="profile-img-card" src="<?php echo base_url() . 'assets/imagens/avatar_2x.png'; ?>" width="150" height="58">
                    </h2><hr>
                    <div id="div-login-msg">
                        <i class="glyphicon glyphicon-chevron-right"></i>
                        <span >Digite seu usuário e senha</span>
                        <?php if (isset($erro)): ?>
                            <div class="alert alert-danger" role="alert" style="margin-top: 10px;">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong><i class="fa fa-exclamation-triangle"></i> Erro! </strong><br/><?= $erro; ?></div>
                        <?php endif; ?>

                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Usuario" required autofocus name="usuario" value="<?php echo $this->input->post('usuario'); ?>">
                    </div><!-- /input-group -->

                    <div class="input-group">
                        <span class="input-group-addon">

                            <i class="fa fa-lock"></i>
                        </span>
                        <input type="password" class="form-control" placeholder="Senha" value="<?php echo $this->input->post('senha'); ?>" required name="senha">
                    </div><!-- /input-group -->
                    <label>
                        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Lembrar senha
                    </label>
                    <button class=" btn  btn-primary btn-block " type="submit">
                        Fazer Login <i class="fa fa-sign-in btn fa-2x"></i>
                    </button>

                </div>
                <div class="panel-footer pull-rigth">Recuperar seu <a href="#" >Usuario/Senha</a></div>
            </form>
        </div> <!-- /container -->
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <br/>            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <br/>            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <br/>            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <br/>   
        <!-- Navbar fixed bottom -->
        <div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
            <div class="container">
                <div class="navbar-collapse collapse">
                    <footer class="text-center col-md-12 small">
                        <br/>
                        <h5 class="text-muted "><b>Copyright © 2016 - <?php echo date('Y'); ?> | Congregação Cristã no Brasil - <a href="http://www.congregacao.org.br" title="Congregação Cristã no Brasil">www.congregacao.org.br</a> - Todos os direitos reservados.</b></h5>
                        <h6 class="text-warning">Desenvolvido por <a href="mailto:thomasgoncalves@yahoo.com.br" title="Analista TI - Thomas Gonçalves">Thomas Gonçalves</a> |            
                            <i class="fa fa-code fa-2 fa-lg fa-inverse" aria-hidden="true"></i> | <i class="fa fa-html5 fa-2 fa-lg fa-inverse" aria-hidden="true"></i> | <i class="fa fa-css3 fa-2 fa-lg fa-inverse" aria-hidden="true"></i> | <i class="fa fa-github fa-2 fa-lg fa-inverse" aria-hidden="true"></i> | Compatibilidade: <i class="fa fa-desktop fa-2 fa-lg fa-inverse" aria-hidden="true"></i> | <i class="fa fa-mobile fa-2 fa-lg fa-inverse" aria-hidden="true"></i>


                            | 
                            <i class="fa fa-windows fa-2 fa-lg fa-inverse" aria-hidden="true"></i> | <i class="glyphicon glyphicon-apple"></i>| <i class="fa fa-linux fa-2 fa-lg fa-inverse" aria-hidden="true"></i> | <i class="fa fa-android fa-2 fa-lg fa-inverse" aria-hidden="true"></i>


                            | Navegadores: <i class="fa fa-safari fa-2 fa-lg fa-inverse" aria-hidden="true"></i> | <i class="fa fa-firefox fa-2 fa-lg fa-inverse" aria-hidden="true"></i> | <i class="fa fa-chrome fa-2 fa-lg fa-inverse" aria-hidden="true"></i> | <i class="fa fa-edge fa-2 fa-lg fa-inverse" aria-hidden="true"></i>  
                            <a class="btn" href="#topo" >
                                <span class=" pull-right fa-stack fa-lg">
                                    <i class="fa fa-square-o fa-stack-2x fa-inverse"></i>
                                    <i class="fa fa fa-arrow-up fa-stack-1x fa-inverse"></i>
                                </span></a>
                        </h6>


                    </footer>

                </div><!--/.nav-collapse -->
            </div><!--/.container -->
        </div>
        <!-- JavaScript -->
        <script src="<?php echo base_url('assets/jquery/jquery-2.1.4.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js') ?>"></script>
        <!-- JavaScript -->
        <!--api grafico google js-->
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <!--\api grafico google js--> 
    </body>
</html>
