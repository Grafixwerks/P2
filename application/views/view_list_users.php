<div class="main-content">

<?php
//	echo '<pre>' ;
//	print_r($results) ;
//	print_r($this->session->all_userdata()) ;
//	print_r($user_info) ;
//	echo '</pre>' ;
	

?>
    <ul class="horizontal-nav">
      <li><a href="/" >Latest Tweets</a></li>
      <li>List Users</li>
      <li class="last"><a href="#" >Following</a></li>
    </ul>
    <!-- .horizontal-nav -->

<?php foreach ($results as $user): ?> 

	<div class="tweet">

		<img src="<?php echo site_url(); ?>images/th-unk-user.png" width="48" height="48" alt="" class="user-th">

		<div class="tweet-left">
			<h3><a href="/user/<?php echo $user->user_id ; ?>"><?php echo $user->f_name ; ?> <?php echo $user->l_name ; ?></a> </h3>
			<p><?php echo $user->bio ?></p>
		</div><!-- .tweet-left -->



		<br class="clr-flt">

	</div><!-- .tweet -->

<?php endforeach  ?> 

</div><!-- .main-content -->