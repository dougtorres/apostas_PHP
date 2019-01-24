
    
        <div class="col-sm-9 col-md-10">
            
          <br><br>
<div id="content" class="container">
    <div class="col-lg-5" >

        <form method="post" action="<?php echo base_url('painel/adicionar_time_func'); ?>" enctype="multipart/form-data">

        <div class="form-group">
    <p id="label-painel">Nome do time</p>
    <input type="text" name="nome-time" value="<?php echo set_value('nome-time') ?>" class="form-control" placeholder="Insira o nome do time">
        </div>
        
    
    <p id="label-painel">Escudo</p>
    <input type="file" name="file" value="<?php echo set_value('file') ?>">
       
   
        </br>
        <div class="form-group">
<button type="submit" class="btn btn-default">Adicionar Time</button>
        </div>

        <p id="label-painel">
            
               <?php
    echo "$error_msg";
?>
    
    <?php
echo validation_errors();
?>
        </p>
</form

 
    </div>
    
    
</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
