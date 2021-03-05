<?php

define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));

require_once(ROOT.'models/Model.php');
require_once(ROOT.'controllers/Controller.php');

$params = explode('/', $_GET['p']);

if($params[0] != ""){

    $controller = ucfirst($params[0]);
    $action = isset($params[1])?$params[1]:'index';

    require_once(ROOT.'controllers/'.$controller.'.php');

    $controller = new $controller();

    if(method_exists($controller, $action)){
        unset($params[0]);
        unset($params[1]);
        var_dump($params);
        call_user_func_array([$controller, $action], $params);
    }else{
        http_response_code(404);
        echo "La page n'existe pas !!";
        echo $params[0];
        echo $params[1];
    }

}else{
    require_once(ROOT.'controllers/Main.php');
    $controller = new Main();
    $controller->index();
}

?>
