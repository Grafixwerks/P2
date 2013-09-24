<!DOCTYPE HTML>
<html>
<head>
<!-- CSCI E-15 | Andrew Pearson | P 2 -->
<meta charset="utf-8">
<title>Holy Tweet</title>
<link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
<div class="main-nav">
  <ul class="nav">
    <li><a href="" title="Account" id="acct">Account</a>
      <ul class="dropdown">
        <li><a href="">View profile</a></li>
        <li><a href="">Account dashboard</a></li>
        <li><a href="">Log out </a></li>
      </ul>
      <!-- .dropdown --> 
      
    </li>
    <li><a href="" title="Home" id="home">Home</a></li>
  </ul>
  <!-- .nav --> 
  
</div>
<!-- .main-nav -->

<div class="wrapper"> <a href="/" class="logo">Holy Tweet: from your keyboard to God’s ear!</a>
  <div class="main-content">
    <h1> Ned Flanders</h1>
    <img src="images/unk-user.png" width="130" height="129" alt="" class="user-pic">
    <div class="profile">
      <h3>location:</h3>
      <p>Springfield, MA, USA</p>
      <h3>website:</h3>
      <p><a href="http://www.wwjd.com">www.wwjd.com</a></p>
      <h3>bio:</h3>
      <p class="bio-text">Nulla sit amet est sed leo tincidunt blandit et id mi. In aliquet at felis ac vulputate. Sed quis pulvinar lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc consequat porttitor aliquam. Proin gravida luctus augue, cursus vulputate eros varius eu. Etiam auctor tristique lectus ut dictum. Nam pulvinar odio et vestibulum imperdiet. Suspendisse vitae suscipit diam. Quisque pellentesque tellus id arcu ultricies, nec cursus purus porttitor. Cras feugiat risus odio, sed ornare tellus porttitor eget. Cras at ullamcorper tortor. Suspendisse potenti. Sed ultrices vehicula sodales. Donec sit amet ante arcu. Proin at facilisis lorem. </p>
    </div>
    <!-- .profile --> 
    
    <br class="clr-flt">
    <ul class="profile-nav">
      <li><span class="count">3</span> <a href="#" class="tweets-tab">Tweets</a></li>
      <li><span class="count">8</span> <a href="#" class="following-tab">Following</a></li>
      <li class="last"><span class="count">6</span> <a href="#" class="followers-tab">Followers</a></li>
    </ul>
    <!-- .profile-nav -->
    
    <div class="tab-content" id="tab-one">
      <h2>Your tweets</h2>
      <div class="tweet">
        <div class="tweet-left">
          <p>Pellentesque tincidunt velit ac tellus malesuada, vel laoreet lectus dignissim.  Vestibulum at lectus ac enim suscipit mattis sit amet ut nunc. </p>
        </div>
        <!-- .tweet-left -->
        
        <div class="tweet-right"><span class="date">18 Sep</span> <a href="#" class="btn-small edit">edit</a> </div>
        <!-- .tweet-right --> 
        <br class="clr-flt">
      </div>
      <!-- .tweet -->
      
      <div class="tweet">
        <div class="tweet-left">
          <p>Nullam ultricies ultrices pharetra. Pellentesque tincidunt velit ac tellus malesuada, vel laoreet lectus dignissim.</p>
        </div>
        <!-- .tweet-left -->
        
        <div class="tweet-right"><span class="date">14 Sep</span> <a href="#" class="btn-small edit">edit</a> </div>
        <!-- .tweet-right --> 
        <br class="clr-flt">
      </div>
      <!-- .tweet -->
      
      <div class="tweet">
        <div class="tweet-left">
          <p>Sed dictum, est ac viverra porttitor, est leo lacinia massa.  Vestibulum at lectus ac enim suscipit mattis sit amet ut nunc. </p>
        </div>
        <!-- .tweet-left -->
        
        <div class="tweet-right"><span class="date">10 Sep</span> <a href="#" class="btn-small edit">edit</a> </div>
        <!-- .tweet-right --> 
        <br class="clr-flt">
      </div>
      <!-- .tweet --> 
      
    </div>
    <!-- #tab-one -->
    
    <div class="tab-content" id="tab-two">
      <h2>Following</h2>
      <div class="tweet"> <img src="images/th-unk-user.png" width="48" height="48" alt="" class="user-th">
        <div class="tweet-left">
          <h3><a href="#">Thomas Durran</a> @TD</h3>
          <p>Pellentesque tincidunt velit ac tellus malesuada, vel laoreet lectus dignissim.  Vestibulum at lectus ac enim suscipit mattis sit amet ut nunc. </p>
        </div>
        <!-- .tweet-left -->
        
        <div class="tweet-right"> <a href="#" class="btn-small follow">unfollow</a> </div>
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
        
        <div class="tweet-right"> <a href="#" class="btn-small follow">unfollow</a> </div>
        <!-- .tweet-right --> 
        <br class="clr-flt">
      </div>
      <!-- .tweet -->
      
      <div class="tweet"> <img src="images/th-unk-user.png" width="48" height="48" alt="" class="user-th">
        <div class="tweet-left">
          <h3><a href="#">David Hollander</a> @typester</h3>
          <p>Vestibulum at lectus ac enim suscipit mattis sit amet ut nunc. Pellentesque tincidunt velit ac tellus malesuada, vel laoreet lectus dignissim.</p>
        </div>
        <!-- .tweet-left -->
        
        <div class="tweet-right"><span class="date"> <a href="#" class="btn-small follow">unfollow</a> </div>
        <!-- .tweet-right --> 
        <br class="clr-flt">
      </div>
      <!-- .tweet --> 
      
    </div>
    <!-- #tab-2 -->
    
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
    
  </div>
  <!-- .main-content --> 
  
</div>
<!-- .wrapper --> 

<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script> 
<script type="text/javascript">
// <![CDATA[

$(document).ready(function() {

// Tweet input instructions, remove on focus

	  $("#tweet-msg").attr("value", "Create your tweet, 140 characters max.").css('color', '#808080');
	  var text1 = "Create your tweet, 140 characters max.";
	  
	  $("#tweet-msg").focus(function() {
			  if($(this).attr("value") == text1) $(this).attr("value", "").css('color', '#000');
	  });
	  
	  $("#tweet-msg").blur(function() {
			  if($(this).attr("value") == "") $(this).attr("value", text1).css('color', '#808080');
	  });

// These show and hide tabs

// Hide things on load
      $('#tab-two').hide();
      $('#tab-three').hide();

// show/hide on pagination link click
    $('.tweets-tab').click(function () {
      $('.tab-content').hide(); 											 
      $('#tab-one').show();
	  return false;
    });
    $('.following-tab').click(function () {
      $('.tab-content').hide(); 											 
      $('#tab-two').show();
	  return false;
    });
    $('.followers-tab').click(function () {
      $('.tab-content').hide(); 											 
      $('#tab-three').show();
	  return false;
    });

}); // close doc ready

// ]]>
</script>
</body>
</html>