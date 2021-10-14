<?php 
 
class Turma 
{ 
   private $id;
   private $descricao; 
   private $curso; 
   private $modalidade; 
   private $etapa; 
   private $turno;
   //private $usuario;
 
   //public function __construct() 
   //{ 
     
   //} 
 
   public function setId($id) 
    { 
       $this->id = $id; 
    } 
   public function getId() 
    { 
      return $this->id; 
    } 

    public function setDescricao($descricao) 
   { 
     $this->descricao = $descricao; 
   } 
 
   public function getDescricao() 
   { 
     return $this->descricao; 
   } 


   public function setCurso($curso) 
   { 
      $this->curso = $curso; 
   } 
 
   public function getCurso() 
   { 
     return $this->curso; 
   } 
 

   public function setModalidade($modalidade) 
   { 
     $this->modalidade = $modalidade; 
   } 
 
   public function getModalidade() 
   { 
     return $this->modalidade; 
   } 
 


   public function setEtapa($etapa) 
   { 
     $this->etapa = $etapa; 
   } 

   public function getEtapa() 
   { 
      return $this->etapa; 
   } 


   public function setTurno($turno) 
   { 
     $this->turno = $turno; 
   } 
   public function getTurno() 
   { 
     return $this->turno; 
   } 
   
   
   //public function setUsuario(Usuario $usuario){
	   
	  //$this->usuario=$usuario;
   //}
   
   //public function getUsuario(){
	   
	   //return $this->usuario;
   //}
 
   
 
  

} 
