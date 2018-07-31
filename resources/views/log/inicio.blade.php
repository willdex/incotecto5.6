<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Incotec</title>


    @include('log.modal')
    @include('log.modalvideo1')
    @include('log.modalvideo2')
    @include('log.modalvideo3')
    @include('log.modalvideo4')


     {!!Html::style('css/bootstrap.css')!!}
      {!!Html::style('css/estilo.css')!!}
      {!!Html::style('css/font-awesome.css')!!}

</head>


<body style="overflow-x: hidden;">

    <!-- Navigation -->

          <p align="center"><img src="images/50a.png"  width="150" style="display: inline-block; margin: 1.0em;" ></p>

    <!-- Page Content -->
    <div class="container-fluid">





         <div class="container well" id="sha">

    <div class="row">

        <div class="col-xs-12">

                @include('alerts.errors')
                @include('alerts.success')
                <!-- @include('alerts.request') -->
          <p align="center"><img src="images/log.png"  width="200" style="display: inline-block; margin: 1.0em;" ></p>
          
        </div>

    </div>
 
    {!!Form::open(['route'=>'login.store', 'method'=>'POST'])!!}

        <div class="form-group">
          <input type="email" id="email" class="form-control" placeholder="Correo electrónico" name="email" required autofocus>
        </div>
        
        <div class="form-group">
          <input type="password" id="pass" class="form-control" placeholder="Contraseña" name="pass" required>
        </div>
 
        <button class="btn btn-lg btn-primary btn-block" type="submit" id="btnsesion">Iniciar Sesión</button>
   <img src="images/cargando.gif" width="175" height="50" id="cargando" style="display: none;">
         <br>
 
   {!!Form::close()!!}


        <p class="help-block"><a href="{!!URL::to('registrarse')!!}">Regístrate como proveedor</a></p>

        <p class="help-block"><a href="" data-toggle="modal" data-target="#ModalContraseña">¿Olvidaste la contraseña?</a></p>



<div class="btn-group dropup">
  <button type="button" class="btn btn-primary">Videos Tutoriales</button>
 
  <button type="button" class="btn btn-primary dropdown-toggle"
          data-toggle="dropdown">
    <span class="caret"></span>
    <span class="sr-only">Desplegar menú</span>
  </button>
  <br>

 
  <ul class="dropdown-menu" role="menu">
    <li><a href="" data-toggle="modal" data-target="#ModalVideo1">Cómo Registrarse?</a></li>
    <li><a href="" data-toggle="modal" data-target="#ModalVideo2">Cómo Ingresar?</a></li>
    <li><a href="" data-toggle="modal" data-target="#ModalVideo3">Olvidaste tu Contraseña?</a></li>
    <li><a href="" data-toggle="modal" data-target="#ModalVideo4">Enviando Propuesta</a></li>

  </ul>
</div>


 
  </div>

<br>




        <!-- Footer -->
        <footer style="position: fixed; width: 100%; bottom: 0;">
            
            <div class="content">
               

                <div class="row" style="background-color: black; color: white; ">
                    <center>
                        <p>© Copyright 2018. All Rights Reserved - <a href="http://www.grayhatcorp.com/" target="_blank" style="font-style: italic; text-decoration: none;"> Desarrolladores </a> </p>
                    </center>
                </div>

            </div>

        </footer>

    </div>
    <!-- /.container -->


</body>


           <!-- jQuery -->
    <script src="js/jquery.js"></script>

    {!!Html::script('js/myjs.js')!!}
    {!!Html::script('js/myjscargando.js')!!}
    <!-- Bootstrap Core JavaScript -->
    {!!Html::script('js/bootstrap.js')!!}


</html>

