<?php
//	echo '<pre>' ;
//	print_r($results) ;
//	echo '</pre>' ; 
	//print_r($this->session->all_userdata()) ;
	//print_r($user_info) ;


$attributes = array('id' => 'send-tweet');
?>
<div class="main-content">

<?php echo validation_errors('<div class="error">', '</div>') ; ?>

<h1><?php echo "{$this->session->userdata('f_name')} {$this->session->userdata('l_name')}" ; ?>'s Account</h1>

<?php echo form_open('site/tweet_validation', $attributes) ; ?>
      <fieldset>
        <legend>Tweet</legend>
        <label for="tweet-msg" class="tweet-label">Message:</label>
        
        <textarea name="tweet" id="tweet-msg" class="tweet-txt" ><?php echo set_value('tweet'); ?></textarea>
        
        <input type="submit" name="submit" value="Tweet" id="btn-tweet" class="btn" />
      </fieldset>
      <br class="clr-flt">
<?php echo form_close() ; ?>




<ul class="horizontal-nav">
    <li><a href="#" class="tweets-tab">Your Tweets</a></li>
    <li><a href="#" class="following-tab">Following You</a></li>
    <li class="last"><a href="#" class="followers-tab">Your Followers</a></li>
</ul><!-- .horizontal-nav -->


    
<div class="tab-content" id="tab-one">

      <h2>Your tweets</h2>


<?php foreach ($results as $tweet): ?>
      
      <div class="tweet">
      
          <div class="tweet-left">
            <p><?php echo $tweet->tweet ?></p>
          </div><!-- .tweet-left -->

          <div class="tweet-right"><span class="date"><?php echo date( "F j, Y", strtotime( $tweet->date ) ) ; ?></span> 
          
          
          <a href="<?php echo site_url(); ?>edit-tweet/<?php echo $tweet->tweet_id ?>" class="btn-small edit">edit</a> 
          
          <a href="<?php echo site_url(); ?>delete-tweet/<?php echo $tweet->tweet_id ?>" class="btn-small delete">delete</a>
          </div><!-- .tweet-right -->

          <br class="clr-flt">

      </div><!-- .tweet -->

<?php endforeach  ?>

</div><!-- #tab-one -->
    





<div class="tab-content" id="tab-two">

    <h2>Following</h2>
    
    <div class="tweet"> 
    <img src="images/th-unk-user.png" width="48" height="48" alt="" class="user-th">
    
        <div class="tweet-left">
          <h3><a href="#">Thomas Durran</a></h3>
          <p>Pellentesque tincidunt velit ac tellus malesuada, vel laoreet lectus dignissim.  Vestibulum at lectus ac enim suscipit mattis sit amet ut nunc. </p>
        </div><!-- .tweet-left -->
      
        <div class="tweet-right"> 
        <a href="#" class="btn-small follow">unfollow</a> 
        </div><!-- .tweet-right --> 
        
        <br class="clr-flt">
      
    </div><!-- .tweet -->
  
</div><!-- #tab-2 -->      




    
<div class="tab-content" id="tab-three">

    <h2>Followers</h2>
    
    <div class="tweet"> <img src="images/th-unk-user.png" width="48" height="48" alt="" class="user-th">
    
        <div class="tweet-left">
          <h3><a href="#">Thomas Durran</a> @TD</h3>
          <p>Pellentesque tincidunt velit ac tellus malesuada, vel laoreet lectus dignissim.  Vestibulum at lectus ac enim suscipit mattis sit amet ut nunc. </p>
        </div><!-- .tweet-left -->
        
        <div class="tweet-right"> <a href="#" class="btn-small follow">follow</a> </div>
        <!-- .tweet-right --> 
        <br class="clr-flt">
      
    </div><!-- .tweet -->

</div><!-- #tab-3 --> 




</div><!-- .main-content -->