<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//El slash "/" se refiere a la raíz del sitio web, es decir, la página de inicio o el punto de entrada principal del sitio.

$routes->get('/', 'Home::dashboard');
$routes->get('/senati', 'Home::index');
//¿Cómo funciona una ruta?
//Cuando un usuario accede a una URL específica en el sitio web, el sistema de enrutamiento de CodeIgniter busca una ruta que coincida con esa URL. Si encuentra una coincidencia, ejecuta la función o método asociado a esa ruta, lo que generalmente implica cargar un controlador y una vista para mostrar la página solicitada al usuario.
//$routes->get('/ruta', 'Controlador::metodo');
//Mota: Es posible crear más de una ruta para una vista, por ejemplo, para acceder a la vista de Ingeniería de Software, se pueden crear varias rutas como "/programador", "/coder", etc., todas apuntando al mismo método del controlador que carga la vista correspondiente.

$routes->get('/programador', 'Carrera::showIngenieria');
$routes->get('/coder', 'Carrera::showIngenieria');

$routes->get('/creativo', 'Carrera::showDesing');
$routes->get('/marketing', 'Carrera::showDesing');

//Nuevas rutas para navegar desde DASHBOARD
$routes->get('/clientes','Cliente::index');
$routes->get('/proveedores','Proveedor::index');
$routes->get('/productos','Producto::index');

$routes->get('/diarios','Reporte::diarios');
$routes->get('/semanales','Reporte::semanales');
$routes->get('/mensuales','Reporte::mensuales');
$routes->get('/personalizados','Reporte::personalizados');