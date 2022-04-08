<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['about'] = 'Welcome/about';

// route for members
$route['member'] = 'Frontend/MemberController/index';
$route['member/add'] = 'Frontend/MemberController/create';
$route['member/store'] = 'Frontend/MemberController/store';
$route['member/edit/(:any)'] = 'Frontend/MemberController/edit/$1';
$route['member/update/(:any)'] = 'Frontend/MemberController/update/$1';
$route['member/delete/(:any)'] = 'Frontend/MemberController/delete/$1';

// routes for cinema
$route['cinema'] = 'Frontend/CinemaController/index';
$route['cinema/add'] = 'Frontend/CinemaController/create';
$route['cinema/store'] = 'Frontend/CinemaController/store';
$route['cinema/edit/(:any)'] = 'Frontend/CinemaController/edit/$1';
$route['cinema/update/(:any)'] = 'Frontend/CinemaController/update/$1';
$route['cinema/delete/(:any)'] = 'Frontend/CinemaController/delete/$1';

// routes for film
$route['film'] = 'Frontend/FilmController/index';
$route['film/add'] = 'Frontend/FilmController/create';
$route['film/store'] = 'Frontend/FilmController/store';
$route['film/edit/(:any)'] = 'Frontend/FilmController/edit/$1';
$route['film/update/(:any)'] = 'Frontend/FilmController/update/$1';
$route['film/delete/(:any)'] = 'Frontend/FilmController/delete/$1';

// routes for screen
$route['screen'] = 'Frontend/ScreenController/index';
$route['screen/add'] = 'Frontend/ScreenController/create';
$route['screen/store'] = 'Frontend/ScreenController/store';
$route['screen/edit/(:any)'] = 'Frontend/ScreenController/edit/$1';
$route['screen/update/(:any)'] = 'Frontend/ScreenController/update/$1';
$route['screen/delete/(:any)'] = 'Frontend/ScreenController/delete/$1';

// routes for the performance
$route['performance'] = 'Frontend/PerformanceController/index';
$route['performance/add'] = 'Frontend/PerformanceController/create';
$route['performance/store'] = 'Frontend/PerformanceController/store';
$route['performance/edit/(:any)'] = 'Frontend/PerformanceController/edit/$1';
$route['performance/update/(:any)'] = 'Frontend/PerformanceController/update/$1';
$route['performance/delete/(:any)'] = 'Frontend/PerformanceController/delete/$1';

// routes for booking
$route['booking'] = 'Frontend/BookingController/index';
$route['booking/add'] = 'Frontend/BookingController/create';
$route['booking/store'] = 'Frontend/BookingController/store';
$route['booking/edit/(:any)'] = 'Frontend/BookingController/edit/$1';
$route['booking/update/(:any)'] = 'Frontend/BookingController/update/$1';
$route['booking/delete/(:any)'] = 'Frontend/BookingController/delete/$1';