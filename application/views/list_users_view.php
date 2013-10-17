<?php
// list of users
// not used anymore
?><div class="main-content">

<?php
//	echo '<pre>' ;
//	print_r($results) ;
//	print_r($this->session->all_userdata()) ;
//	print_r($user_info) ;
//	echo '</pre>' ;
	

$you_follow = '' ;
if ($this->session->userdata('is_logged_in')) {	
$you_follow = '<li><a href="' ;
$you_follow .= site_url() ;
$you_follow .= 'following" >People you follow</a></li>' ;
} 


?>
    <ul class="horizontal-nav">
      <li><a href="<?php echo site_url(); ?>" >Latest Tweets</a></li>
      <?php echo $you_follow ; ?>
      <li class="last">All Users</li>
    </ul><!-- .horizontal-nav -->
    

<?php foreach ($results as $user): ?> 

	<div class="tweet">

		<img src="<?php echo site_url(); ?>images/th-unk-user.png" width="48" height="48" alt="" class="user-th">

		<div class="tweet-left">
			<h3>
              <a href="/user/<?php echo $user->user_id ; ?>">
              <?php echo html_escape($user->f_name) ; ?> <?php echo html_escape($user->l_name) ; ?>
              </a>
            </h3>
			<p><?php echo html_escape($user->bio) ?></p>
		</div><!-- .tweet-left -->



		<br class="clr-flt">

	</div><!-- .tweet -->

<?php endforeach  ?> 

</div><!-- .main-content -->