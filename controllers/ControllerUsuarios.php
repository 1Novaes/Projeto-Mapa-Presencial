<?php
//Faz a busca no banco 
function buscarUsuario(RepositorioUsuarios $repositorio_usuarios, $usu_email,$usu_senha)
{
 $usuario=$repositorio_usuarios->buscar_usuario($usu_email,$usu_senha);
   
  // var_dump($usuario->getTipo());
 if(!$usuario)
   {echo 'Senha ou email.inválidos';
   require __DIR__ . "/../views/templatehome.php";
    }
   else 
   {  //Se email e seha estiver correto inicia a sessão 
   $_SESSION["UsuId"] =$usuario->getId();
   $_SESSION["UsuEmail"] =$usuario->getEmail();
   // var_dump($usuario->getId());
   if($usuario->getTipo()=="adm")
   header('Location: index.php?rota=CUsuario&acao=mostrar');
   }
   } 

/* function salvar(RepositorioUsuarios $repositorio_usuarios,Usuario $usuario)
{
   /*if($_POST['senha']==$_POST['senha'])

	{
      $usuario->setEmail($_POST['email']);
      $usuario->setTipo($_POST['tipo']);
      $usuario->setSenha($_POST['senha']);
      $usuario->setFoto($_POST['senha']);
      $usuario->setAtivo($_POST['ativo']);
	   // var_dump($usuario->getSenha());
      $repositorio_usuarios->salvar($usuario);
      header('Location: index.php?rota=vhome');
	}
 else{echo 'Senha ou email.inválidos';}	
}*/