<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
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
        <link rel="icon" type="image/gif" href="<?php echo base_url().'assets/imagens/icon-sold.gif';?>">
        <link rel="shortcut icon" type="image/gif"  href="<?php echo base_url().'assets/imagens/icon-sold.gif'; ?>">
        <title><?php echo $titulo;?></title>
        <!-- CSS -->		
        <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/font-awesome-4.3.0/css/font-awesome.min.css'); ?>" rel="stylesheet" media="screen">
        <!-- CSS -->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
		
	

        
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

        <!-- Custom styles for this template -->
        <link href="<?= base_url('assets/css/signin.css') ?>" rel="stylesheet">
        
        
    </head>
    <body>
    </body>
</html>
