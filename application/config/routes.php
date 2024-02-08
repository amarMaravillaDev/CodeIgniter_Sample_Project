<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    $route['default_controller'] = 'Welcome';
    $route['404_override'] = '';
    $route['translate_uri_dashes'] = FALSE;

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