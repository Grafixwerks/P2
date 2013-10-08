<div class="welcome">

<p class="intro">Talk directly to God in 140 characters! Holy Tweet uses the miracle of our advanced ethereal net protocol to deliver your 140 character message directly to God.</p>
 

<?php echo form_open('sign_in/sign_in_validation') ; ?>

  <fieldset>
    <legend>Sign in</legend>
   
<?php echo validation_errors('<div class="error">', '</div>') ; ?>
 
    <div class="text-group">
      <label for="email" class="welcome-label">E-Mail:</label>
      <input type="text" name="email" value="<?php echo set_value('email'); ?>" id="email" maxlength="40" class="txt form-txt" title="email" />
    </div><!-- .text-group -->
    
    
    <div class="text-group">
      <label for="password" class="welcome-label">Password: </label>
      <input type="password" name="password" value="" id="password" maxlength="40" class="txt inactive" autocomplete="off" />
    </div><!-- .text-group -->
    
    
  
  <input type="submit" name="submit" value="Sign in" id="sign-in" class="btn" />
  </fieldset>
<p>Not a member?  <a href="<?php echo site_url(); ?>join">Join now</a></p>

<?php echo form_close() ; ?>

</div><!-- .welcome -->