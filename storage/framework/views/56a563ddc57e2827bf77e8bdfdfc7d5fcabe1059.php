<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Incotec</title>


    <?php echo $__env->make('log.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('log.modalvideo1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('log.modalvideo2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('log.modalvideo3', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('log.modalvideo4', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


     <?php echo Html::style('css/bootstrap.css'); ?>

      <?php echo Html::style('css/estilo.css'); ?>

      <?php echo Html::style('css/font-awesome.css'); ?>


</head>


<body style="overflow-x: hidden;">

    <!-- Navigation -->
     <br><br><br><br><br>


    <!-- Page Content -->
    <div class="container-fluid">





         <div class="container well" id="sha">

    <div class="row">

        <div class="col-xs-12">

                <?php echo $__env->make('alerts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->make('alerts.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <!-- <?php echo $__env->make('alerts.request', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> -->
          <p align="center"><img src="images/log.png"  width="200" style="display: inline-block; margin: 1.0em;" ></p>
          
        </div>

    </div>
 
    <?php echo Form::open(['route'=>'login.store', 'method'=>'POST']); ?>


        <div class="form-group">
          <input type="email" id="email" class="form-control" placeholder="Correo electrónico" name="email" required autofocus>
        </div>
        
        <div class="form-group">
          <input type="password" id="pass" class="form-control" placeholder="Contraseña" name="pass" required>
        </div>
 
        <button class="btn btn-lg btn-primary btn-block" type="submit" id="btnsesion">Iniciar Sesión</button>
   <img src="images/cargando.gif" width="175" height="50" id="cargando" style="display: none;">
         <br>
 
   <?php echo Form::close(); ?>


        <p class="help-block"><a href="<?php echo URL::to('registrarse'); ?>">Regístrate como proveedor</a></p>

        <p class="help-block"><a href="" data-toggle="modal" data-target="#ModalContraseña">¿Olvidaste la contraseña?</a></p>



<div class="btn-group dropup">
  <button type="button" class="btn btn-primary">Videos Tutoriales</button>
 
  <button type="button" class="btn btn-primary dropdown-toggle"
          data-toggle="dropdown">
    <span class="caret"></span>
    <span class="sr-only">Desplegar menú</span>
  </button>
 
  <ul class="dropdown-menu" role="menu">
    <li><a href="" data-toggle="modal" data-target="#ModalVideo1">Cómo Registrarse?</a></li>
    <li><a href="" data-toggle="modal" data-target="#ModalVideo2">Cómo Ingresar?</a></li>
    <li><a href="" data-toggle="modal" data-target="#ModalVideo3">Olvidaste tu Contraseña</a></li>
    <li><a href="" data-toggle="modal" data-target="#ModalVideo4">Enviado Propuesta</a></li>

  </ul>
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


</body>


           <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <?php echo Html::script('js/myjs.js'); ?>

    <?php echo Html::script('js/myjscargando.js'); ?>

    <!-- Bootstrap Core JavaScript -->
    <?php echo Html::script('js/bootstrap.js'); ?>



</html>
