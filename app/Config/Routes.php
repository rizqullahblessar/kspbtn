<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Landing::index');
$routes->get('/register', 'Landing::register');
$routes->post('/submit-contact', 'Landing::submitContact');
$routes->post('/submit-registration', 'Landing::submitRegistration');
