<?php
// drop down menu for user account, li with nested ul
$logged_in_menu = '<li><a href="" title="Account" id="acct">Account</a>' ;
$logged_in_menu .= '<ul class="dropdown">' ;
$logged_in_menu .= '<li><a href="/profile">View profile</a></li>' ;
$logged_in_menu .= '<li><a href="/dashboard">Account dashboard</a></li>' ;
$logged_in_menu .= '<li><a href="/log-out">Log out</a></li>' ;
$logged_in_menu .= '</ul>' ;
$logged_in_menu .= '</li>' ;



// user sign in link
$sign_in_link = '<li><a href="/sign-in" class="sign-in">Sign in</a></li>' ;

// check if user is signed in and set main nav link
if ($this->session->userdata('is_logged_in')) {
	$nav_link = $logged_in_menu ;
	} else {
	$nav_link = $sign_in_link ;
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<!-- CSCI E-15 | Andrew Pearson | P 2 -->
<meta charset="utf-8">
<title>Holy Tweet <?php echo $title ?></title>
<link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>css/main.css">
</head>

<body>

<div class="main-nav">
  <ul class="nav">
    <?php echo $nav_link ; ?>
    <li><a href="/" title="Home" id="home">Home</a></li>
  </ul><!-- .nav --> 
</div><!-- .main-nav -->

<div class="wrapper"> <a href="/" class="logo">Holy Tweet: from your keyboard to God’s ear!</a>


