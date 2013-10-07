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

	  // Sign in form, email input instructions, remove on focus
	  
	  $("#email").attr("value", "email").css('color', '#808080');
	  var text1 = "email";
	  
	  $("#email").focus(function() {
			  if($(this).attr("value") == text1) $(this).attr("value", "").css('color', '#000');
	  });
	  
	  $("#email").blur(function() {
			  if($(this).attr("value") == "") $(this).attr("value", text1).css('color', '#808080');
	  });



	  // Sign in form, password input instructions, remove on focus, uses background image
	  
	  $("#password").focus(function() {
		  $(this).addClass("active");
		  $(this).removeClass("inactive");
	  });

	  $("#password").blur(function() {
			  if($(this).val() == "") $(this).removeClass("active").addClass("inactive");
	  });


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