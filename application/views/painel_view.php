<?php
	$this->load->view('layout/header.php');
	$this->load->view('layout/menu.php');	
?>

<ol class="breadcrumb">
	<li></li><i class="fa fa-tags red fa-1x"></i><li>
  <li><a href="#">Home</a></li>
  <li><a href="#">Menus</a></li>
  <li class="active">Sistemas</li>
</ol>
<div class="row">
	<div class="col-lg-3 col-md-6 ">
	    <div class="panel panel-danger ">
	        <div class="panel-heading">
	            <div class="row">
	                <div class="col-xs-3">
	                    <img src="assets/imagens/Web_Development_64.png" data-loading-text="Loading..." alt="Administração do Site" class="">
	                </div>
	                <div class="col-xs-9 text-right">
	                    <div class="huge"></div>
	                    <div>Administração do Sistema!</div>
	                </div>
	            </div>
	        </div>
	        <a href="#">
	            <div class="panel-footer">
					
					  <a class="pull-left  " href="<?= base_url('usuario');?>"> Cad Usuario </a>
					  <span class="pull-left"><i class="glyphicon glyphicon-option-vertical"></i></span>
					<a class="pull-left" href="<?= base_url('usuario');?>"> Cad Administração </a>
					<span class="pull-left"><i class="glyphicon glyphicon-option-vertical"></i></span>
					<a class="pull-left" href="<?= base_url();?>"> Cad Outros </a>
					
	                <span class="pull-right"><i class="glyphicon glyphicon-cog"></i></span>
	                <div class="clearfix"></div>
	            </div>
	        </a>
	    </div>
	</div>
	<div class="col-lg-3 col-md-6">
	    <div class="panel panel-success">
	        <div class="panel-heading">
	            <div class="row">
	                <div class="col-xs-3">
	                  <img src="assets/imagens/Print_calculator_64.png" data-loading-text="Loading..." alt="Administração do Site" class="">
	                </div>
	                <div class="col-xs-9 text-right">
	                    <div class="huge"></div>
	                    <div>Sistema Financeiro</div>
	                </div>
	            </div>
	        </div>
	        <a href="#">
	            <div class="panel-footer">
	                <span class="pull-left">Entrar</span>
	                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                <div class="clearfix"></div>
	            </div>
	        </a>
	    </div>
	</div>
	<div class="col-lg-3 col-md-6">
	    <div class="panel panel-info">
	        <div class="panel-heading">
	            <div class="row">
	                <div class="col-xs-3">
	                    <img src="assets/imagens/Contact_list_64.png" data-loading-text="Loading..." alt="CRM" class="">
	                </div>
	                <div class="col-xs-9 text-right">
	                    <div class="huge"></div>
	                    <div>CRM - Customer Relationship Managemen!</div>
	                </div>
	            </div>
	        </div>
	        <a href="#">
	            <div class="panel-footer">
	                <span class="pull-left">Entrar</span>
	                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                <div class="clearfix"></div>
	            </div>
	        </a>
	    </div>
	</div>
	<div class="col-lg-3 col-md-6">
	    <div class="panel panel-warning">
	        <div class="panel-heading">
	            <div class="row">
	                <div class="col-xs-3">
	                    <img src="assets/imagens/Technical_Support_64.png" data-loading-text="Loading..." alt="CRM" class="">
	                </div>
	                <div class="col-xs-9 text-right">
	                    <div class="huge"></div>
	                    <div>OS Tickets!</div>
	                </div>
	            </div>
	        </div>
	        <a href="#">
	            <div class="panel-footer">
	                <span class="pull-left">Entrar</span>
	                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                <div class="clearfix"></div>
	            </div>
	        </a>
	    </div>
	</div>
	<div class="col-lg-3 col-md-6">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            <div class="row">
	                <div class="col-xs-3">
	                   <img src="assets/imagens/Trading_phone_call_about_money_64.png" data-loading-text="Loading..." alt="CRM" class="">
	                </div>
	                <div class="col-xs-9 text-right">
	                    <div class="huge"></div>
	                    <div>Telefonia PABX  <i class="fa fa-line-chart fa-1x"></i></div>
	                </div>
	            </div>
	        </div>
	        <a href="#">
	            <div class="panel-footer">
	                <span class="pull-left">Entrar</span>
	                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                <div class="clearfix"></div>
	            </div>
	        </a>
	    </div>
	</div>
	<div class="col-lg-3 col-md-6">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            <div class="row">
	                <div class="col-xs-3">
	                   <img src="assets/imagens/Personal_card_64.png" data-loading-text="Loading..." alt="CRM" class="">
	                </div>
	                <div class="col-xs-9 text-right">
	                    <div class="huge"></div>
	                    <div>Agenda de Colaboradores Congregação<br/>
	                    	<span class="badge pull-right">Contatos 70</span>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <a href="#">
	            <div class="panel-footer">
	                <span class="pull-left">Entrar</span>
	                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                <div class="clearfix"></div>
	            </div>
	        </a>
	    </div>
	</div>
    	<div class="col-lg-3 col-md-6">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            <div class="row">
	                <div class="col-xs-3">
	                    <img src="assets/imagens/Time_planning_64.png" data-loading-text="Loading..." alt="CRM" class="">
	                </div>
	                <div class="col-xs-9 text-right">
	                    <div class="huge"></div>
	                    <div>Escalonamento 2015 </div>
	                </div>
	            </div>
	        </div>
	        <a href="#">
	            <div class="panel-footer">
	                <span class="pull-left">Entrar</span>
	                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                <div class="clearfix"></div>
	            </div>
	        </a>
	    </div>
	</div>
	    	<div class="col-lg-3 col-md-6">
	    <div class="panel panel-default">
	        <div class="panel-heading">
	            <div class="row">
	                <div class="col-xs-3">
	                    <img src="assets/imagens/Folded_Newspaper_64.png" data-loading-text="Loading..." alt="CRM" class="">
	                </div>
	                <div class="col-xs-9 text-right">
	                    <div class="huge"></div>
	                    <div>Newsletter Congregação</div>
	                </div>
	            </div>
	        </div>
		        <a href="#">
		            <div class="panel-footer">
		            	<span class="pull-left">Entrar</span>
		            	<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                	<div class="clearfix"></div>
		            </div>
		        </a>
	    </div>
	</div>
