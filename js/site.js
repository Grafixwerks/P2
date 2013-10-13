$(document).ready(function() {

	  // Text input instructions, remove on focus, uses title attribute
	  $('.form-txt').each(function() {
	  var text = $(this).attr('title');
	  if ($(this).val() == ''){
	  $(this).attr('value', text).css('color', '#808080');
	  $(this).focus(function() {
			  if($(this).attr('value') == text) $(this).attr('value', '').css('color', '#000');
	  });
	  $(this).blur(function() {
			  if($(this).attr('value') == '') $(this).attr('value', text).css('color', '#808080');
	  });
};
});

	  // Password input instructions, remove on focus, uses background image
	  $('#password').focus(function() {
		  $(this).addClass('active');
		  $(this).removeClass('inactive');
	  });

	  $('#password').blur(function() {
			  if($(this).val() == '') $(this).removeClass('active').addClass('inactive');
	  });

// Tweet input instructions, remove on focus
	  $('#tweet-msg').val('Create your tweet, 140 characters max.').css('color', '#808080');
	  var text1 = 'Create your tweet, 140 characters max.';
	  
	  $('#tweet-msg').focus(function() {
			  if($(this).val() == text1) $(this).val('').css('color', '#000');
	  });
	  
	  $('#tweet-msg').blur(function() {
			  if($(this).val() == '') $(this).val(text1).css('color', '#808080');
	  });
	  
	  $('#btn-tweet').click(function() {
			  if($('#tweet-msg').val() == text1) $('#tweet-msg').val('');
	  });

// These show and hide tabs

// Hide tab contents on load
      $('#tab-two').hide();
      $('#tab-three').hide();

// show/hide tab content on click
    $('.tweets-tab').click(function () {
      $('.tabz').removeClass('current');
	  $(this).addClass('current');
	  $('.tab-content').hide(); 											 
      $('#tab-one').show();
	  return false;
    });
    $('.following-tab').click(function () {
      $('.tabz').removeClass('current');
	  $(this).addClass('current');
	  $('.tab-content').hide(); 											 
      $('#tab-two').show();
	  return false;
    });
    $('.followers-tab').click(function () {
      $('.tabz').removeClass('current');
	  $(this).addClass('current');
	  $('.tab-content').hide(); 											 
      $('#tab-three').show();
	  return false;
    });


}); // close doc ready