<?php

require_once 'libs/FactoryControllers.php';
require_once 'libs/ErrorMessages.php';
class FactoryRoutesPage {
    public function init() {
        $route = !empty( $_GET['url'] ) ? $_GET['url'] :'';
        $route = explode('/', $route);
        $module = !empty( $route[0] ) ? $route[0] :'home';
       
        $metodoController = !empty( $route[1] ) ? $route[1] :'index';

            try{
                include_once 'controllers/'.$module.'Controller.php';
                $controller = FactoryControllers::create($module);
                $controller->{$metodoController}();
            }catch(Exception $e){
                echo json_encode(ErrorMessages::send(404));
            }
        }
}
?>