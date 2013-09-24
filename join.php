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


<div class="welcome">
<p class="intro">Talk directly to God in 140 characters! Holy Tweet uses the miracle of our advanced ethereal net protocol to deliver your 140 character message directly to God.</p>


<form action="" method="post" enctype="application/x-www-form-urlencoded" id="">
  <fieldset>
    <legend>Join</legend>
    <div class="text-group">
      <label for="first-name" class="welcome-label">First Name:</label>
      <input type="text" name="first-name" id="first-name"  class="txt" maxlength="20" />
    </div><!-- Close class text-gruop -->
    
    
    <div class="text-group">
      <label for="last-name" class="welcome-label">Last Name:</label>
      <input type="text" name="last-name" id="last-name"  class="txt" maxlength="30" />
    </div><!-- Close class text-gruop -->
    
    
    <div class="text-group">
      <label for="email" class="welcome-label">E-Mail:</label>
      <input type="text" name="email" id="email"  class="txt" maxlength="30" />
    </div><!-- Close class text-gruop -->
    
    
    <div class="text-group">
      <label for="password" class="welcome-label">Password: </label>
      <input type="text" name="password" id="password"  class="txt inactive" maxlength="30" />
    </div><!-- Close class text-gruop -->
    
  <input type="submit" name="submit" value="Join" id="join" class="btn" />    
  </fieldset>
<p>Already a member?  <a href="#">Sign in</a></p>
</form>



</div><!-- .welcome -->


   
</div><!-- .wrapper -->

<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/additional-methods.min.js"></script>
<script type="text/javascript">
// <![CDATA[

$(document).ready(function() {
	  // first-name input instructions, remove on focus
	  
	  $("#first-name").attr("value", "First name").css('color', '#808080');
	  var text1 = "First name";
	  
	  $("#first-name").focus(function() {
			  if($(this).attr("value") == text1) $(this).attr("value", "").css('color', '#000');
	  });
	  
	  $("#first-name").blur(function() {
			  if($(this).attr("value") == "") $(this).attr("value", text1).css('color', '#808080');
	  });


	  // last-name input instructions, remove on focus
	  
	  $("#last-name").attr("value", "Last name").css('color', '#808080');
	  var text2 = "Last name";
	  
	  $("#last-name").focus(function() {
			  if($(this).attr("value") == text2) $(this).attr("value", "").css('color', '#000');
	  });
	  
	  $("#last-name").blur(function() {
			  if($(this).attr("value") == "") $(this).attr("value", text2).css('color', '#808080');
	  });

	  // email input instructions, remove on focus
	  
	  $("#email").attr("value", "email").css('color', '#808080');
	  var text1 = "email";
	  
	  $("#email").focus(function() {
			  if($(this).attr("value") == text1) $(this).attr("value", "").css('color', '#000');
	  });
	  
	  $("#email").blur(function() {
			  if($(this).attr("value") == "") $(this).attr("value", text1).css('color', '#808080');
	  });



	  // password input instructions, remove on focus, uses background image
	  
	  $("#password").focus(function() {
		  $(this).addClass("active");
		  $(this).removeClass("inactive");
	  });

	  $("#password").blur(function() {
			  if($(this).val() == "") $(this).removeClass("active").addClass("inactive");
	  });

}); // close doc ready

// ]]>
</script>
</body>
</html>