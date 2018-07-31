<?php $__env->startSection('contenido'); ?> 




 

  <div class="row">

    <div class="col-lg-1">  
    </div>


    <div class="col-lg-10">  

        
        <center> <h2 style="text-transform: uppercase; font-weight: bold;"> Consultar </h2> </center>


 


<!-- ///////////////////////////////////////////////////////////////////////////////////////// -->

 



     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      	<table class="table table-striped table-bordered table-condensed table-hover" style="background: white">
      	<thead>
      	   <th style="font-size: 16px;">Proveedores:<center><?php echo $__env->make('consultar.search1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></center></th>  
           <th style="font-size: 16px;">Categorias:<center><?php echo $__env->make('consultar.search2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></center></th>                  
      	
      	</thead>
         <tbody align="center" id="body_empresa"> 
         <?php foreach($sqlAdm as $movAdm): ?>
         <tr>
            <td style="font-size: 15px;"><?php echo e($movAdm->proveedor); ?></td>

            <td style="font-size: 15px;"><?php echo e($movAdm->nombre); ?></td>
         </tr>
         <?php endforeach; ?>
         </tbody>         
      	</table>
        <div class="pull-left"> <?php echo $sqlAdm->render(); ?>  </div>
     </div>
     
     

      </div>
    </div>




</div>



    <div class="col-lg-1">  
    </div>

  </div>

  <?php echo Html::script('js/jsmodal.js'); ?>

 
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.cpanelp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>