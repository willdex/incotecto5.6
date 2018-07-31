<!-- Modal -->
<div id="ModalNoti" data-backdrop="static" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-header" style="background: #3c8dbc; color: white">
        <h3 class="modal-title"><b>Enviar</b></h3>
      </div> 


             <div class="row">

            
            <div class="col-md-12">

    {!!Form::open(['route'=>'login.store', 'method'=>'POST'])!!}

            <form  id="f_enviar_correo" name="f_enviar_correo"  action="enviar_correo"  class="formarchivo" enctype="multipart/form-data" method="post" >

             <input type="hidden" name="_token" id="_token"  value="{{ csrf_token() }}"> 

                  <div class="box box-primary">
                    <div class="box-header with-border" align="center">
                    </div><!-- /.box-header -->
                    <div class="box-body">
                    
                     <!-- <div class="form-group">
                        <input class="form-control" placeholder="Para:" id="destinatario" name="destinatario">
                      </div>
                      <div class="form-group">
                        <input class="form-control" placeholder="Asunto:" id="asunto" name="asunto">
                      </div>-->
                      <div class="form-group">
                      <h1>Gracias por utilizar el Sistema de Compras Incotec... Su mensaje adjunto se ha enviado correctamente.</h1>
                         
                        </textarea>
                      </div>
                     
                      
                      </div>


                    </div><!-- /.box-body -->
                    <div class="box-footer">
                      <div class="pull-right">
                     
                        <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Aceptar</button>
                        <img src="images/cargando.gif" width="175" height="50" id="cargando" style="display: none;">


          {!!Form::close()!!}


                      </div>
                   <br/>
                    </div><!-- /.box-footer -->
                  </div><!-- /. box -->

              </form>
            </div><!-- /.col -->
          </div><!-- /.row -->
              
   <script src="js/sistemalaravel.js"></script>
 <script src="js/jquery.js"></script>

    {!!Html::script('js/myjs.js')!!}
    {!!Html::script('js/myjscargando.js')!!}
    <script>
     
      function activareditor(){   
        $("#contenido_mail").wysihtml5();
      };

      activareditor();
    </script>



    </div>
  </div>
</div>
