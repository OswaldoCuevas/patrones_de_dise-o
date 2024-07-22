<?php
require_once 'interfaces/IRoutes.php';
require_once 'utils/FactoryControllers.php';
require_once 'utils/ErrorMessages.php';
class FactoryRoutes {
    public static function init() {
        $route = !empty( $_GET['url'] ) ? $_GET['url'] :'';
        $route = explode('/', $route);
        $module = $route[0];
       
        $metodoController = !empty( $route[1] ) ? $route[1] :'';
        $route = ucfirst($module);
        $route = $route . 'Routes';
        
        $method = $_SERVER['REQUEST_METHOD'];
        if (file_exists('routes/' . $route . '.php')) {
            require_once 'routes/' . $route . '.php';
            if(empty(ROUTES[$method][$metodoController])) {
                echo json_encode(ErrorMessages::send(404));
                die();
            }
            $controller = FactoryControllers::create($module);
            $controller->{ROUTES[$method][ $metodoController]}();
        } else {
            echo json_encode(ErrorMessages::send(404));
        }
    }
}
?>