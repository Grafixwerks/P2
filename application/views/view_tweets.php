<a href="/">HOME</a> | <a href="/user/id">PROFILE</a> 

<h2><?php echo $title?></h2>
<!--<pre>
<?php print_r($results)  ?>
</pre>-->
<?php foreach ($results as $tweet): ?> 
<div class="tweet"> <img src="images/th-unk-user.png" width="48" height="48" alt="" class="user-th">
<div class="tweet-left">
<h3><a href="/user/<?php echo $tweet['user_id'] ?>">User f_name l_name</a> @typester</h3>
<p><?php echo $tweet['tweet'] ?></p>
</div><!-- .tweet-left -->

<div class="tweet-right">
<span class="date"><?php echo date( "F j, Y", strtotime( $tweet['date'] ) ) ; ?></span>
 <a href="#" class="btn-small follow">unfollow</a> 
</div><!-- .tweet-right --> 
 
<br class="clr-flt">
</div><!-- .tweet --> 
<?php endforeach  ?> 
