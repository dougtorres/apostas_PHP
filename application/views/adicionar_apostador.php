<!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Adicionar Apostador - Apostas Boi Poicos</title>
    </head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/reset.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/style.css'); ?>">
    <link rel="stylesheet" media="screen" href="<?php echo base_url('public/css/bootstrap.css'); ?>">
    <script type="text/javascript" src="<?php echo base_url('public/js/jquery.js'); ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('public/js/bootstrap.js'); ?>"></script>
    
    <style type="text/css">
        
        body {
  background:url('<?php echo base_url('public/images/background.jpg');?>') #A98436 no-repeat;
   background-attachment: fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
}
        
        
    </style>

<body background="http://programajsilva.com.br/wp-content/woo_custom/176-Grama.jpg">


<br><br>
<div id="content" class="container">
    <div class="col-lg-5 col-md-offset-3 jumbotron" >

    	<p class="text-center">CRIAR BOI POICO</p>

    	<br>
<?php
echo form_open("Apostadores/inserir");
?>

        <div class="form-group">
    <label>Nome</label>
    <input type="text" name="nome" value="<?php echo set_value('nome') ?>" class="form-control" placeholder="Insira seu nome">
        </div>
    <div class="form-group">
    <label>Telefone para contato</label>
    <input type="text" name="telefone" value="<?php echo set_value('telefone') ?>" class="form-control" placeholder="Insira seu telefone">
    </div>
<div class="form-group">
    <label for="exampleInputEmail1">Login</label>
    <input type="text" name="login" value="<?php echo set_value('login') ?>" class="form-control" id="exampleInputEmail1" placeholder="Insira seu login">
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" name="senha" value="<?php echo set_value('senha') ?>" class="form-control" id="exampleInputPassword1" placeholder="Crie uma senha">
</div>
    <div class="form-group">
    <label for="exampleInputPassword1">Confirme sua Senha</label>
    <input type="password" name="confirma" value="<?php echo set_value('confirma') ?>" class="form-control" id="exampleInputPassword1" placeholder="Digite novamente sua senha">
</div>
        </br>
        <div class="form-group">
<button type="submit" class="btn btn-default">Criar Cadastro</button>
        </div>
<?php
echo form_close();
echo validation_errors();
?></div>
</div>

</body>

</html>