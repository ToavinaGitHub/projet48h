<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Login_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['login'] ='Login_controller/index';
$route['graph'] = 'Graphe_controller/clientsParMois';


