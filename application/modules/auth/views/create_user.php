<div id="service">
  <div class="container">
<h1><?php echo lang('create_user_heading');?></h1>



            <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title, post-subtitle"><p><?php echo lang('create_user_subheading');?></p></h3>
                    </div>
                    <div class="panel-body">
                    <?php echo form_open("auth/create_user");?>
                        <div class="form-group">
                        <label for="puesto"><?php echo lang('create_user_fname_label', 'first_name');?></label>
                              <?php echo form_input($first_name);?>
                  </div>
                  <div class="form-group">
                  <label><?php echo lang('create_user_lname_label', 'last_name');?> <br /></label>
                          <?php echo form_input($last_name);?>
                </div>
                  <div class="form-group">
                        <label for="vacantes" ><?php echo lang('create_user_company_label', 'company');?> </label>
                          <?php echo form_input($company);?>
                  </div>
                        <div class="form-group">
                  <label><?php echo lang('create_user_email_label', 'email');?> </label>
                               <?php echo form_input($email);?> 
                        </div>
                   <div class="form-group">
                        <label for="vacantes" > <?php echo lang('create_user_phone_label', 'phone');?> </label>
                             <?php echo form_input($phone);?>
                  </div>
                    <div class="form-group">
                        <label for="vacantes" > <?php echo lang('create_user_password_label', 'password');?> </label>
                              <?php echo form_input($password);?>
                  </div>
                    <div class="form-group">
                        <label for="vacantes" >  <?php echo lang('create_user_password_confirm_label', 'password_confirm');?>  </label>
                           <?php echo form_input($password_confirm);?>>
                  </div>
                    <div class="form-group">
                        <label for="vacantes" > <?php echo lang('create_user_phone_label', 'phone');?> </label>
                             <?php echo form_input($phone);?>
                  </div>
                
                    </div>
                  </div>
                        <p><?php echo form_submit('submit', lang('create_user_submit_btn'));?></p>
         
<?php echo form_open("auth/create_user");?>
</div></div>
<!--

<h1><?php echo lang('create_user_heading');?></h1>
<p><?php echo lang('create_user_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_user");?>

      <p>
            <?php echo lang('create_user_fname_label', 'first_name');?> <br />
            <?php echo form_input($first_name);?>
      </p>

      <p>
            <?php echo lang('create_user_lname_label', 'last_name');?> <br />
            <?php echo form_input($last_name);?>
      </p>

      <p>
            <?php echo lang('create_user_company_label', 'company');?> <br />
            <?php echo form_input($company);?>
      </p>

      <p>
            <?php echo lang('create_user_email_label', 'email');?> <br />
            <?php echo form_input($email);?>
      </p>

      <p>
            <?php echo lang('create_user_phone_label', 'phone');?> <br />
            <?php echo form_input($phone);?>
      </p>

      <p>
            <?php echo lang('create_user_password_label', 'password');?> <br />
            <?php echo form_input($password);?>
      </p>

      <p>
            <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
            <?php echo form_input($password_confirm);?>
      </p>


      <p><?php echo form_submit('submit', lang('create_user_submit_btn'));?></p>

<?php echo form_close();?>
-->