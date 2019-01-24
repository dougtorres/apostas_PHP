<!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Apostas Boi Poicos</title>
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

<body>


<br><br>
<div id="content" class="container">
    <div class="col-lg-5 col-md-offset-3 jumbotron" >

    	
<?php
echo form_open("login/logar");
?>

        <div class="form-group">
    <label>Usuário: </label>
    <input type="text" name="usuario" value="<?php echo set_value('usuario') ?>" class="form-control" placeholder="Insira seu nome">
        </div>
    <div class="form-group">
    <label>Senha: </label>
    <input type="password" name="senha" value="<?php echo set_value('senha') ?>" class="form-control" placeholder="Insira seu telefone">
    </div>
        </br>
        <div class="form-group">
<button type="submit" class="btn btn-default">Logar</button>
        </div>
<?php
echo form_close();
echo validation_errors();
?></div>
</div>
<div class="col-lg-5 col-md-offset-3">
    
    <p id="nojumbo"class="text-center">
        Ainda não possui conta? <a href="">CRIE AQUI!</a>
    </p>
    
    
</div>
</body>

</html>