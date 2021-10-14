<?php 
 
class RepositorioUsuarios 
{ 
    private $pdo; 

    public function __construct(PDO $pdo) 
    { 
        $this->pdo = $pdo; 
    } 

    public function buscar_usuario($usu_email,$usu_senha) 
    { 
     $sqlBusca = "SELECT * FROM tb_usuario WHERE usu_email =:email and usu_senha =:senha"; 
     $query = $this->pdo->prepare($sqlBusca); 
     $query->execute([ 
           'email' => strip_tags($usu_email),
           'senha' => strip_tags($usu_senha),      	   
       ]);
	    
       $usuario = $query -> fetchObject('Usuario');
       var_dump($usuario);
       return $usuario;	   
    }


    
    public function salvar(Usuario $usuario) 
    { 
        $sqlGravar = " 
            INSERT INTO tb_usuario 
            (email,tipo,senha,foto,ativo) 
            VALUES 
            (:email, :tipo, :senha, :foto, :ativo) 
        "; 
        $query = $this->pdo->prepare($sqlGravar); 
        $query->execute([
             
            'usu_email' => strip_tags($usuario->getEmail()),
            'usu_tipo' => strip_tags($usuario->getTipo()), 
            'usu_senha' => strip_tags($usuario->getSenha()),
            'usu_foto' => strip_tags($usuario->getFoto()),
            'usu_ativo' => strip_tags($usuario->getAtivo()),
             
        ]); 
	var_dump($sqlGravar);
    } /**/	
}
    