<?php

    if($_GET){
        $controller = lcfirst($_GET['controller']);
        $method = lcfirst($_GET['method']);

        require_once "controllers/{$controller}controller.class.php";
        $class_controller = str_replace("", "", $controller."Controller");

        $obj = new $class_controller();
        $obj->$method();

    }else{
        require_once "controllers/inicioController.class.php";
        $obj = new inicioController();
        $obj->inicio();
    }
?>