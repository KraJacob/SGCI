<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url() ?>">Ion Auth <br/>CodeIgniter</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <div class="btn-group navbar-right" role="group" aria-label="userreglog">
        <a href="<?php echo site_url() ?>/auth/login" class="btn btn-primary navbar-btn"><i class="fa fa-sign-in fa-2x"></i> <br/>Login Area</a> 
        <a href="<?php echo site_url() ?>/auth/register" class="btn btn-danger navbar-btn"><i class="fa fa-id-badge fa-2x"></i> <br/>Register</a> 
      </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">