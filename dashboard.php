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
      </ul><!-- .dropdown --> 
      
      
    </li>
    <li><a href="" title="Home" id="home">Home</a></li>
  </ul><!-- .nav --> 
  
</div><!-- .main-nav -->


<div class="wrapper"> <a href="/" class="logo">Holy Tweet: from your keyboard to God’s ear!</a>
  <div class="main-content">
    <h1>Welcome brother Ned</h1>







<form action="" method="post" enctype="application/x-www-form-urlencoded" id="send-tweet">
  <fieldset>
    <legend>Create your tweet...</legend>

      <label for="tweet-msg" class="tweet-label">Message:</label>
      <input type="text" name="tweet-msg" id="tweet-msg"  class="tweet-txt" maxlength="140" />
  <input type="submit" name="submit" value="Tweet" id="btn-tweet" class="btn" />    
  </fieldset>

  <br class="clr-flt">
</form>

 
<ul class="profile-nav">
<li><span class="count">3</span> <a href="#" class="tweets-tab">Tweets</a></li>
<li><span class="count">8</span> <a href="#" class="following-tab">Following</a></li>
<li class="last"><span class="count">6</span> <a href="#" class="followers-tab">Followers</a></li>
</ul><!-- .profile-nav -->


    
<div class="tab-content" id="tab-one">


<h2>Your tweets</h2>


    <div class="tweet">
      <div class="tweet-left">

        
        <p>Pellentesque tincidunt velit ac tellus malesuada, vel laoreet lectus dignissim.  Vestibulum at lectus ac enim suscipit mattis sit amet ut nunc. </p>
      </div><!-- .tweet-left -->
      
      <div class="tweet-right"><span class="date">18 Sep</span> <a href="#" class="btn-small edit">edit</a> </div><!-- .tweet-right --> 
      <br class="clr-flt">
    </div><!-- .tweet --> 


    <div class="tweet">
      <div class="tweet-left">

        <p>Nullam ultricies ultrices pharetra. Pellentesque tincidunt velit ac tellus malesuada, vel laoreet lectus dignissim.</p>
      </div><!-- .tweet-left -->
      
      <div class="tweet-right"><span class="date">18 Sep</span>  <a href="#" class="btn-small edit">edit</a> </div><!-- .tweet-right --> 
      <br class="clr-flt">
    </div><!-- .tweet --> 



    <div class="tweet">
      <div class="tweet-left">

        <p>Sed dictum, est ac viverra porttitor, est leo lacinia massa.  Vestibulum at lectus ac enim suscipit mattis sit amet ut nunc. </p>
      </div><!-- .tweet-left -->
      
      <div class="tweet-right"><span class="date">18 Sep</span>  <a href="#" class="btn-small edit">edit</a> </div><!-- .tweet-right --> 
      <br class="clr-flt">
    </div><!-- .tweet --> 

</div><!-- #tab-one -->



<div class="tab-content" id="tab-two">
    <h2>Following</h2>


    <div class="tweet"> <img src="images/th-unk-user.png" width="48" height="48" alt="" class="user-th">
      <div class="tweet-left">
        <h3><a href="#">Thomas Durran</a> @TD</h3>
        <p>Pellentesque tincidunt velit ac tellus malesuada, vel laoreet lectus dignissim.  Vestibulum at lectus ac enim suscipit mattis sit amet ut nunc. </p>
      </div><!-- .tweet-left -->
      
      <div class="tweet-right"> <a href="#" class="btn-small follow">unfollow</a> </div><!-- .tweet-right --> 
      <br class="clr-flt">
    </div><!-- .tweet --> 


    <div class="tweet"> <img src="images/th-unk-user.png" width="48" height="48" alt="" class="user-th">
      <div class="tweet-left">
        <h3><a href="#">Daisuke Murase</a> @typester</h3>
        <p>Phiaculis nulla id purus convallis interdum. Sed aliquet consequat dui convallis venenatis. Nam sit amet arcu et tortor sodales semper.</p>
      </div><!-- .tweet-left -->
      
      <div class="tweet-right"> <a href="#" class="btn-small follow">unfollow</a> </div><!-- .tweet-right --> 
      <br class="clr-flt">
    </div><!-- .tweet --> 



    <div class="tweet"> <img src="images/th-unk-user.png" width="48" height="48" alt="" class="user-th">
      <div class="tweet-left">
        <h3><a href="#">David Hollander</a> @typester</h3>
        <p>Vestibulum at lectus ac enim suscipit mattis sit amet ut nunc. Pellentesque tincidunt velit ac tellus malesuada, vel laoreet lectus dignissim.</p>
      </div><!-- .tweet-left -->
      
      <div class="tweet-right"><span class="date"> <a href="#" class="btn-small follow">unfollow</a> </div><!-- .tweet-right --> 
      <br class="clr-flt">
    </div><!-- .tweet --> 



</div><!-- #tab-2 -->


<div class="tab-content" id="tab-three">
tab 3
</div><!-- #tab-3 -->
<!-- style="display:none"-->

  </div><!-- .main-content -->
   
</div><!-- .wrapper -->


<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>

<script type="text/javascript">
// <![CDATA[

$(document).ready(function() {

// Tweet input instructions, remove on focus

	  $("#tweet-msg").attr("value", "Now let us upload the holy tweet of the Lord.").css('color', '#808080');
	  var text1 = "Now let us upload the holy tweet of the Lord.";
	  
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
	  (this).preventDefault();
    });
    $('.following-tab').click(function () {
      $('.tab-content').hide(); 											 
      $('#tab-two').show();
	  (this).preventDefault();
    });
    $('.followers-tab').click(function () {
      $('.tab-content').hide(); 											 
      $('#tab-three').show();
	  (this).preventDefault();
    });

}); // close doc ready

// ]]>
</script>
</body>
</html>