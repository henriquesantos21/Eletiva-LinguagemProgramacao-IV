<?php

namespace Aluno\ProjetoPHP\Model\DAO;

use Aluno\ProjetoPHP\Model\Entity\Produtos;

class ProdutosDAO{
    public function inserir(Produtos $pr){
        try{
            $sql = "INSERT INTO `produtos`(`nome`, `descricao`, `valor`) VALUES (:nome, :descricao, :valor)";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":nome", $pr->getNome());
            $p->bindValue(":descricao", $pr->getDescricao());
            $p->bindValue(":valor", $pr->getValor());
            return $p->execute();
        } catch(\Exception $e){
            return false;
        }
    }

    public function alterar(Produtos $pr){
        try{
            $sql = "UPDATE `produtos` SET `nome`=:nome, `descricao`=:descricao, `valor`=:valor WHERE codigo = :codigo";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":nome", $pr->getNome());
            $p->bindValue(":descricao", $pr->getDescricao());
            $p->bindValue(":valor", $pr->getValor());
            $p->bindValue(":codigo", $pr->getCodigo());
            return $p->execute();
        } catch(\Exception $e){
            return false;
        }
    }

    public function excluir($codigo){
        try{
            $sql = "DELETE FROM `produtos` WHERE codigo = :codigo";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":codigo", $codigo);
            return $p->execute();
        } catch(\Exception $e){
            return false;
        }
    }

    public function consultar(){
        try{
            $sql = "SELECT * FROM produtos";
            return Conexao ::conectar()->query($sql);
        }catch(\Exception $e){
            return false;
        }
    }

    public function consultarPorCodigo($codigo){
        try{
            $sql = "SELECT * FROM produtos WHERE codigo = :codigo";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":codigo", $codigo);
            $p->execute();
            return $p->fetch();
        } catch(\Exception $e){
            return false;
        }
    }
}