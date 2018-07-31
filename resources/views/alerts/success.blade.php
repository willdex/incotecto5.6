@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert" style="width: 85%;">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif