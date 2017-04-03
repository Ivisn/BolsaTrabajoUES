<!DOCTYPE html>
<html lang="es">

    <meta charset="utf-8">
    <title>Login | Bolsa de empleo</title>


    <link media="all" type="text/css" rel="stylesheet" href="<?=base_url()?>/public/css/bootstrap.min.css">

<link media="all" type="text/css" rel="stylesheet" href="<?=base_url()?>/public/login/css/style.css">

<link media="all" type="text/css" rel="stylesheet" href="<?=base_url()?>/public/login/css/style-responsive.css">



    <body class="login-body">

    
    <div class="container">
  <div class="form-signin-heading text-center">
                <h1 class="sign-title">Iniciar Sesi&oacute;n</h1>
                <img src="images/PROBUSQUEDA2.png" alt=""/>
            </div>




 <?php if ($message<>'') { ?>
<div class="alert alert-danger alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<div id="infoMessage"><?php echo $message;?></div>
</div>
<?php } ?>
<?php echo form_open("auth/login", 'accept-charset="UTF-8" class="cmxform form-signin" id="loginForm"');     ?>
 

 <div class="form-signin-heading text-center">
                <h1 class="sign-title">Iniciar Sesi&oacute;n</h1>
                <img src="images/PROBUSQUEDA2.png" alt=""/>
            </div>

               <div class="login-wrap">
  <p>
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  <p><?php echo form_submit('submit', lang('login_submit_btn'),"class='btn-submit'");?></p>
   </div>
   <p style="text-align: center;"><a href="forgot_password" ><?php echo lang('login_forgot_password');?></a></p>
   <br>
<?php echo form_close();?>



    </div>


        <!-- Placed js at the end of the document so the pages load faster -->
<script src="<?=base_url()?>/public/login/js/jquery-1.10.2.min.js"></script>

<script src="<?=base_url()?>/public/login/js/bootstrap.min.js"></script>

<script src="<?=base_url()?>/public/login/js/modernizr.min.js"></script>

<script src="<?=base_url()?>/public/login/js/jquery.nicescroll.js"></script>

<script src="<?=base_url()?>/public/login/js/scripts.js"></script>


  </body>
</html>