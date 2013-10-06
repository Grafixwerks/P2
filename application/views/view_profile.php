<div class="main-content">

<?php
// Show single user profile
//  echo '<pre>' ;
//  print_r($results) ;
//  echo '</pre>' ;
?>

<h1><?php echo "{$results[0]->f_name} {$results[0]->l_name }" ; ?></h1>
<img src="images/<?php echo $results[0]->pic ; ?>.png" width="130" height="129" alt="" class="user-pic">

<div class="profile">
    <h3>location:</h3>
    <p><?php echo "{$results[0]->city}, {$results[0]->state}" ; ?></p>
    <h3>website:</h3>
    <p><a href="http://<?php echo $results[0]->website ; ?>"><?php echo $results[0]->website ; ?></a></p>
    <h3>bio:</h3>
    <p class="bio-text"><?php echo $results[0]->bio ; ?></p>
</div><!-- .profile -->



</div><!-- .main-content -->