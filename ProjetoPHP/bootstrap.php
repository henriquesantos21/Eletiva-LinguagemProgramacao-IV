<?php

require_once __DIR__.'/vendor/autoload.php';

//Aqui a gente recupera o que o usuário digitou e qual 
//método HTTP ele utilizou
$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'];

//Instanciar classe Router
$router = new \Aluno\ProjetoPhp\Router($method, $path);

//ADICIONAR AS ROTAS VÁLIDAS ABAIXO

$router->get('/ola-mundo', function(){
    return "Olá Mundo!";
});

$router->get('/exemplo', 
        'Aluno\ProjetoPhp\Controller\ExercicioController::exibir');

$router->post('/exemplo-resultado',
        'Aluno\ProjetoPhp\Controller\ExercicioController::exibirResultado');

//ROTAS CLIENTES
$router->get('/cliente/novo', 'Aluno\ProjetoPHP\Controller\ClientesController::abrirFormularioInserir');
$router->post('/cliente/inserir', 'Aluno\ProjetoPHP\Controller\ClientesController::inserirCliente');
$router->get('/clientes', 'Aluno\ProjetoPHP\Controller\ClientesController::abrirListaClientes');
$router->get('/cliente/alterar/{id}', 'Aluno\ProjetoPHP\Controller\ClientesController::abrirFormularioAlterar');
$router->post('/cliente/editar/{id}', 'Aluno\ProjetoPHP\Controller\ClientesController::editarCliente');
$router->get('/cliente/excluir/{id}', 'Aluno\ProjetoPHP\Controller\ClientesController::excluirCliente');
//ROTAS CLIENTES

//ROTAS PRODUTOS
$router->get('/produto/novo', '\ProjetoPHP\Controller\ProdutosController::abrirFormularioInserir');
$router->post('/produto/inserir', '\ProjetoPHP\Controller\ProdutosController::inserirProduto');
$router->get('/produtos', 'ProjetoPHP\Controller\ProdutosController::abrirListaProdutos');
$router->get('/produto/alterar/{codigo}', 'ProjetoPHP\Controller\ProdutosController::abrirFormularioAlterar');
$router->post('/produto/editar/{codigo}', 'ProjetoPHP\Controller\ProdutosController::editarProduto');
$router->get('/produto/excluir/{codigo}', 'ProjetoPHP\Controller\ProdutosController::excluirProduto');
//ROTAS PRODUTOS

//ADICIONAR AS ROTAS VÁLIDAS ACIMA

$result = $router->handler();

if (!$result){
    http_response_code(404);
    echo "Página não encontrada";
    die();
}

echo $result($router->getParams());