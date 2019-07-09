@if(Session::has('flash_message'))
  <div class="sufee-alert alert with-close {{ Session::get('alert-class') }} alert-dismissible fade show">
      <span class="badge badge-pill badge-success"><?php if(Session::get('alert-class') == 'alert-success'){ echo 'Success'; }else{ echo 'Failed'; } ?></span>
      {{ Sesssion::get('flash_message') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
      </button>
  </div>
@endif
