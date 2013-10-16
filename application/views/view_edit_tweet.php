<?php 
// form to edit tweet
?>
<div class="main-content">

<?php
//	echo '<pre>' ;
//	print_r($results) ;
//	echo '</pre>' ; 
	//print_r($this->session->all_userdata()) ;
	//print_r($user_info) ;	


$attributes = array('id' => 'send-tweet');
?>
<?php echo validation_errors('<div class="error">', '</div>') ; ?>   

<?php echo form_open('tweet_controller/edit_tweet', $attributes) ; ?>
      <fieldset>
        <legend>Edit tweet.</legend>
        
        <input name="tweet_id" type="hidden" value="<?php echo $results[0]->tweet_id ; ?>" />
        
        <label for="tweet-msg" class="tweet-label">Message:</label>
        
        <textarea name="tweet"  class="tweet-txt" ><?php echo set_value('tweet') ; echo $results[0]->tweet ; ?></textarea>
        
        <input type="submit" name="submit" value="Update" id="btn-tweet" class="btn" />
      </fieldset>
      <br class="clr-flt">
<?php echo form_close() ; ?>

</div><!-- .main-content -->

