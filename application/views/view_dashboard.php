<?php
//	echo '<pre>' ;
//	print_r($results_following) ;
//	print_r($results_follower) ;
//	print_r($results_tweet) ;
//	print_r($this->session->all_userdata()) ;
//	print_r($user_info) ;
//	echo '</pre>' ; 
$i = 0 ;
$user = '' ;
$user_follows = array() ;






// check if no results returned for logged in user tweets
$no_tweet = '' ;
if ( $results_tweet == NULL ) {
	$no_tweet = '<p>You don\'t have any tweets yet.</p>' ;
}

// Check if there are no results for people logged in user is following, display message
$no_follow = '' ;
if ( $results_following == NULL ) {
	$no_follow = '<p>You are not following anyone yet.</p>' ;
} else {
	// grab list of people that are followed by logged in user for check against users who follow logged in user
	
	foreach($results_following as $user) {
		$user_follows[] = $user->user_id ;
	}
	
	foreach ($results_follower as $user) {
		
		foreach($user_follows as $follow) {
			if ( $user->user_id == $follow ) {
				$i++ ;
			} 
		}	
	}	
}

// Check if there are no results for people following the logged in user, display message
$no_follower = '' ;
if ( $results_follower == NULL ) {
	$no_follower = '<p>Noone is following you.</p>' ;
} else {



// build link for follow / unfollow 
if ( $i == 1 ) { $link_text = 'unfollow' ; } else { $link_text = 'follow' ; } ;

$url = site_url() ;
$url .= $link_text ;
$url .= '/' ;
$url .= $user->user_id ;



}



$attributes = array('id' => 'send-tweet');
?>
<div class="main-content">

<h1><?php echo "{$this->session->userdata('f_name')} {$this->session->userdata('l_name')}" ; ?>'s Account</h1>

<?php echo validation_errors('<div class="error">', '</div>') ; ?>

<?php echo form_open('controller_tweet/tweet_validation', $attributes) ; ?>
      <fieldset>
          <label for="tweet-msg" class="tweet-label">Message:</label>
          
          <textarea name="tweet" id="tweet-msg" class="tweet-txt" >
          <?php echo set_value('tweet'); ?>
          </textarea>
          
          <input type="submit" name="submit" value="Tweet" id="btn-tweet" class="btn" />
      </fieldset>
      <br class="clr-flt">
<?php echo form_close() ; ?>


<ul class="horizontal-nav">
    <li><a href="#" class="tweets-tab">Your Tweets</a></li>
    <li><a href="#" class="following-tab">You're Following</a></li>
    <li class="last"><a href="#" class="followers-tab">Following You</a></li>
</ul><!-- .horizontal-nav -->

    
<div class="tab-content" id="tab-one">

     <h2>Your tweets</h2>

	<?php echo $no_tweet ; ?>
    
    <?php foreach ($results_tweet as $tweet): ?>
          
          <div class="tweet">
          
              <div class="tweet-left">
                  <p><?php echo $tweet->tweet ?></p>
              </div><!-- .tweet-left -->
    
              <div class="tweet-right">
                  <span class="date"><?php echo date( "F j, Y", strtotime( $tweet->date ) ) ; ?></span> 
                  <a href="<?php echo site_url(); ?>edit-tweet/<?php echo $tweet->tweet_id ?>" class="btn-small edit">edit</a> 
                  <a href="<?php echo site_url(); ?>delete-tweet/<?php echo $tweet->tweet_id ?>" class="btn-small delete">delete</a>
              </div><!-- .tweet-right -->
    
              <br class="clr-flt">
    
          </div><!-- .tweet -->
    
    <?php endforeach  ?>

</div><!-- #tab-one -->
    





<div class="tab-content" id="tab-two">

    <h2>People you are following</h2>

	<?php echo $no_follow ; ?>
    
    <?php foreach ($results_following as $user): ?> 

      <div class="tweet">
  
          <img src="<?php echo site_url(); ?>images/th-unk-user.png" width="48" height="48" alt="" class="user-th">
  
          <div class="tweet-left">
              <h3><a href="/user/<?php echo $user->user_id ; ?>"><?php echo $user->f_name ; ?> <?php echo $user->l_name ; ?></a> </h3>
              <p><?php echo $user->bio ?></p>
          </div><!-- .tweet-left -->
  
          <div class="tweet-right">
              <a href="<?php echo site_url(); ?>unfollow/<?php echo $user->user_id ; ?>" class="btn-small follow">unfollow</a> 
          </div><!-- .tweet-right --> 
  
          <br class="clr-flt">
  
      </div><!-- .tweet -->

	<?php endforeach  ?> 
    
</div><!-- .tab-two -->




 
<div class="tab-content" id="tab-three">

    <h2>Your followers</h2>

	<?php echo $no_follower ; ?>
        
    <?php foreach ($results_follower as $user): ?> 
    
        <div class="tweet">
    
            <img src="<?php echo site_url(); ?>images/th-unk-user.png" width="48" height="48" alt="" class="user-th">
    
            <div class="tweet-left">
                <h3><a href="/user/<?php echo $user->user_id ; ?>"><?php echo $user->f_name ; ?> <?php echo $user->l_name ; ?></a> </h3>
                <p><?php echo $user->bio ?></p>
            </div><!-- .tweet-left -->
    
            <div class="tweet-right">
                <a href="<?php echo $url ; ?>" class="btn-small follow"><?php echo $link_text ; ?></a> 
            </div><!-- .tweet-right --> 
    
            <br class="clr-flt">
    
        </div><!-- .tweet -->
    
    <?php endforeach  ?> 

</div><!-- #tab-3 --> 




</div><!-- .main-content -->