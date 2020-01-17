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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'Frontend_Controller';
$route['index'] ='Frontend_Controller/index';
$route['search_result'] = 'Frontend_Controller/search_result_by_location';
$route['shop/(:any)'] = 'Frontend_Controller/getshopname/$1';
$route['dashboard/message'] ='Frontend_Controller/get_message';
$route['dashboard/myshop'] = 'Frontend_Controller/get_myshop';
$route['dashboard/profile'] = 'Frontend_Controller/get_profile';
$route['dashboard/myshop/add_products'] = 'Frontend_Controller/get_add_products';
$route['ajax_file_upload_handler'] = 'Frontend_Controller/ajax_file_upload_handler';
$route['product_permalink'] = 'Frontend_Controller/product_permalink';

// Administrator route

// 
$route['administrator/logout'] = 'Administrator_Controller/logout';
$route['administrator/process_login'] = 'Administrator_Controller/process_login';
$route['administrator/login'] = 'Administrator_Controller/get_login';
$route['administrator/forgot_password'] = 'Administrator_Controller/forgot_password_page';
$route['administrator/home'] = 'Administrator_Controller/homepage';
$route['administrator/users'] = 'Administrator_Controller/list_users_page';
$route['administrator/categories'] = 'Administrator_Controller/category_page';
$route['administrator/admin_accounts'] = 'Administrator_Controller/admin_account_page';
$route['administrator/locations'] = 'Administrator_Controller/location_page';
$route['administrator/sliders'] = 'Administrator_Controller/sliders_page';
$route['administrator/profile'] = 'Administrator_Controller/admin_profile_page';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// admin account route process
$route['administrator/create_account'] = 'Administrator_Controller/create_account';
$route['administrator/update_account'] = 'Administrator_Controller/update_account';
$route['administrator/delete_account'] = 'Administrator_Controller/delete_account';

// admin category 
$route['administrator/create_category'] = 'Administrator_Controller/create_category';
$route['administrator/update_category'] = 'Administrator_Controller/update_category';
$route['administrator/delete_category'] = 'Administrator_Controller/delete_category';

// admin location 
$route['administrator/create_location'] = 'Administrator_Controller/create_location';
$route['administrator/update_location'] = 'Administrator_Controller/update_location';
$route['administrator/delete_location'] = 'Administrator_Controller/delete_location';


// user regsiter
$route['register_user'] = 'Frontend_Controller/register_user';
$route['login_user'] = 'Frontend_Controller/login_user';
$route['dashboard/create_shop'] = 'Frontend_Controller/create_shop';
$route['dashboard/upload_shop_image'] = 'Frontend_Controller/upload_shop_image';

$route['dashboard/logout'] = 'Frontend_Controller/logout';

$route['category/(:any)/(:num)'] = 'Frontend_Controller/category_page/$1/$2';