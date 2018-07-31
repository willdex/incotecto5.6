<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Incotec</title>



     <?php echo Html::style('css/bootstrap.css'); ?>

      <?php echo Html::style('css/estilo.css'); ?>

      <?php echo Html::style('css/font-awesome.css'); ?>




</head>


<body style="overflow-x: hidden;">
  <br>
    <!-- Navigation -->
   
    <!-- Page Content -->
    <div class="container-fluid">


         <div class="row">
          <div class="col-xs-12">
           <?php echo $__env->make('alerts.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
           <?php echo $__env->make('alerts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('alerts.request', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          
          </div>
    </div>
    <br>  <br>  



       <div class="container well" id="sha">

    <div class="row">
          <div class="col-xs-12">
           <?php echo $__env->make('alerts.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
           <?php echo $__env->make('alerts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('alerts.request', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <p align="center"><img src="images/log.png"  width="200" style="display: inline-block; margin: 1.0em;" ></p>
          </div>
    </div>
 
      
       
    <?php echo Form::open(['route'=>'mail.store', 'method'=>'POST']); ?>


        <div class="form-group">
           <input type="email" id="emailR" class="form-control" placeholder="Correo electrónico" name="emailR" required autofocus>
        </div>

        <img src="images/cargando.gif" width="175" height="50" id="cargandoR" style="display: none;">
       <button class="btn btn-lg btn-primary btn-block" type="submit" id="btnR" name="btnR">ENVIAR</button> <br> 
       
      <!--  <?php echo Form::submit(); ?>  -->
 
    <?php echo Form::close(); ?>


        <div >
           <p class="help-block">Introduzca el código generado.</p>
           <center><img src="" id="image" style="height: 40px;">
  
            <button type="button" class="btn btn-danger" id="btn"><i class="fa fa-refresh" aria-hidden="true"></i> refresh</button>
            </center>
        </div>

        <div>
            <center><input type="text" class="form-control" id="txtcaptcha" style="margin-top: 5px; width: 70%;"></center> 
        </div>

  </div>

<br>





        <!-- Footer -->
       <footer style="position: absolute; width: 100%; bottom: 0;">
            
            <div class="content">
               

                <div class="row" style="background-color: black; color: white; ">
                    <center>
                        <p>© Copyright 2017. All Rights Reserved - <a href="http://www.grayhatcorp.com/" target="_blank" style="font-style: italic; text-decoration: none;"> Desarrolladores </a> </p>
                    </center>
                </div>

            </div>

        </footer>

    </div>
    <!-- /.container -->





    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <?php echo Html::script('js/myjs.js'); ?>

    <?php echo Html::script('js/myjscargando.js'); ?>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js"></script>



</body>

</html>
