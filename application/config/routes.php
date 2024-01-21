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
    $route['aboutus'] = 'PageController/aboutus';
    $route['blog/(:any)'] = 'PageController/blog/$1';

    // Register Routes
    $route['register']['GET'] = 'auth/RegisterController';
    $route['register']['POST'] = 'auth/RegisterController/register';

    // Employee Routes
    $route['employee'] = 'employee/EmployeeController';
    $route['employee/create'] = 'employee/EmployeeController/create';
    $route['employee/store'] = 'employee/EmployeeController/store';
    $route['employee/edit/(:num)'] = 'employee/EmployeeController/edit/$1';
    $route['employee/update/(:num)'] = 'employee/EmployeeController/update/$1';
    $route['employee/delete/(:num)'] = 'employee/EmployeeController/delete/$1';
    $route['employee/confirmdelete/(:num)']['DELETE'] = 'employee/EmployeeController/delete/$1';