<?php 
// homepage 2nd tab
?>
<div class="tab-content" id="tab-two" >

<?php foreach ($followed as $user): ?> 

	<div class="tweet">

		<img src="<?php echo site_url(); ?>images/user/<?php echo $user->pic ; ?>" width="48" height="48" alt="" class="user-th">

		<div class="tweet-left">
			<h3>
                <a href="/user/<?php echo $user->user_id ; ?>">
                <?php echo html_escape( $user->f_name ) ; ?> <?php echo html_escape( $user->l_name ) ; ?>
                </a>
            </h3>
			<p><?php echo $user->tweet ?></p>
		</div><!-- .tweet-left -->

		<div class="tweet-right">
			<span class="date"><?php echo date( "F j, Y", strtotime( $user->date ) ) ; ?></span>
            <a href="<?php echo site_url(); ?>unfollow/<?php echo $user->user_id ; ?>" class="btn-small follow">unfollow</a> 
		</div><!-- .tweet-right --> 

		<br class="clr-flt">

	</div><!-- .tweet -->

<?php endforeach ?> 

</div><!-- .tab-content -->