<div class="main-content">

<?php
	//echo '<pre>' ;
	//print_r($results) ;
	//print_r($this->session->all_userdata()) ;
	//print_r($user_info) ;
	//echo '</pre>' ; 

$attributes = array('id' => 'send-tweet');
?>
<?php echo validation_errors('<div class="error">', '</div>') ; ?>   

<?php echo form_open('controller_tweet/tweet_validation', $attributes) ; ?>
      <fieldset>
        <legend>Now let us upload the holy tweet of the Lord.</legend>
        <label for="tweet-msg" class="tweet-label">Message:</label>
        
        <textarea name="tweet" id="tweet-msg" class="tweet-txt" ><?php echo set_value('tweet'); ?></textarea>
        
        <input type="submit" name="submit" value="Tweet" id="btn-tweet" class="btn" />
      </fieldset>
      <br class="clr-flt">
<?php echo form_close() ; ?>

</div><!-- .main-content -->