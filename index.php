<?php

require 'vendor/autoload.php';

require 'Controller/FrontendController.php';

$router = new AltoRouter();
$router->setBasePath("/s5/cours-thomas/");

// Définit table de routage
$router->map('GET','home/','FrontendController#home');
$router->map('GET','series/','FrontendController#listeSerie');
$router->map('GET','films/','FrontendController#listeFilm');

/*$router->map("GET","home/",function(){

    echo "BIENVENUE SUR CE SITE";
});
$router->map("GET","films/",function(){
    echo "liste des films";
});
$router->map("GET","series/",function(){
    echo "liste séries";
});*/


$matchTrouve = $router->match();
$target = $matchTrouve["target"];
$ctrlAndMethod = explode('#', $target);
$ctrlName = $ctrlAndMethod[0];
$methodName = $ctrlAndMethod[1];

$ctrl = new $ctrlName();
$ctrl->$methodName();

//call_user_func( $matchTrouve["target"] );

//var_dump($ctrlAndMethod);