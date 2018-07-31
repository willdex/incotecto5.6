  
<?php $__env->startSection('contenido'); ?> 

<?php echo $__env->make('escritorio.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>




  <div class="row">
  




        <?php if(Auth::user()->privilegio == 0): ?>

            <div class="col-lg-6">

                <?php  $sql = DB::select('SELECT nombre, convocatoria.idpublic, titulo, descripcion, fecha, fecha_ad FROM convocatoria, categoria, prov_conv WHERE convocatoria.idpublic=prov_conv.idpublic and convocatoria.idcat=categoria.idcat and prov_conv.id='.Auth::user()->id. ' Order by fecha_ad DESC LIMIT 5'); ?>

                    
                    <h3><i class="fa fa-star" aria-hidden="true" style="color: #FACB14;"></i> Convocatorias Adjudicadas
                     <a href="<?php echo URL::to('convocatoriasaprobadas'); ?>"> <button class="btn btn-primary pull-right" style="font-size: 15px; background-color: black; border-color: black;">Ver Todas</button></a>
                    </h3> 
                    
                    <br>

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="table-responsive" style="overflow-x:inherit">

              <table class="table table-striped table-bordered table-condensed table-hover" style="background: white">
                  <thead>
                    <th style="font-size: 16px;"><center>Título</center></th>
                    <th style="font-size: 16px;"><center>Categoria</center></th>
                    <th style="font-size: 16px;"><center>Fecha-Adjudicación</center></th>
                    <th style="font-size: 16px;"><center>Opciones</center></th>
                  </thead>
                  <tbody align="center" id="body_empresa">          
               <?php foreach($sql as $mov): ?>
                  <tr>
                    <td style="font-size: 15px;"><?php echo e($mov->titulo); ?></td>          
                    <td style="font-size: 15px;"><?php echo e($mov->nombre); ?></td>
                    <td style="font-size: 15px;"><?php echo e($mov->fecha_ad); ?></td>
                    <td style="font-size: 15px;"> <a href="<?php echo nl2br(e($mov->descripcion)); ?>"><button class="btn btn-primary" style="font-size: 14px;"><i class="fa fa-download" aria-hidden="true" style="font-size: 18px;"></i> DESCARGAR</button></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
                  </tbody>          
              </table>

              </div>
            </div>


            </div>
   <script src="js/sistemalaravel.js"></script>

         <?php endif; ?>  


        <?php if(Auth::user()->privilegio == 0): ?>

              <div class="col-lg-6">

                <h3> Envíanos tu consulta </h3>

                <?php echo Form::open(['route'=>'consulta.store', 'method'=>'POST']); ?>


                  <div class="form-group">

                    <label style="font-size: 18px;">Asunto:</label><br>
                    <input type="text" class="form-control" name="asunto" id="asunto" placeholder="Asunto" required style="border-radius: 5px; width: 85%;">

                        <br>

                    <label style="font-size: 18px;">Mensaje:</label>
                    <textarea class="form-control" rows="5" name="mensaje" id="mensaje" placeholder="Mensaje" required style="border-radius: 5px; width: 85%;"></textarea>

                    <input type="hidden" name="correo" value="<?php echo Auth::user()->correo; ?>">

                  </div>

                  <img src="images/cargando.gif" width="175" height="50" id="cargandoc" style="display: none;">

                  <button class="btn btn-lg btn-primary" type="submit" id="btnc" name="btnc">ENVIAR</button> <br><br>
         
                <?php echo Form::close(); ?>


                <?php echo $__env->make('alerts.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->make('alerts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

              </div>

        <?php endif; ?>




        <!-- ///////////////////////////**ADMIN**////////////////////////////////////// -->




        <?php if((Auth::user()->privilegio == 1) || (Auth::user()->privilegio == 2)): ?>


                <div class="col-lg-1"></div> 

                <div class="col-lg-3">  

                  <div class="small-box bg-blue">
                    <div class="inner">
                      <?php  $nro = DB::select('select COUNT(*) as cant From convocatoria'); ?>
                        <?php foreach($nro as $res): ?>
                          <h3><?php echo e($res->cant); ?></h3>
                        <?php endforeach; ?>
                      <p style="font-size: 18px;">Convocatorias</p>
                    </div>

                    <div class="icon">
                     <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                    </div>
                    <a href="#" class="small-box-footer" style="font-size: 17px;" data-toggle="modal" data-target="#ModalCrear">Añadir Nueva <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                  </div>
                </div>

                <div class="col-lg-3">

                  <div class="small-box bg-black">
                    <div class="inner">
                      <?php  $nro2 = DB::select('SELECT COUNT(*) as cant FROM convocatoria WHERE estado="activa" or estado="parcial"'); ?>
                        <?php foreach($nro2 as $res2): ?>
                          <h3><?php echo e($res2->cant); ?></h3>
                        <?php endforeach; ?>
                      <p style="font-size: 18px;">Activas-Parciales</p>
                    </div>

                    <div class="icon">
                      <i class="fa fa-file-text-o" aria-hidden="true"></i>
                    </div>
                    <a href="<?php echo URL::to('convocatoriasactivas'); ?>" class="small-box-footer" style="font-size: 17px;" data-toggle="modal" data-target="#ModalAdjuntar">Ver Todas <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                  </div>
                  
                </div>

                <div class="col-lg-3">

                  <div class="small-box bg-red">
                    <div class="inner">
                      <?php  $nro2 = DB::select('SELECT COUNT(*) as cant FROM convocatoria WHERE estado="inactiva"'); ?>
                        <?php foreach($nro2 as $res2): ?>
                          <h3><?php echo e($res2->cant); ?></h3>
                        <?php endforeach; ?>
                      <p style="font-size: 18px;">Inactivas</p>
                    </div>

                    <div class="icon">
                      <i class="fa fa-file-text-o" aria-hidden="true"></i>
                    </div>
                    <a href="<?php echo URL::to('convocatoriasinactivas'); ?>" class="small-box-footer" style="font-size: 17px;">Ver Todas <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                  </div>
                  
                </div>
                

        <!-- //////////////////////////////////////////////////////////////////// -->

          <div class="col-lg-6">

                  <?php echo $__env->make('alerts.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                  <?php echo $__env->make('alerts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <?php  $sql = DB::select('select nombre, idpublic, titulo, descripcion, DATE_FORMAT(fecha,"%d-%m-%Y") AS fecha, estado FROM categoria, convocatoria WHERE categoria.idcat=convocatoria.idcat and convocatoria.estado<>"inactiva" Order by fecha desc LIMIT 7'); ?>

                  <div>
                    <h3> Últimas Convocatorias </h3> 
                     <!--<a href="<?php echo URL::to('convocatoriasaprobadas'); ?>"> <button class="btn btn-primary pull-right" style="font-size: 15px; background-color: black; border-color: black;">Ver Todas</button></a> -->
                  </div>
                  

            <div class="row">
              <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="table-responsive"> 

              
                  <table class="table table-striped table-bordered table-condensed table-hover" style="background: white">
                      <thead>
                        <th style="font-size: 16px;"><center>Título</center></th>
                        <th style="font-size: 16px;"><center>Categoria</center></th>
                        <th style="font-size: 16px;"><center>Fecha-Publicación</center></th>
                        <th style="font-size: 16px;"><center>Opciones</center></th>
                      </thead>
                      <tbody align="center" id="body_empresa">          
                   <?php foreach($sql as $mov): ?>
                      <tr>
                        <td style="font-size: 15px;"><?php echo e($mov->titulo); ?></td>          
                        <td style="font-size: 15px;"><?php echo e($mov->nombre); ?></td>
                        <td style="font-size: 15px;"><?php echo e($mov->fecha); ?></td>
                        <td style="font-size: 15px;"> <a href="<?php echo nl2br(e($mov->descripcion)); ?>"><button class="btn btn-primary" style="font-size: 14px;"><i class="fa fa-download" aria-hidden="true" style="font-size: 18px;"></i> DESCARGAR</button></a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                      </tbody>          
                  </table>
                </div>
              </div>
            </div>

          </div>

        <?php endif; ?>  




   
  </div>




<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.cpanelp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>