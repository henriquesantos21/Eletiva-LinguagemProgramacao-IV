<?php

namespace Aluno\ProjetoPhp\Controller;

use Aluno\ProjetoPhp\Model\DAO\ClientesDAO;
use Aluno\ProjetoPhp\Model\Entity\Clientes;

class ClienteController{

    public static function abrirFomularioInserir(){
        require_once "..\src\View\Inserir_Cliente.php";
    }

    public static function inserirCliente(){
        $cliente = new Clientes();
        $cliente->setEmail($_POST['email']);
        $cliente->setNome($_POST['nome']);
        $cliente->setIDade($_POST['idade']);
        $dao = new ClientesDAO();
        if ($dao->inserir($cliente)){
            return "Inserido com sucesso";
        }else {
            return "Erro ao inserir";
        }

    }
}