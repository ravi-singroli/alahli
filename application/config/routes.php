<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// *********** Front end routes Only Goes Here Start *************** //
$route['about-us'] = 'home/about_us';
$route['contact-us'] = 'home/contact_us';
$route['light-motor-driving'] = 'home/light_motor_driving';
$route['motor-cycle-driving'] = 'home/motor_cycle_driving';
/*////////////////////Code start: Added by saras date: 30/10/2017/////////////*/
$route['light-bus-driving'] = 'home/light_bus_driving';
$route['people-determination-details'] = 'home/people_determination_details';
////////////////////Code end: Added by saras date: 30/10/2017/////////////
$route['heavy-bus-driving'] = 'home/heavy_bus_driving';
$route['heavy-truck-driving'] = 'home/heavy_truck_driving';
$route['heavy-light-forklift-driving'] = 'home/heavy_light_forklift_driving';
$route['desert-driving'] = 'home/desert_driving';
$route['defensive-driving'] = 'home/defensive_driving';
$route['company-introductions'] = 'home/company_introductions';

$route['my-account'] = 'dashboard/my_account';
$route['payment-details'] = 'dashboard/payment_details';
$route['test-details'] = 'dashboard/test_details';
//$route['test-details'] = 'dashboard/test_details';
// *********** Front end routes Only Goes Here End ***************** //

