<?php

$f_name = '' ;
$l_name = '' ;
$location = '' ;
$website = '' ;
$bio = '' ;
$pic = '' ;
$alt = '' ;
$unfollow = '' ;
$follow = '' ;
$link = '' ;
if(empty($results)){
    // no records to display
	$f_name = 'no records to display' ;
} else {
    // records have been returned
	$f_name = "{$results[0]->f_name}" ;
	$l_name = "{$results[0]->l_name }" ;

	if ($results[0]->city != NULL) {
		$location = '<h3>location:</h3>' ;
		$location .= "<p>{$results[0]->city}, {$results[0]->state}</p>" ;
	} else $location = '' ;
	
	if ($results[0]->website != NULL) {
		$website = '<h3>website:</h3>' ;
		$website .= "<p><a href=\"{$results[0]->website}\">{$results[0]->website}</a></p>" ;
	} else $website = '' ;
	
	if ($results[0]->bio != NULL) {
		$bio = '<h3>bio:</h3>' ;
		$bio .= "<p class=\"bio-text\">{$results[0]->bio}</p>" ;
	} else $bio = '' ;
	
	if ($results[0]->pic != NULL) {
		$pic = "{$results[0]->pic}" ;
		$alt = "{$results[0]->f_name} {$results[0]->l_name } profile picture" ;
	} else { $pic = 'unk-user' ;
		$alt = "" ;
	} 	
	
	
}
if ($this->session->userdata('is_logged_in')) {
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
  <img src="<?php echo site_url(); ?>images/<?php echo $pic ; ?>.png" width="130" height="129" alt="<?php echo $alt ; ?>" class="user-pic">
      
  <?php echo $link ; ?>

  </div><!-- .profile-left -->





<div class="profile">

<?php     
	echo $location ;
	echo $website ;
	echo $bio ;
?>

</div><!-- .profile -->


    <br class="clr-flt">
    <ul class="horizontal-nav">
      <li><a href="#" class="tweets-tab">Tweets</a></li>
      <li><a href="#" class="following-tab">Following</a></li>
      <li class="last"><a href="#" class="followers-tab">Followers</a></li>
    </ul>
    <!-- .horizontal-nav -->


<div class="tab-content" id="tab-one">

<?php foreach ($results as $tweet): ?>

<div class="tweet">

    <div class="tweet-left">
      <p><?php echo $tweet->tweet ?></p>
    </div><!-- .tweet-left -->
        
        
    <div class="tweet-right">
    <span class="date"><?php echo date( "F j, Y", strtotime( $tweet->date ) ) ; ?></span>  
    </div><!-- .tweet-right --> 
    
    <br class="clr-flt">

</div><!-- .tweet -->

<?php endforeach  ?>       

</div><!-- #tab-one -->
    



 











    
<div class="tab-content" id="tab-two">

  <h2>Following</h2>
  
  <div class="tweet"> <img src="images/th-unk-user.png" width="48" height="48" alt="" class="user-th">
    
    <div class="tweet-left">
      <h3><a href="#">Thomas Durran</a></h3>
      <p>Pellentesque tincidunt velit ac tellus malesuada, vel laoreet lectus dignissim.  Vestibulum at lectus ac enim suscipit mattis sit amet ut nunc. </p>
    </div><!-- .tweet-left -->
    
    
   <!--  <div class="tweet-right"> 
    <a href="#" class="btn-small follow">unfollow</a> 
    </div>.tweet-right -->
     
    
    <br class="clr-flt">
    
  </div><!-- .tweet -->
  
  

  
</div><!-- #tab-2 -->
    






    
    <div class="tab-content" id="tab-three">
      <h2>Followers</h2>
      <div class="tweet"> <img src="images/th-unk-user.png" width="48" height="48" alt="" class="user-th">
        <div class="tweet-left">
          <h3><a href="#">Thomas Durran</a> @TD</h3>
          <p>Pellentesque tincidunt velit ac tellus malesuada, vel laoreet lectus dignissim.  Vestibulum at lectus ac enim suscipit mattis sit amet ut nunc. </p>
        </div>
        <!-- .tweet-left -->
        
        <div class="tweet-right"> <a href="#" class="btn-small follow">follow</a> </div>
        <!-- .tweet-right --> 
        <br class="clr-flt">
      </div>
      <!-- .tweet -->
      
      <div class="tweet"> <img src="images/th-unk-user.png" width="48" height="48" alt="" class="user-th">
        <div class="tweet-left">
          <h3><a href="#">Daisuke Murase</a> @typester</h3>
          <p>Phiaculis nulla id purus convallis interdum. Sed aliquet consequat dui convallis venenatis. Nam sit amet arcu et tortor sodales semper.</p>
        </div>
        <!-- .tweet-left -->
        
        <div class="tweet-right"> <a href="#" class="btn-small follow">follow</a> </div>
        <!-- .tweet-right --> 
        <br class="clr-flt">
      </div>
      <!-- .tweet -->
      
      <div class="tweet"> <img src="images/th-unk-user.png" width="48" height="48" alt="" class="user-th">
        <div class="tweet-left">
          <h3><a href="#">David Hollander</a> @typester</h3>
          <p>Vestibulum at lectus ac enim suscipit mattis sit amet ut nunc. Pellentesque tincidunt velit a</p>
        </div>
        <!-- .tweet-left -->
        
        <div class="tweet-right"> <a href="#" class="btn-small follow">follow</a> </div>
        <!-- .tweet-right --> 
        <br class="clr-flt">
      </div>
      <!-- .tweet --> 
      
    </div>
    <!-- #tab-3 --> 











</div><!-- .main-content -->