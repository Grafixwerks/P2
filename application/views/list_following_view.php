<?php
// list of everyone logged in user follows
?>
<div class="main-content">

<?php
	//echo '<pre>' ;
//	print_r($results) ;
//	print_r($this->session->all_userdata()) ;
	//print_r($user_info) ;
	//echo '</pre>' ;
	

?>
    <ul class="horizontal-nav">
      <li><a href="<?php echo site_url(); ?>" >Latest Tweets</a></li>
      <li>People you Follow</li>
      <li class="last"><a href="<?php echo site_url(); ?>users" >All Users</a></li>
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
			<p><?php echo $user->bio ?></p>
		</div><!-- .tweet-left -->

		<div class="tweet-right">
			<a href="<?php echo site_url(); ?>unfollow/<?php echo $user->user_id ; ?>" class="btn-small follow">unfollow</a> 
		</div><!-- .tweet-right --> 

		<br class="clr-flt">

	</div><!-- .tweet -->

<?php endforeach  ?> 

</div><!-- .main-content -->