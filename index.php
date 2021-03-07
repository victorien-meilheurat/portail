<?php
session_start();

define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
define('ROOTLINK', 'portail');

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
        
        call_user_func_array([$controller, $action], $params);
    }else{
        http_response_code(404);
        echo "La page n'existe pas !!";
    }

}else{
    if (isset($_SESSION['utilisateur'])) {
        require_once(ROOT.'controllers/Authentification.php');
        $controller = new Authentification();
        $controller->accueil();
    } else {
        require_once(ROOT.'controllers/Main.php');
        $controller = new Main();
        $controller->index();
    }
}

?>
