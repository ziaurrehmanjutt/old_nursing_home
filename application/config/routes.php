<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Home_Controller';
$route['about-us'] = 'Home_Controller/about_us';
$route['contact-us'] = 'Home_Controller/contact_us';
$route['terms-disclaimer'] = 'Home_Controller/terms';
$route['details'] = 'Home_Controller/details';

$route['injuries'] = 'Injuries_Controller/injuries';
$route['negligence'] = 'Injuries_Controller/negligence';
$route['slips-falls'] = 'Injuries_Controller/slips_falls';
$route['pressure-ulcers'] = 'Injuries_Controller/pressure_ulcers';
$route['elopement'] = 'Injuries_Controller/elopement';
$route['sexual-assault'] = 'Injuries_Controller/sexual_assault';
$route['fractures'] = 'Injuries_Controller/fractures';
$route['medication-errors'] = 'Injuries_Controller/medication_errors';
$route['weight-loss-malnutrition'] = 'Injuries_Controller/weight_loss_malnutrition';
$route['premature-death'] = 'Injuries_Controller/premature_death';
$route['neglect'] = 'Injuries_Controller/neglect';
$route['bed-rail-entrapment'] = 'Injuries_Controller/bed_rail_entrapment';
$route['choking'] = 'Injuries_Controller/choking';
$route['covid-19'] = 'Injuries_Controller/covid_19';
$route['other'] = 'Injuries_Controller/other';

$route['ajax/detail/(:num)'] = 'Home_Controller/ajax_detail/$1';


$route['import'] = 'Import/index';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
