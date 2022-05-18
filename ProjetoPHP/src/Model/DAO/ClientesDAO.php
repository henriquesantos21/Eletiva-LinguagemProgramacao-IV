<?PHP

namespace Aluno\ProjetoPhp\Model\DAO;

use Aluno\ProjetoPhp\Model\Entity\Clientes;

class ClientesDAO{
    public function inserir(Clientes $c){
        try{
            $sql = "INSERT INTO 'clientes'('nome',1email,)";
        } catch(\Exception $e){
            return false; 
        }
    }

    public function alterar(Clientes $c){
        try{
            $sql = "Update 'clientes'('nome',1email,)";
        } catch(\Exception $e){
            return false; 
        }
    }

    public function excluir($id){
        try{
            $sql = "DELETE 'clientes" SET 'nome';
        } catch(\Exception $e){
            return false; 
        }
    }

    public function consultar(){
        try{
            $sql = "";
        } catch(\Exception $e){
            return false; 
        }
    }

    public function consultarPorId($id){
        try{
            $sql = "SELECT * FROM clientes WHERE id = :id";
        } catch(\Exception $e){
            return false; 
        }
    }
}