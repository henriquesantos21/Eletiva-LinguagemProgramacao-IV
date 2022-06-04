<?php

namespace Aluno\ProjetPHP\Model\Entity;

class Produtos{
    private $codigo;
    private $nome;
    private $descricao;
    private $valor;

    public function getCodigo(){
        return $this->codigo;
    }
    public function setCodigo(){
        $this ->codigo;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome(){
        $this ->nome;
    }

    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao(){
        $this ->descricao;
    }

    public function getValor(){
        return $this->valor;
    }
    public function setValor(){
        $this ->valor;
    }
}

?>