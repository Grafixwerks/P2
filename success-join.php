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
    <h1>Hallelujah! Welcome to the fold brother Ned.</h1>
    
    <p>Please take a minute  to fill out your profile so peopleknow who you are.  Or skip this for now.</p>
    <form action="" method="post" enctype="application/x-www-form-urlencoded" id="" class="success">
      <fieldset>
    <legend>Account information</legend>
    <div class="text-group">
      <label for="first-name" class="success-label">First Name:</label>
      <input type="text" name="first-name" id="first-name"  class="txt" maxlength="20" />
    </div><!-- Close class text-gruop -->
    
    
    <div class="text-group">
      <label for="last-name" class="success-label">Last Name:</label>
      <input type="text" name="last-name" id="last-name"  class="txt" maxlength="30" />
    </div><!-- Close class text-gruop -->
    
    
    <div class="text-group">
      <label for="email" class="success-label">E-Mail:</label>
      <input type="text" name="email" id="email"  class="txt" maxlength="30" />
    </div><!-- Close class text-gruop -->
    
    
    <div class="text-group">
      <label for="password" class="success-label">Password: </label>
      <input type="text" name="password" id="password"  class="txt" maxlength="30" />
    </div><!-- Close class text-gruop -->


    <div class="text-group">
      <label for="location" class="success-label">Location:</label>
      <input type="text" name="location" id="location"  class="txt" maxlength="20" />
    </div><!-- Close class text-gruop -->
    

    <div class="text-group">
      <label for="website" class="success-label">Website:</label>
      <input type="text" name="website" id="website"  class="txt" maxlength="20" />
    </div><!-- Close class text-gruop -->


    <div class="text-group">
      <label for="bio" class="success-label">Bio:</label>
      <textarea name="bio" id="bio" class="bio" ></textarea>
    </div><!-- Close class text-gruop -->
    
        
    
        
  <input type="submit" name="submit" value="Update" id="update" class="btn" />    
  </fieldset>

</form>


    
  </div>
  <!-- .main-content --> 
  
</div>
<!-- .wrapper --> 

<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script> 
<script type="text/javascript">
// <![CDATA[

$(document).ready(function() {


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