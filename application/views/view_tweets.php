<div class="main-content">

<?php
	//echo '<pre>' ;
	//print_r($results) ;
	//print_r($this->session->all_userdata()) ;
	//print_r($user_info) ;
	//echo '</pre>' ;
?>

<?php foreach ($results as $tweet): ?> 

	<div class="tweet">

		<img src="<?php echo site_url(); ?>images/th-unk-user.png" width="48" height="48" alt="" class="user-th">

		<div class="tweet-left">
			<h3><a href="/user/<?php echo $tweet['user_id'] ?>">f_name l_name</a> @typester</h3>
			<p><?php echo $tweet['tweet'] ?></p>
		</div><!-- .tweet-left -->

		<div class="tweet-right">
			<span class="date"><?php echo date( "F j, Y", strtotime( $tweet['date'] ) ) ; ?></span>
			<a href="#" class="btn-small follow">unfollow</a> 
		</div><!-- .tweet-right --> 

		<br class="clr-flt">

	</div><!-- .tweet -->

<?php endforeach  ?> 

</div><!-- .main-content -->