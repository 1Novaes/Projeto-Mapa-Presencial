<?PHP
// Start the session
session_start();

//rotas - Todos os arquivos necessários são inseridos através do Require
 require "config.php"; 
 require "helpers/banco.php"; 

 
 // instanciamos os objetos da camada Models
 require "models/Usuario.php";
 require "models/RepositorioUsuarios.php";



// O roteamento é feito utilizando duas informações: O Controller responsável pela requisição e a requisição
// A variável responsável pelo primeira informação e $rota.
 $rota="Vhome"; 

 // A variável responsável pelo segunda informação e $acao.
 $acao="";
 
 //
 $erros_validacao = [];

// Iniciamos as variáveis
 $repositorio_usuarios = new RepositorioUsuarios($pdo);
 $usuario = new Usuario();
 
 //Checa se uma chave ou índice existe em um array - 
 if (array_key_exists('rota', $_GET))
	 {$rota = $_GET['rota'];}
  if (array_key_exists('acao', $_GET))
    { $acao = $_GET['acao'];}
    // var_dump($_POST['email']);
// Recebe um valor como parâmetro($rota) e verifica se ele atende alguma das condições especificadas vhome ou outra qualquer.
switch ($rota) {
  case "Vhome":
    require "views/templateHome.php"; //
    break;
  case "Vlogin":
     require  "views/templateLogin.php";
    break;
  case "CUsuario":
      if ($acao=="buscar")
      {require "controllers/ControllerUsuarios.php";
	    buscarUsuario($repositorio_usuarios,$_POST['email'],md5($_POST['senha']));}
      if ($acao=="Vcadastrar")
      {require "views/TemplateUsuarios.php";}
      if ($acao=="cadastrar")
      {require "controllers/ControllerUsuarios.php";
        salvar($repositorio_usuarios,$usuario);
       } 
      if ($acao == "mostrar") {
        require "views/TemplateControlesAdm.php";
        }
       break;

    case "CTurma":
      if ($acao=="mostrar")
      {require "views/TemplateControlesAdm.php";
      break; 
    }
    case "CTarefa":
      if ($acao=="salvar")
      {require "controllers/ControllerUsuarios.php";
      break;
    }
     
  default:
    require "controllers/404.php";
}
