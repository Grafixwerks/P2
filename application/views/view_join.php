<div class="welcome">

<p class="intro">Join today and send God your message.</p>


<?php echo form_open('sign_in/join_validation') ; ?>
  <fieldset>
    <legend>Join</legend>
   
<?php echo validation_errors('<div class="error">', '</div>') ; ?>   

    <div class="text-group">
      <label for="f_name" class="welcome-label">First Name:</label>
      <input type="text" name="f_name" value="<?php echo set_value('f_name'); ?>" id="f_name"  class="txt form-txt"title="first name" maxlength="30" />
    </div><!-- .text-group -->
    
    
    <div class="text-group">
      <label for="l_name" class="welcome-label">Last Name:</label>
      <input type="text" name="l_name" value="<?php echo set_value('l_name'); ?>" id="l_name"  class="txt form-txt" title="last name" maxlength="30" />
    </div><!-- .text-group -->
    

    <div class="text-group">
      <label for="email" class="welcome-label">E-Mail:</label>
      <input type="text" name="email" value="<?php echo set_value('email'); ?>" id="email" maxlength="40" class="txt form-txt" title="email" /><!--autocomplete="off"-->
    </div><!-- .text-group -->
    
    
    <div class="text-group">
      <label for="password" class="welcome-label">Password: </label>
      <input type="password" name="password" value="" id="password" maxlength="40" class="txt inactive" autocomplete="off" />
    </div><!-- .text-group -->


    <div class="text-group">
      <label for="c_password" class="welcome-label">Confirm Password: </label>
      <input type="password" name="c_password" value="" id="c_password" maxlength="40" class="txt inactive" autocomplete="off" />
    </div><!-- .text-group -->


  <input type="submit" name="submit" value="Join" id="join" class="btn" /> 
  </fieldset>
<p>Already a member?  <a href="<?php echo site_url(); ?>sign_in">Sign in</a></p>

<?php echo form_close() ; ?>

</div><!-- .welcome -->