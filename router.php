<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// if($uri === '/') {
//     require('controllers/index.php');
// } elseif($uri === '/about') {
//     require('controllers/about.php');
// } elseif($uri === '/service') {
//     require('controllers/service.php');
// } elseif($uri === '/contact') {
//     require('controllers/contact.php');
// }
// asdfasdfasfdasdfasdf
// 404

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/service' => 'controllers/service.php',
    '/contact' => 'controllers/contact.php',
    '/register' => 'controllers/register.php'
];


function routeToController($uri, $routes)
{
    if(array_key_exists($uri, $routes)) {
        require($routes[$uri]);
    } else {
        require('views/404.php');
    }
}


routeToController($uri, $routes);
