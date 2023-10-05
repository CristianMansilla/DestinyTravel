<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();
/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'HomeController::principal');
$routes->get('principal', 'HomeController::principal');
$routes->get('quienessomos', 'HomeController::quienessomos');
$routes->get('acercade', 'HomeController::acercade');
// Rutas del registro de usuarios
$routes->get('/registrarse','UsuarioController::create');
$routes->post('/enviar-form','UsuarioController::formValidation');
// Rutas del acceso de usuarios
$routes->get('/acceso', 'AccesoController');
$routes->post('/enviar-login','AccesoController::auth');
$routes->get('/panel', 'PanelController::index',['filter' => 'auth']); //Se crea un filtro para que solo accedan los usuarios autorizados - para establecer el alias nos dirijimos a app>Config>Filters.php y luego en app>Filters>Auth.php establecemos la logica para redireccionar a la página de acceso(loguin) si el usuario no está logueado.
$routes->get('/logout', 'AccesoController::logout');



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}


