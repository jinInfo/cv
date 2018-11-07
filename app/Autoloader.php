<?php


class Autoloader{


    public static function register() {
        spl_autoload_register(array(__CLASS__,'autoload'));
    }

    public static function autoload($class_name) {
        require $class_name . '.php';
    }
    
    



}




?>
