<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/adminpanel', 'Home::admin');
$routes->get('/adminlogin', 'Home::login');

$routes->post('/addadmin', 'ControllerAdmin::AddAdmin');
$routes->post('/loginadmin', 'ControllerAdmin::LoginAdmin');
$routes->get('/logout', 'ControllerAdmin::logout');

$routes->post('/addgame', 'ControllerGame::AddGame');
$routes->post('/addurl', 'ControllerGame::AddUrl');
$routes->get('/getgame', 'ControllerGame::GetGame');
$routes->get('/deletegame/(:num)', 'ControllerGame::DeleteGame/$1');