</div>
<div class="row">
	 <div class="col-lg-4 col-md-6">
	    <div class="panel panel-default">
	     	<div class="panel-heading">Reuniões</div>
	        <div class="panel-body">
	            <div class="row">
	                <div class="col-xs-3">
	                   <i class="fa fa-users fa-5x" aria-hidden="true"></i>

	                </div>
	                <div class="col-xs-9 text-right">
	                    <div class="huge"></div>
	                    <div>
	                     <div class="col-lg-2 col-md-6">
	                    	17/12/2015<br/>
	                    	13/11/2015<br/>
	                    	13/11/2015<br/>
	                    	13/11/2015<br/>
	                    	13/11/2015<br/>
	                    </div>
	                    <div class="col-lg-10 col-md-6">
	                    	Reunião Sub Regional<br/>
	                    	Reunião Administrativa<br/>
	                    	<br/>
	                    	<br/>
	                    	<br/>
	                    </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <a href="#">
	            <div class="panel-footer">
	                <span class="pull-left"></span>
	                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                <div class="clearfix"></div>
	            </div>
	        </a>
	    </div>
	</div>
	
	<div class="col-lg-4 col-md-6">
	    <div class="panel panel-default">
	     	<div class="panel-heading">Avisos</div>
	        <div class="panel-body">
	            <div class="row">
	                <div class="col-xs-3">
	                   <img src="assets/imagens/warning41.png" data-loading-text="Loading..." alt="Parabens" class="">
	                </div>
	                <div class="col-xs-9 text-right">
	                    <div class="huge"></div>
	                    <div>
	                     <div class="col-lg-2 col-md-6">
	                    	<br/><br/><br/><br/><br/>
	      
	                    </div>
	                    <div class="col-lg-10 col-md-6">
	                    	<br/>
	      
	                    </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <a href="#">
	            <div class="panel-footer">
	                <span class="pull-left"></span>
	                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                <div class="clearfix"></div>
	            </div>
	        </a>
	    </div>
	</div>
	
	<div class="col-lg-4 col-md-6">
	    <div class="panel panel-default">
	     	<div class="panel-heading">Proximos Aniversariantes</div>
	        <div class="panel-body">
	            <div class="row">
	                <div class="col-xs-3">
	                    <img src="assets/imagens/Floating_balloons_64.png" data-loading-text="Loading..." alt="Parabens" class="">
	                </div>
	                <div class="col-xs-9 text-right">
	                    <div class="huge"></div>
	                    <div>
	                     <div class="col-lg-2 col-md-6">
	                    	05/05/2015<br/>
	                    	13/11/2015<br/>
	                    	13/11/2015<br/>
	                    	13/11/2015<br/>
	                    	13/11/2015<br/>
	                    </div>
	                    <div class="col-lg-10 col-md-6">
	                    	Fernanda Ribeiro<br/>
	                    	Thomas Gonçalves<br/>
	                    	Thomas Gonçalves<br/>
	                    	Thomas Gonçalves<br/>
	                    	Thomas Gonçalves<br/>
	                    </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <a href="#">
	            <div class="panel-footer">
	                <span class="pull-left"></span>
	                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                <div class="clearfix"></div>
	            </div>
	        </a>
	    </div>
	</div>
	
</div>
<?php $this->load->view('layout/foot.php');?>


