<?php 
 
class Usuario
{
   private $id; 
   private $email; 
   private $tipo;
   private $senha;
   private $foto;
   private $ativo;
   
   //GET E SET ID
   public function setId($id) 
   { 
     $this->id = $id; 
   } 
   public function getId() 
   { 
     return $this->id; 
   }
   
   //GET E SET EMAIL
   public function setEmail($email) 
   { 
     $this->email = $email; 
   } 
   public function getEmail() 
   { 
     return $this->email; 
   }

   //GET E SET TIPO
   public function setTipo($tipo) 
   { 
     $this->tipo=$tipo; 
   } 
   public function getTipo() 
   { 
     return $this->tipo; 
   }

   //GET E SET SENHA
   public function setSenha($senha) 
   { 
     $this->senha = md5($senha);  
   } 
   public function getSenha() 
   { 
     return $this->senha; 
   }

   //GET E SET FOTO
    public function setFoto($foto) 
   { 
     $this->foto=$foto; 
   } 
   public function getFoto() 
   { 
     return $this->foto; 
   }

   //GET E SET ATIVO
    public function setAtivo($ativo) 
   { 
     $this->ativo=$ativo; 
   } 
   public function getAtivo() 
   { 
     return $this->ativo; 
   }
}