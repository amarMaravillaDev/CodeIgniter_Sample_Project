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

    // Employee Routes
    $route['employee'] = 'employee/EmployeeController';
    $route['employee/create'] = 'employee/EmployeeController/create';