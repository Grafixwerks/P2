<div class="main-content">

<?php
//	echo '<pre>' ;
//	print_r($results) ;
//	print_r($this->session->all_userdata()) ;
//	print_r($user_info) ;
//	echo '</pre>' ;
	

?>
    <ul class="horizontal-nav">
      <li>Latest Tweets</li>
      <li><a href="<?php echo site_url(); ?>following" >People you Follow</a></li>
      <li class="last"><a href="<?php echo site_url(); ?>users" >All Users</a></li>
    </ul>
    <!-- .horizontal-nav -->

<?php foreach ($results as $tweet): ?> 

	<div class="tweet">

		<img src="<?php echo site_url(); ?>images/th-unk-user.png" width="48" height="48" alt="" class="user-th">

		<div class="tweet-left">
			<h3><a href="/user/<?php echo $tweet->user_id ; ?>"><?php echo $tweet->f_name ; ?> <?php echo $tweet->l_name ; ?></a> </h3>
			<p><?php echo $tweet->tweet // $tweet['tweet'] ?></p>
		</div><!-- .tweet-left -->

		<div class="tweet-right">
			<span class="date"><?php echo date( "F j, Y", strtotime( $tweet->date ) ) ; // $tweet['date'] ?></span>
			<a href="#" class="btn-small follow">unfollow</a> 
		</div><!-- .tweet-right --> 

		<br class="clr-flt">

	</div><!-- .tweet -->

<?php endforeach  ?> 

<br class="clr-flt">
</div><!-- .main-content -->

<img src="<?php echo site_url(); ?>images/angel.png" width="376" height="219" class="angel" alt="Andrew Pearson" />