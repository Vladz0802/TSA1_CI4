<?php
// Replace the contents of app/Config/Routes.php (below the namespace/use lines) with:

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');          // Welcome: today's tasks only
$routes->get('tasks', 'Tasks::index');     // Full task list
$routes->get('profile', 'Profile::index'); // Demo user
$routes->get('about', 'About::index');     // Static page
