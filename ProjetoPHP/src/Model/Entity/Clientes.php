<?PHP

namespace Aluno\ProjetoPhp\Model\Entity;

class Cliente{
    private $id;
    private $nome;
    private $email;
    private $idade;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    } 
    
    public function getIDade(){
        return $this->idade;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }
}
