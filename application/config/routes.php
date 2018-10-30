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
$route['default_controller'] = 'Login_Controller';


$route['dashboard'] = 'Dashboard_Controller';
$route['category'] = 'Categoria_Controller';
$route['add_category'] = 'Categoria_Controller/add_view';
$route['delete_category/(:any)'] = 'Categoria_Controller/delete/$1';


$route['products'] = 'Producto_Controller';
$route['add_product'] = 'Producto_Controller/add_view';
$route['delete_product/(:any)'] = 'Producto_Controller/delete/$1';
$route['edit-product/(:any)'] = 'Producto_Controller/edit_view/$1';


$route['facturas'] = 'Factura_Controller';
$route['add-factura'] = 'Factura_Controller/add_view';
$route['show-factura/(:any)'] = 'Factura_Controller/show_factura/$1';
$route['PDF/(:any)'] = 'Factura_Controller/pdf/$1';
$route['PDF-download/(:any)'] = 'Factura_Controller/pdf_download/$1';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
