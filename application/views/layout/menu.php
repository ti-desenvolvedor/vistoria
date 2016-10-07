    
<div id="nav-top" class="navbar navbar-default navbar-static-top" role="navigation">
	<div id="LAYOUT_HEADER" class="container-fluid">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#"><img alt="Sold Leilões Online" src="<?php echo base_url('assets/imagens/Trading_phone_call_about_money_24.png');?>" /></a>
		<a class="navbar-brand" href="#">
			Telefonia
		 </a>
	</div>
            <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
			<li><a href="<?php echo base_url().'registros';?>">Ligações</a></li>
                        <li><a href="<?php echo base_url().'iniciar';?>">Relatório</a></li>
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
					</li>
				</ul>
			</li>

			<li class="dropdown">
				<a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
					<i class="glyphicon glyphicon-user"></i> <?=$dadosusuario['nome'].' '.$dadosusuario['sobrenome'];?> <span class="caret"></span>
				</a>
				<ul id="g-account-menu" class="dropdown-menu" role="menu">
					<li><a href="#">Meu Perfil</a></li>
					<li><a href="#">Alterar Perfil</a></li>
					<li><a href="#">Alterar Senha</a></li>
					<li><a href="<?= base_url('index.php/login/logout') ?>">Sair</a></li>
				</ul>
			</li>
			<li><a href="<?= base_url('index.php/login/logout') ?>"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
		</ul>
	</div>
          </div>
      </div>


