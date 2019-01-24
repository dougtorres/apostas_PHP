<!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Painel - Boi Poicos</title>
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/reset.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/style-dashboard.css'); ?>">
    <link rel="stylesheet" media="screen" href="<?php echo base_url('public/css/bootstrap.css'); ?>">
    <script type="text/javascript" src="<?php echo base_url('public/js/mootools.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('public/js/calendar.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('public/js/jquery.js'); ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('public/js/bootstrap.js'); ?>"></script>
</head>

     <style type="text/css">
        
        body {
  background:url('<?php echo base_url('public/images/background.jpg');?>') #A98436 no-repeat;
   background-attachment: fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
}
        
        
    </style>
  <body >

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Esconder menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url();?>">Apostas - Boi Poicos</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
        
            <li><a>Nome do usuário</a></li>
            <li><a href="#">Minha Conta</a></li>
            <li><a href="<?php echo base_url('login/login/logout');?>">Sair</a></li>
          </ul>
          
        </div>
      </div>
    </nav>
