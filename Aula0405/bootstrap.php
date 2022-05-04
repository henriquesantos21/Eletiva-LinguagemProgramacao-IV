<?php

require_once __DIR__."/vendor/autoload.php";

//Aqui a gente recupera oque o usuário digitou e qual metodo HTTP ele utilizou
$merthod = $_SERVER["REQUEST_METHOD"];
$path = $_SERVER["PATH_INFO"];

//Instanciar classe Router
$router = new \Aluno\Aula0405\Router($method, $path);

//ADICIONAR AS ROTAS VÁLIDAS ABAIXO

$router->get('/ola-mundo', function(){
    return "Olá Mundo!";
});

//ADICIONAR AS ROTAS VÁLIDAS ACIMA

    $result = $router->handler();

if (!$result){
    http_response_code(404);
    echo "Página nâo encontrada";
    die();
}

echo $result($router->getParams());