<!-- Modal -->
<div id="ModalAdjuntar" data-backdrop="static" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-header" style="background: #3c8dbc; color: white">
        <h3 class="modal-title"><b>Adjuntar Propuesta</b></h3>
      </div> 

            <?php if(Auth::user()->privilegio == 0): ?>

      <div class="modal-body">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 


                <?php echo Form::open(['route'=>'correo.store', 'method'=>'POST','url'=>'/uploadfile','files'=>'true']); ?>

         
              <div class="form-group">

      

                  <?php echo Form::label('titulo2','Título:'); ?>

                  <input type="text" class="form-control" name="titulo" id="asunto" >
                  <br>

                  
                   <!--?php $prov = DB::select('SELECT proveedor.id, proveedor FROM proveedor, prov_cat,categoria WHERE proveedor.id=prov_cat.id AND categoria.idcat=prov_cat.idcat AND categoria.nombre="" '); 
                   ?-->

                   
                 <label style="font-size: 18px;">Mensaje:</label>
                    <textarea class="form-control" rows="5" name="mensaje" id="mensaje" placeholder="Mensaje" required style="border-radius: 5px; width: 100%;"></textarea>

                    <input type="hidden" name="correo" value="<?php echo Auth::user()->correo; ?>">
                    

                          <input type="file" name="image" multiple />


                  </div>

                  <img src="images/cargando.gif" width="175" height="50" id="cargandoc" style="display: none;">

                  <button class="btn btn-lg btn-primary" type="submit" id="btnc" name="btnc">ENVIAR</button> <br><br>
         
          <button data-dismiss="modal" class="btn btn-danger" >CANCELAR</button>
                <?php echo Form::close(); ?>


                <?php echo $__env->make('alerts.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->make('alerts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php endif; ?>

</div>
</div>




      <div class="modal-footer">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 


  <script src="js/jquery.js"></script>

    <?php echo Html::script('js/myjs.js'); ?>

    <?php echo Html::script('js/myjscargando.js'); ?>

    <script>
     
      function activareditor(){   
        $("#contenido_mail").wysihtml5();
      };

      activareditor();
    </script>



    </div>
  </div>
</div>
