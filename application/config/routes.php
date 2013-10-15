<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "site";
$route['404_override'] = '';

$route['profile'] = "profile"; // logged in user profile
$route['update-profile'] = "sign_in/update_profile"; // edit logged in user profile
$route['dashboard'] = "profile/dashboard" ; // logged in user dashboard for site
$route['following'] = "profile/list_following" ; // list of people logged in user is following
$route['users'] = "profile/list_users" ; // list all users
$route['user/(:any)'] = "profile/user/$1"; // show profile of user by user_id
$route['sign-in'] = "sign_in"; // user sign in
$route['log-out'] = "sign_in/sign_out"; // log out current user, redirect to HTTP referrer
$route['join'] = "sign_in/join"; // Form to join
$route['join-success'] = "sign_in/join_success"; // confirmation of form submission 
$route['confirm/(:any)'] = "sign_in/register_user/$1"; // confirm email code, send to 2nd form
$route['delete-tweet/(:any)'] = "controller_tweet/delete/$1"; // deletes tweet by tweet_id
$route['edit-tweet/(:any)'] = "controller_tweet/edit/$1"; // edit tweet by tweet_id
$route['follow/(:any)'] = "controller_follow/add/$1"; // logged in user adds person to follow
$route['unfollow/(:any)'] = "controller_follow/delete/$1"; // logged in user deletes person follow
$route['error'] = "site/error"; // generic error
$route['upload'] = "upload"; // generic error

//$route['test'] = "sign_in/confirm_registration";

/* End of file routes.php */
/* Location: ./application/config/routes.php */