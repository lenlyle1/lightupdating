<?php

use Lib\Utils\Template;

$router = new Router\LightRouter();
//$router = new AltoRouter();

require_once(SITE_ROOT . '/App/Router/pageRoutes.php');
require_once(SITE_ROOT . '/App/Router/authRoutes.php');
require_once(SITE_ROOT . '/App/Router/userRoutes.php');
require_once(SITE_ROOT . '/App/Router/searchRoutes.php');
require_once(SITE_ROOT . '/App/Router/seedRoutes.php');
require_once(SITE_ROOT . '/App/Router/testRoutes.php');
require_once(SITE_ROOT . '/App/Router/adminRoutes.php');

$match = $router->match();

Template::assign('site', $site);

if ($match === false) {
    // output 404
    $smarty->display('404/404.tpl');
} else {
    list( $controller, $action ) = explode( '#', $match['target'] );

    if ( is_callable(array('Controllers\\' . $controller, $action)) ) {
        $template = call_user_func_array(array('Controllers\\' . $controller,$action), array($match['params']));

        if($template){
        	$smarty->display($template . '.tpl');
        }
    } else {
		echo 'Route Error';
        // here your routes are wrong.
        // Throw an exception in debug, send a  500 error in production
    }
}