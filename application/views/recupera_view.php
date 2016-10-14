    
<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <?php $this->load->view('layout/header.php'); ?>
    </head>
    
    <body>
        <div id="nav-top" name="nav-top" class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div id="LAYOUT_HEADER" class="container-fluid">


                <div class="navbar-header ">
            <a class="navbar-brand" href="#">
                <i class="fa fa-internet-explorer fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;Extranet Sub Regional
            </a>
                </div>
            </div>
        </div>
        <div id="topo"></div>
        <br/><br/><br/>
        <div class="container ">
            <?php
            if (isset($logout_message)) {
                echo "<div class='message'>";
                echo $logout_message;
                echo "</div>";
            }
            ?>
            <form class="login panel panel-default " role="form" method="post" action="<?= base_url() . 'login/logar' ?>">
                <div class=" panel-heading">Recuperar Senha</div>
                <div class="panel-body">
                    <h2 class="form-signin-heading">

                    </h2>
                    <div id="div-login-msg">
                        1 <i class="glyphicon glyphicon-chevron-right"></i>
                        <span >Digite seu usuário e E-mail</span>
                        <hr/>
                        2 <i class="glyphicon glyphicon-chevron-right"></i>
                        <span >Em breve você receberá um e-mail com mais detalhe.</span>
                        <hr/>
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
                        <input type="text" class="form-control" placeholder="Usuario" autofocus name="usuario" value="<?php echo $this->input->post('usuario'); ?>">
                    </div><!-- /input-group -->

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="E-mail" value="<?php echo $this->input->post('email'); ?>" required name="email">
                    </div><!-- /input-group -->
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Repita o E-mail" value="<?php echo $this->input->post('emailconf'); ?>" required name="emailconf">
                    </div><!-- /input-group -->

                    <button class=" btn  btn-primary btn-block " type="submit">
                        Recuperar <i class="fa fa-sign-in btn fa-2x"></i>
                    </button>
                </div>
                <div class="panel-footer pull-rigth">Voltar para tela de <a href="login" >Login</a></div>
            </form>
        </div> <!-- /container -->
        <?php $this->load->view('layout/foot.php'); ?>
        <?php $this->load->view('layout/scripts.php');?>
    </body>
</html>
