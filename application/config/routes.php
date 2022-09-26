<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['divya'] = 'people/divya';
$route['aditya'] = 'people/aditya';

$route['create_categories'] = 'categories/create';
$route['cricket'] = 'showpost/cricket';
$route['finance'] = 'showpost/finance';
$route['sports'] = 'showpost/sports';
$route['ipo'] = 'showpost/ipo';
$route['football'] = 'showpost/football';
$route['politics'] = 'showpost/politics';

$route['create'] = 'posts/create';

$route['post/(:any)'] = 'posts/view/$1';
$route['post/view'] = 'posts/view';
$route['default_controller'] = 'pages';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
