<div class="welcome">

<p class="intro">Talk directly to God in 140 characters! Holy Tweet uses the miracle of our advanced ethereal net protocol to deliver your 140 character message directly to God.</p>

<?php
 $email = array(
              'name'         => 'email',
              'id'           => 'email',
              'maxlength'    => '40',
              'class'        => 'txt',
			  'autocomplete' => 'off',
            );

 $password = array(
              'name'         => 'password',
              'id'           => 'password',
              'maxlength'    => '40',
              'class'        => 'txt inactive',
			  'autocomplete' => 'off',
            );

 $submit = array(
              'name'        => 'submit',
              'id'          => 'sign-in',
              'class'       => 'btn',
			  'value' 		=> 'Sign in',
            );


?>
<?php echo form_open('sign_in/sign_in_validation') ; ?>
  <fieldset>
    <legend>Sign in</legend>
   
<?php echo validation_errors() ; ?>   
    <div class="text-group">
      <label for="email" class="welcome-label">E-Mail:</label>
      <?php echo form_input($email); ?>
    </div><!-- Close class text-gruop -->
    
    
    <div class="text-group">
      <label for="password" class="welcome-label">Password: </label>
      <?php echo form_password($password) ;  ?>
    </div><!-- Close class text-gruop -->
    
    
  </fieldset>
  <?php echo form_submit($submit) ; ?>
<p>Not a member?  <a href="#">Join now</a></p>

<?php echo form_close() ; ?>

</div><!-- .welcome -->