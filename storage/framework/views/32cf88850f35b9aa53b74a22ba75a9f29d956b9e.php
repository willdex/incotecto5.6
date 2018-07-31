<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>INCOTEC</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        

        <?php echo Html::script('js/jQuery-2.1.4.min.js'); ?>

        <?php echo Html::style('css/bootstrap-datetimepicker.css'); ?>

        
        <!-- Bootstrap 3.3.5 -->
        <?php echo Html::style('css/bootstrap.css'); ?>

        <!-- Font Awesome -->
        <?php echo Html::style('css/font-awesome.css'); ?>

        <!-- Theme style -->
        <?php echo Html::style('css/AdminLTE.css'); ?>

        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <?php echo Html::style('css/_all-skins.css'); ?>

        <?php echo Html::style('css/bootstrap-select.min.css'); ?>

        <?php echo Html::style('css/alertify.css'); ?>

        <?php echo Html::style('css/default.css'); ?>


    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
     <link rel="shortcut icon" href="images/iso.png">

  </head>


  <body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper" id="body_principal">

      <header class="main-header">

        <!-- Logo -->
        <a href="http://taxicorp.esy.es" target="_blanck" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b style="color: #026EAE; font-family: serif; font-size: 25px;">ICT</b></span>

          <!-- logo for regular state and mobile devices -->

        <span class="logo-lg"> <img src="<?php echo e(asset('images/log.png')); ?>" class="img-responsive" style="max-width: 81%;"> </span>         
          <!--<span class="logo-lg"><b style="color: #026EAE; font-family: serif; font-size: 40px;"><img src="images/log.png"  width="170"  height="40"></b></span> -->
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only" >Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <small class="bg-green">Online</small>
                  <span style="color: #000000"><b><?php echo e(Auth::user()->correo); ?></b></span>
                  <i class="fa fa-user-circle" aria-hidden="true" style="color: black;"></i>                              
                </a> 

                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">                    
                    <p>
                      www.grayhatcorp.com Desarrollando Software
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      
                        <a href="<?php echo URL::to('logout'); ?>" style=""><button type="button" class="btn btn-danger"><b><i class="fa fa-power-off"></i> SALIR</b> </button></a> 
                      
                    </div>
                  </li>
                </ul>

              </li>
            
              <!-- User Account: style can be found in dropdown.less -->
              <!--li class="dropdown user user-menu">
      
                  <a href="<?php echo URL::to('logout'); ?>" style="background-color: red; margin-right: 5px;"><button type="button" class="btn btn-danger"><b><i class="fa fa-power-off"></i> SALIR</b>  </button></a>  

              </li -->

            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>

          
            <li class="treeview">
              <a href="<?php echo URL::to('escritorio'); ?>">
                <i class="fa fa-tachometer" aria-hidden="true"></i>
                <span>DASHBOARD</span>
              </a>
            </li> 
             
            
            <li class="treeview">
              <a href="#">

                <i class="fa fa-file" aria-hidden="true"></i>
                <span>CONVOCATORIAS</span>
                 <i class="fa fa-angle-left pull-right" style="color: white; font-size: 18px;"></i>
              </a>
              
             
              <ul class="treeview-menu">
                 <li><a href="<?php echo URL::to('convocatoriasaprobadas'); ?>"><i class="fa fa-circle-o"></i> Adjudicadas </a></li>
                <li><a href="<?php echo URL::to('convocatoriasactivas'); ?>"><i class="fa fa-circle-o"></i> Activas </a></li>
                <li><a href="<?php echo URL::to('convocatoriasinactivas'); ?>"><i class="fa fa-circle-o"></i> Inactivas </a></li>
              </ul>
            </li> 


             <!--li class="treeview">
              <a href="#">
                <i class="fa fa-clipboard" aria-hidden="true"></i>
                <span>MIS PROPUESTAS</span>
              </a>
            </li> 

            <li class="treeview">
              <a href="#">
                <i class="fa fa-bell" aria-hidden="true"></i>
                <span>NOTIFICACIONES</span>
              </a>
            </li--> 

