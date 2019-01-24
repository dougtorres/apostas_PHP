


<div class="col-sm-9 col-md-10">

    <br><br>
    <div id="content" class="container">
        <div class="col-lg-5" >

            <form method="post" action="<?php echo base_url('painel/adicionar_time_func'); ?>" enctype="multipart/form-data">

                <div class="form-group">
                    <p id="label-painel">Campeonato</p>
                    <select name="campeonato" value="<?php echo set_value('campeonato') ?>" class="form-control">
                        <option>Selecione...</option>
                        <?php
                        
                        echo $options_camp;
                        
                        ?>
                    </select>
                </div>



                <div class="form-group">
                    <p id="label-painel">Data</p>
                    <input type="date" name="data" value="<?php echo set_value('data') ?>" class="form-control" >
                </div>

                <div class="form-group">
                    <p id="label-painel">Hora do jogo</p>
                    <input type="time" name="hora" value="<?php echo set_value('hora') ?>" class="form-control">
                </div>

                <div class="form-group">
                    <p id="label-painel">Mandante</p>
                    <select name="mandante" value="<?php echo set_value('mandante') ?>" class="form-control">
                        <option>Selecione...</option>
                        <?php
                        
                        echo $options;
                        
                        ?>
                    </select>
                </div>


                <div class="form-group">
                    <p id="label-painel">Visitante</p>
                    <select name="visitante" value="<?php echo set_value('visitante') ?>" class="form-control">
                        <option>Selecione...</option>
                        <?php
                        
                        echo $options;
                        
                        ?>
                    </select>
                </div>
                </br>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Adicionar Jogo</button>
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
