<?php
$dadosusuario = $this->session->userdata('dadosusuario');

if (!isset($dadosusuario['nome'])) {
    $dadosusuario['nome'] = 'Admin User';
}
if (!isset($dadosusuario['sobrenome'])) {
    $dadosusuario['sobrenome'] = 'Gonçalves';
}
?>
<div id="nav-top" class="navbar navbar-default navbar-static-top" role="navigation">
    <div id="LAYOUT_HEADER" class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="#">
                <i class="fa fa-internet-explorer fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;Extranet Sub Regional
            </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="<?= base_url(); ?>"><i class="glyphicon glyphicon-home"></i> Painel</a></<li>
                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
                        <i class="glyphicon glyphicon-cog"></i> Administração <span class="caret"></span>
                    </a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="<?= base_url('usuario'); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Cadastrar Usuario</a></li>
                        <li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Cadastrar Administração</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
                        <i class="glyphicon glyphicon-user"></i> Informática <span class="caret"></span>
                    </a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Cadastro Inicial</a></li>
                        <li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Cadastrar Equipamento</a></li>
                        <li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Cadastrar Software Open</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#"><i class="fa fa-file-text" aria-hidden="true"></i> Relatório</a></li>
                    </ul>
                </li>
                <li><a href="#">Secretária</a></li>
            </ul>


            <ul class="nav navbar-nav navbar-right">
                <li id="notificacoes" class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                        <span id="notify-count" class="count"></span>
                        <i class="glyphicon glyphicon-bell"></i>
                    </a>

                    <ul id="notify-menu" class="dropdown-menu" role="menua">
                        <li>
                            <a href="javascript:void(0);" class="more-notify text-center" data-toggle="modal" data-target="#modal_notify">
                                <small>Ver notificações</small>
                            </a>
                            <a href=""><span>Senha espira em ...</span></a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
                        <i class="glyphicon glyphicon-user"></i> <?= $dadosusuario['nome'] . ' ' . $dadosusuario['sobrenome']; ?> <span class="caret"></span>
                    </a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Meu Perfil</a></li>
                        <li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Alterar Perfil</a></li>
                        <li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Alterar Senha</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?= base_url('index.php/login/logout') ?>"><i class="glyphicon glyphicon glyphicon-remove-circle"></i> Sair</a></li>
                    </ul>
                </li>
                <li><a href="<?= base_url('index.php/login/logout') ?>"><i class="glyphicon glyphicon-lock"></i> Sair</a></li>
            </ul>
        </div>
    </div>
</div>
<div id="topo"></div>

