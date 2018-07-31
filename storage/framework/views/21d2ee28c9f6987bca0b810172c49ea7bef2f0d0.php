<?php if(Session::has('message-error')): ?>
<div class="alert alert-danger alert-dismissible" role="alert" style="width: 85%;">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <?php echo e(Session::get('message-error')); ?>

</div>
<?php endif; ?>
