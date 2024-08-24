<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login-page'] = 'main/login_page';
$route['login-check'] = 'main/login_check';
$route['logout'] = 'main/admin_logout';
$route['job-apply'] = 'main/c_job_apply';
$route['about'] = 'main/c_about';
$route['location'] = 'main/c_location';
$route['contact'] = 'main/c_contact';
$route['apply-submit'] = 'main/apply_submit';
$route['candidate-list'] = 'main/candidates_list';
$route['candidate/(.+)'] = 'main/view_candidate/$1';
$route['services'] = 'main/get_services';
$route['add-new-job'] = 'main/add_new_job';
$route['payment-view'] = 'payment/payment_method';
$route['submit-payment'] = 'payment/submit_payment';
$route['peyment-list'] = 'payment/peyment_list';
$route['add-new-service'] = 'main/add_new_service';
$route['service-request'] = 'main/service_request';
$route['request'] = 'main/client_service_request';
$route['post-delete/(.+)'] = 'main/delete_job_post/$1';
$route['service-delete/(.+)'] = 'main/delete_service/$1';
$route['send-mail'] = 'main/send_mail';


