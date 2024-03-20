<?php
defined('BASEPATH') or exit('No direct script access allowed');

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

$route['default_controller'] = 'Welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['cmai/pay1st']['GET'] = 'cmai/Pay1st';
$route['cmai/pay1st']['POST'] = 'cmai/Pay1st';

// Added by Amar Maravilla
// Welcome Routes
$route['about'] = 'Welcome/about';

// PageController Routes
$route['home'] = 'PageController';
$route['about_us'] = 'PageController/aboutus';
$route['blog/(:any)'] = 'PageController/blog/$1';
$route['access_denied']['GET'] = 'PageController/accessDenied';

// Register Routes
$route['register']['GET'] = 'auth/RegisterController';
$route['register']['POST'] = 'auth/RegisterController/register';

// Login Routes
$route['login']['GET'] = 'auth/LoginController';
$route['login']['POST'] = 'auth/LoginController/login';

// Logout Routes
$route['logout']['GET'] = 'auth/LogoutController/logout';

// Users Routes
$route['users']['GET'] = 'users/UsersController';

// Admin Routes
$route['admins']['GET'] = 'admins/AdminsController';

// Employee Routes
$route['employee'] = 'employee/EmployeeController';
$route['employee/create'] = 'employee/EmployeeController/create';
$route['employee/store'] = 'employee/EmployeeController/store';
$route['employee/edit/(:num)'] = 'employee/EmployeeController/edit/$1';
$route['employee/update/(:num)'] = 'employee/EmployeeController/update/$1';
$route['employee/delete/(:num)'] = 'employee/EmployeeController/delete/$1';
$route['employee/confirmdelete/(:num)']['DELETE'] = 'employee/EmployeeController/delete/$1';

// Simple CRUD Routes
// Login Controller Routes
$route['simple_crud/login']['GET'] = 'simple_crud/authenticate/Login';
$route['simple_crud/login']['POST'] = 'simple_crud/authenticate/Login/login';

// Logout Controller Routes
$route['simple_crud/logout']['GET'] = 'simple_crud/authenticate/Logout/logout';

// Register Controller Routes
$route['simple_crud/register']['GET'] = 'simple_crud/authenticate/Register';
$route['simple_crud/register']['POST'] = 'simple_crud/authenticate/Register/register';

// Users Controller Routes
$route['simple_crud/users']['GET'] = 'simple_crud/users/Users';
$route['simple_crud/users/users_list']['GET'] = 'simple_crud/users/Users/usersList';
$route['simple_crud/users/my_profile']['GET'] = 'simple_crud/users/Users/myProfile';
$route['simple_crud/users/my_profile/view_profile_picture']['GET'] = 'simple_crud/users/Users/viewProfilePicture';
$route['simple_crud/users/edit_my_profile']['GET'] = 'simple_crud/users/Users/editMyProfile';
$route['simple_crud/users/edit_my_profile']['POST'] = 'simple_crud/users/Users/editMyProfile';
$route['simple_crud/users/change_password']['GET'] = 'simple_crud/users/Users/changePassword';
$route['simple_crud/users/change_password']['POST'] = 'simple_crud/users/Users/changePassword';

// Random Seeder Controller Routes
$route['simple_crud/random_seeder']['GET'] = 'simple_crud/seeder/RandomSeeder/seed';