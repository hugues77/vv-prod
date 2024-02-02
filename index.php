<?php
/**
 * Quelques Require Importants
 */
// session_start();
require_once 'vendor/autoload.php'; 
require_once 'functions/main.php';
require_once 'functions/functions.php';
require_once 'ajax/function.php'; 
//Initialiser date en francais
setlocale(LC_TIME, 'fr.utf8');
// setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro');

/**
 * 

 * Initialization du AltoRouter
 */
$router = new AltoRouter();
/**
 * création des URL /ROUTER
 */
$router->map('GET|POST','/','home');
$router->map('GET','/login','login');
$router->map('GET','/admin','admin');
$router->map('GET','/admin/users','/admin/users');
$router->map('GET','/logout/[i:user_id]','logout');


// $router->map('GET|POST','/ajax/users-list','ajax/users-list');

$router->map('GET|POST','/booking/[*:slug]/[i:id]','/booking/article');

$match = $router->match();

if(is_array($match)){
    
    if(is_callable($match['target'])){
        call_user_func_array($match['target'], $match['params']);
    }else{
        $params = $match['params'];
        ob_start();
        require_once "pages/{$match['target']}.php";
        $content = ob_get_clean();
    }
    require_once 'layout/header.php';   
    
}else{
    $content = '';

    require_once 'layout/header.php'; 
    require_once 'pages/error.php'; 
}
require_once 'layout/footer.php';