<?php if((Auth::user()->privilegio == 1) || (Auth::user()->privilegio == 2)): ?>
    <?php if(Auth::user()->privilegio !=2): ?>
            <li class="treeview">
              <a href="<?php echo URL::to('proveedores'); ?>">
                <i class="fa fa-users" aria-hidden="true"></i>
                <span>PROVEEDORES</span>
              </a>
            </li> 
    <?php endif; ?>
            <li class="treeview">
              <a href="<?php echo URL::to('registrosproveedor'); ?>">
                <i class="fa fa-clipboard" aria-hidden="true"></i>
                <span>REGISTRO PROVEEDOR</span>
              </a>
            </li>   

 <?php endif; ?>  

            <li class="treeview">
              <a href="<?php echo e(URL('registrosproveedor/password')); ?>">
                <i class="fa fa-key" aria-hidden="true"></i>
                <span>CAMBIAR PASSWORD</span>
              </a>
            </li>

            <li class="treeview">
              <a href="<?php echo URL::to('perfil'); ?>">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>PERFILES</span>
              </a>
            </li>

             
<?php if(Auth::user()->privilegio == 0): ?>

            <li class="treeview">
              <a href="<?php echo URL::to('ayuda'); ?>">
                <i class="fa fa-question-circle" style="font-size: 18px;" aria-hidden="true"></i>
                <span>AYUDA</span>
              </a>
            </li>   

 <?php endif; ?>      

             <!--li>
              <a href="#">
                <i class="fa fa-plus-square"></i> <span>Ayuda</span>
                <small class="label pull-right bg-red">PDF</small>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
                <small class="label pull-right bg-yellow">IT</small>
              </a>
            </li-->
                        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>



       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">          
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <!--div class="box-header with-border">
                  <h3 class="box-title">Sistema de Ventas</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div-->
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                      <div class="col-md-12">

                  <?php if(Auth::user()->privilegio == 0): ?>
                      <?php  $cat = DB::select('select categoria.idcat, nombre FROM prov_cat, categoria, proveedor WHERE categoria.idcat=prov_cat.idcat and proveedor.id=prov_cat.id AND proveedor.id='.Auth::user()->id); ?>

                        <?php foreach($cat as $mov): ?>

                          <?php $ruta="convocatorias/".$mov->idcat;?>

                          <a href="<?php echo URL::to($ruta); ?>">

                            <?php $c = DB::select('select COUNT(*) as nro FROM convocatoria WHERE estado<>"inactiva" AND idcat='.$mov->idcat); ?>

                            <?php foreach($c as $mov2): ?>

                            <button class="btn-sm btn-primary" type="button" style="font-size: 13px;">
                              <?php echo e($mov->nombre); ?> <span class="badge"><?php echo e($mov2->nro); ?></span>
                            </button>

                            <?php endforeach; ?>

                          </a>

                        <?php endforeach; ?>
                   <?php endif; ?> 
                        
 
                    <br><br><br>
                                            




                      </div>        
                    </div><!-- /.row -->

                          <!--Contenido-->

                              <?php echo $__env->yieldContent('contenido'); ?>   
                                                               
                           <!--Fin Contenido-->


                </div><!-- /.box-body -->


              </div><!-- /.box -->

            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->




      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <!-- <b> INCOTEC </b>  -->
        </div>
        <strong>Copyright &copy; <a href="http://incotec.com.bo" target="_blanck" style="color: #026EAE">INCOTEC</a>.</strong> All rights reserved.
      </footer>
  </div>
  
<div>
  <?php echo $__env->make('alerts.cargando', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>


        <?php echo Html::script('js/jquery.js'); ?>


        <?php echo $__env->yieldPushContent('scripts'); ?>

        <?php echo Html::script('js/myjs.js'); ?>


        <?php echo Html::script('js/myjscargando.js'); ?>


        <?php echo Html::script('js/jsmodal.js'); ?>


        <?php echo Html::script('js/moment.js'); ?>

        <?php echo Html::script('js/moment-with-locales.min.js'); ?>

        <?php echo Html::script('js/numerosmasdecimal.js'); ?>


        <!-- Bootstrap 3.3.5 -->
        <?php echo Html::script('js/bootstrap.js'); ?>

        <?php echo Html::script('js/bootstrap-select.min.js'); ?>

        <?php echo Html::script('js/alertify.js'); ?>


        <!-- AdminLTE App -->
        <?php echo Html::script('js/app.js'); ?>

              
        <?php echo Html::script('js/bootstrap-datetimepicker.min.js'); ?>

       <?php echo Html::script('js/sistemalaravel.js'); ?>


  </body>
</html>


