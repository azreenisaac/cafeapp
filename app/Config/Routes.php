<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/kopisan-cafe', 'Home::kopisan_cafe');
$routes->get('/dan-cafe', 'Home::dan_cafe');
$routes->get('/jebat-cafe', 'Home::jebat_cafe');
$routes->get('/today-offer', 'Home::today_offer');
$routes->get('/contact-us', 'Home::contact_us');
$routes->get('/login', 'AuthController::index');

//ADMIN
$routes->get('/admin', 'AdminController::index');

$routes->get('/adminlist', 'AdminController::adminlist');
$routes->get('/add-admin', 'AdminController::add_admin');
$routes->get('/edit-admin', 'AdminController::edit_admin');

$routes->get('/stafflist', 'AdminController::stafflist');
$routes->get('/add-staff', 'AdminController::add_staff');
$routes->get('/edit-staff', 'AdminController::edit_staff');

$routes->get('/studentlist', 'AdminController::studentlist');
$routes->get('/add-student', 'AdminController::add_student');
$routes->get('/edit-student', 'AdminController::edit_student');

$routes->get('/cafelist', 'AdminController::cafelist');
$routes->get('/add-cafe', 'AdminController::add_cafe');
$routes->get('/edit-cafe', 'AdminController::edit_cafe');

$routes->get('/performance', 'AdminController::performance');
$routes->get('/customer-reviews', 'AdminController::customerreviews');
$routes->get('/reviews', 'AdminController::reviews');

$routes->get('/support-ticket', 'AdminController::supportticket');

//STAFF
$routes->get('/staff', 'StaffController::index');
$routes->get('staff/aboutcafe', 'StaffController::aboutcafe');
$routes->get('staff/staff-list', 'StaffController::stafflist');
$routes->get('staff/cafemenu', 'StaffController::cafemenu');
$routes->get('staff/menu-category', 'StaffController::menucategory');
$routes->get('staff/customerreviews', 'StaffController::custreviews');
$routes->get('staff/ticket', 'StaffController::support_ticket');
