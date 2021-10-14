<?php 
 
class Pessoa
{
   private $cpf; 
   private $nome; 
   private $sexo;
   private $nascimento;
   private $tel1;
   private $tel2;
   private $endereco;
   private $necessidade;
//set e get
   public function setCpf($cpf) 
   { 
     $this->cpf = $cpf; 
   } 
   public function getCpf() 
   { 
     return $this->cpf; 
   }
//set e get
   public function setNome($nome) 
   { 
     $this->nome = $nome; 
   } 
   public function getNome() 
   { 
     return $this->nome; 
   }
//set e get   
   public function setSexo($sexo) 
   { 
     $this->sexo=$sexo; 
   } 
   public function getSexo() 
   { 
     return $this->sexo; 
   }
//set e get
   public function setNascimento($nascimento) 
   { 
     $this->nascimento=$nascimento; 
   } 
   public function getNascimento() 
   { 
     return $this->nascimento; 
   }
//set e get
    public function setTel1($tel1) 
   { 
     $this->tel1=$tel1; 
   } 
   public function getTel1() 
   { 
     return $this->tel1; 
   }
//set e get
   public function setTel2($tel2) 
   { 
     $this->tel2=$tel2; 
   } 
   public function getTel2() 
   { 
     return $this->tel2; 
   }
//set e get
    public function setEnderceco($endereco) 
   { 
     $this->endereco=$endereco; 
   } 
   public function getEndereco() 
   { 
     return $this->endereco; 
   }
//set e get
   public function setNecessidade($necessidade) 
   { 
     $this->necessidade=$necessidade; 
   } 
   public function getNecessidade() 
   { 
     return $this->necessidade; 
   }
}