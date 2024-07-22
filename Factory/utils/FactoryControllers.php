<?php
    class FactoryControllers {
        public static function create($controller) {
            $controller = ucfirst($controller);
            $controller = $controller . 'Controller';
            if (file_exists('controllers/' . $controller . '.php')) {
                require_once 'controllers/' . $controller . '.php';
                return new $controller();
            } else {
                return null;
            }
        }
    }
?>