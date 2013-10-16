<?php
// logged in user profile
  if ($this->session->userdata('city') != NULL) {
	  $location = '<h3>location:</h3>' ;
	  $location .= "<p>{$this->session->userdata('city')}, {$this->session->userdata('state')}</p>" ;
  } else $location = '' ;
  
  if ($this->session->userdata('website') != NULL) {
	  $website = '<h3>website:</h3>' ;
	  $website .= "<p><a href=\"{$this->session->userdata('website')}\">{$this->session->userdata('website')}</a></p>" ;
  } else $website = '' ;
  
  if ($this->session->userdata('bio') != NULL) {
	  $bio = '<h3>bio:</h3>' ;
	  $bio .= "<p class=\"bio-text\">{$this->session->userdata('bio')}</p>" ;
  } else $bio = '' ;
  
  if ($this->session->userdata('pic') != NULL) {
	  $pic = "{$this->session->userdata('pic')}" ;
	  $alt = "{$this->session->userdata('f_name')} {$this->session->userdata('l_name')} profile picture" ;
  } else { $pic = 'unk-user' ;
	  $alt = "" ;
  } 
?>
<div class="main-content">

  <h1><?php echo "{$this->session->userdata('f_name')} {$this->session->userdata('l_name')}" ; ?></h1>
  
  <div class="profile-left">
  
      <img src="<?php echo site_url(); ?>images/user/<?php echo $pic ; ?>" width="130" height="130" alt="<?php echo $alt ; ?>" class="user-pic">
      <p class="edit-profile"><a href="/update-profile" class="btn" id="edit-pro">edit your profile</a></p>
  
  </div><!-- .profile-left -->
  
  <div class="profile">
  
  <?php     
      echo $location ;
      echo $website ;
      echo $bio ;
  ?>
  
  </div><!-- .profile -->

</div><!-- .main-content -->