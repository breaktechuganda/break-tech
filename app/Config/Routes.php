<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('about-us', 'Pages::about_us');
$routes->get('products_and_services', 'Pages::products_and_services');
$routes->get('blogs', 'Pages::blogs');
$routes->get('contact-us', 'Pages::contact_us');
$routes->get('news', 'Pages::news');
