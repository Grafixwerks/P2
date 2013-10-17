<?php
// user profile, takes user_id from link
$f_name = '' ;
$l_name = '' ;
$location = '' ;
$website = '' ;
$bio = '' ;
$pic = '' ;
$unfollow = '' ;
$follow = '' ;
$link = '' ;
$current_user = '' ;


if(empty($results)){
    // no records to display
	$f_name = 'no records to display' ;
} else {
    // records have been returned
	$f_name = html_escape( $results[0]->f_name ) ;
	$l_name = html_escape( $results[0]->l_name ) ;
	$pic = "{$results[0]->pic }" ;

	if ($results[0]->city != NULL) {
		$location = '<h3>location:</h3>' ;
		$location .= '<p>' ;
		$location .= html_escape( $results[0]->city ) ;
		$location .= ', ' ;
		$location .= html_escape( $results[0]->state ) ;
		$location .= '</p>' ;
	} else $location = '' ;
	
	if ($results[0]->website != NULL) {
		$website = '<h3>website:</h3>' ;
		$website .= '<p><a href="' ;
		$website .= html_escape( $results[0]->website ) ;
		$website .= '">' ;
		$website .= html_escape( $results[0]->website ) ;
		$website .= '</a></p>' ;
	} else $website = '' ;
	
	if ($results[0]->bio != NULL) {
		$bio = '<h3>bio:</h3>' ;
		$bio .= '<p class="bio-text">' ;
		$bio .= html_escape( $results[0]->bio ) ;
		$bio .= '</p>' ;
	} else $bio = '' ;
	
	if ($results[0]->pic != NULL) {
		$pic = "{$results[0]->pic}" ;
	} else { 
		$pic = 'unk-user' ;
	}
}

if ( $this->session->userdata('is_logged_in')  ) {
	$current_user = $this->session->userdata('user_id') ;
}
if ( $this->session->userdata('is_logged_in') && ( $current_user != $results[0]->user_id ) ) {
	$follow =  '<a href="' ;
	$follow .= site_url() ;
	$follow .= 'follow/' ;
	$follow .= $results[0]->user_id ;
	$follow .= '" class="follow-profile">follow</a>' ;
	
	$unfollow =  '<a href="' ;
	$unfollow .= site_url() ;
	$unfollow .= 'unfollow/' ;
	$unfollow .= $results[0]->user_id ;
	$unfollow .= '" class="follow-profile">unfollow</a>' ;
	
	if ( $is_following == TRUE ) {
		$link = $unfollow ;
	} else {
		$link = $follow ;
	}
	
	} else {
	//$link = '' ;
	}





?>



<div class="main-content">

<?php
// Show single user profile
//  echo '<pre>' ;
//  print_r($results) ;
//  echo '</pre>' ;

//  echo '</pre>' ;
//echo $test ;
//echo '<br />is_following ' ;

//echo $is_following ;

?>

<h1><?php echo "$f_name $l_name" ; ?></h1>

  <div class="profile-left">

      <img src="<?php echo site_url(); ?>images/user/<?php echo $pic ; ?>" width="130" height="130" alt="" class="user-pic">
      <?php echo $link ; ?>

  </div><!-- .profile-left -->





<div class="profile">

<?php     
	echo $location ;
	echo $website ;
	echo $bio ;
?>

</div><!-- .profile -->

<br class="clr-flt" />

<h2>Tweets</h2>
	


<?php foreach ($results as $tweet): ?>

<div class="tweet">

    <div class="tweet-left">
      <p><?php echo html_escape($tweet->tweet) ?></p>
    </div><!-- .tweet-left -->

    <div class="tweet-right">
    <span class="date">
	<?php if ($results[0]->tweet != NULL) { 
		echo date( "F j, Y", strtotime( $tweet->date ) ) ;
	}  ?>
    </span>  
    </div><!-- .tweet-right --> 
    
    <br class="clr-flt">

</div><!-- .tweet -->

<?php endforeach ?>

</div><!-- .main-content -->