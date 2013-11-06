<?php 
// home page, shows recent tweets and list of users
// Route: default_controller = site_controller
// 
?>
<div class="main-content">

<?php
	
$haystack = array() ;
$you_follow = '' ;
$user_follows = '' ;


// link for tab to show list of people logged in user follows
if ($this->session->userdata('is_logged_in')) {	
	$you_follow = '<li><a href="' . site_url() . 'following"  class="tabz following-tab">People you follow</a></li>' ;
	// create an array of user_id that logged in user is following to toggle follow/unfollow links
	foreach($user_follows as $following) {
		$haystack[] = $following->following ;
	}
}
?>

   <ul class="horizontal-nav">
      <li><a href="#" class="tabz tweets-tab current">Latest Tweets</a></li>
      <?php echo $you_follow ; ?>
      <li class="last"><a href="<?php echo site_url(); ?>users" class="tabz followers-tab" >All Users</a></li>
    </ul><!-- .horizontal-nav -->




<div class="tab-content" id="tab-one">
<?php 
// list tweets
foreach ($results as $tweet): ?> 

	<div class="tweet">

		<img src="<?php echo site_url(); ?>images/user/<?php echo $tweet->pic ; ?>" width="48" height="48" alt="" class="user-th">

		<div class="tweet-left">
			<h3>
            <a href="/user/<?php echo $tweet->user_id ; ?>">
			<?php echo html_escape($tweet->f_name) ; ?> <?php echo html_escape($tweet->l_name) ; ?>
            </a> 
            </h3>
			<p><?php echo html_escape($tweet->tweet) ?></p>
		</div><!-- .tweet-left -->

		<div class="tweet-right">
			<span class="date"><?php echo date( "F j, Y", strtotime( $tweet->date ) ) ; ?></span>
		<?php 			
        // check if user is logged in then show follow/unfollow link
        if ($this->session->userdata('is_logged_in')) {
            // check if tweet by logged in user
           if ( $this->session->userdata('user_id') != $tweet->user_id ) {
                  // check user_id if in array of followed users
                  if (in_array( $tweet->user_id , $haystack ) ) {
                      echo "<a href=\"unfollow/{$tweet->user_id}\" class=\"btn-small follow\">unfollow</a>" ;
                  } else {
                      echo "<a href=\"follow/{$tweet->user_id}\" class=\"btn-small follow\">follow</a>" ;
                  }
            }
        }
        ?>
   
		</div><!-- .tweet-right --> 

		<br class="clr-flt">

	</div><!-- .tweet -->

<?php endforeach  ?> 

</div><!-- .tab-content -->





<?php
///  check if logged in, if logged in show list of people logged in user is following
if ($this->session->userdata('is_logged_in')) {
	$this->load->view('users_followed_view');
}
?> 




<div class="tab-content" id="tab-three">
<?php
// list users
 foreach ($all_users as $user): ?> 
	<div class="tweet">
        <img src="<?php echo site_url(); ?>images/user/<?php echo $user->pic ; ?>" width="48" height="48" alt="" class="user-th">

		<div class="tweet-left">
			<h3>
            <a href="<?php echo site_url(); ?>user/<?php echo $user->user_id ; ?>">
			<?php echo html_escape($user->f_name) ; ?> <?php echo html_escape($user->l_name) ; ?>
            </a>
            </h3>
			<p><?php echo html_escape($user->bio) ?></p>
		</div><!-- .tweet-left -->

		<?php 
        // check if user logged in
        if ($this->session->userdata('is_logged_in')) {
            // check if logged in user
           if ( $this->session->userdata('user_id') != $user->user_id ) {
                  // check user_id if in array of followed users
                  if (in_array( $user->user_id , $haystack ) ) {
                      echo "<a href=\"unfollow/{$user->user_id}\" class=\"btn-small follow\">unfollow</a>" ;
                  } else {
                      echo "<a href=\"follow/{$user->user_id}\" class=\"btn-small follow\">follow</a>" ;
                  }
            }
        }
         ?>

		<br class="clr-flt">

	</div><!-- .tweet -->

<?php endforeach  ?> 
</div><!-- .tab-content -->


</div><!-- .main-content -->

<img src="<?php echo site_url(); ?>images/angel.png" width="376" height="219" class="angel" alt="Andy Pearson CSCI E-15 P2" />