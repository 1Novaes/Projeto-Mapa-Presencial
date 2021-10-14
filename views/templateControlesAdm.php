<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Controle Administrativo</title>
    <meta charset="UTF-8">
    <!-- FONTES DO GOOGLE -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- MATERILIZE CSS -->
    <link rel="stylesheet" href="assets/css/materialize.min.css">
    <!--CSS PERSONALIZADO-->
    <link rel="stylesheet" href="assets/csshome/estilo.css">
    <style>
        .myDiv {
            border: 1px outset teal;
            border-radius: 15px;
            text-align: center;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class=" teal lighten-4">

    <nav>
        <div class="nav-wrapper teal  darken-4 z-depth-0">
            <ul id="nav-icons-right" class="right ">
                <a href="" class="brand-logo">
                    <img src="assets/img/logomapa.png" classe="responsive-img">
                </a>
                <a href="#" data-target="lado" class="sidenav-trigger hide-on-med-and-down">
                    <i class="material-icons">menu</i>
                </a>

            </ul>
        </div>
    </nav>




    <div class="row">
        <div class="col s6">

            <div class="row">
                <div class="col s6" style="padding-top: 40px;">
                    <a href="#user"><img class="circle" src="assets/img/adm.jpg" style="height: 80px; width: 80px;"></a>
                </div>
                <div class="row">
                    <div class="col s6" style="padding-top: 40px;">
                        <a href="#name"><span class="teal-text name">Usuário</span></a><br>
                        <a href="#email"><span class="teal-text email"><?php echo $_SESSION["UsuEmail"] ?></span></a><br><br>
                        <a class="waves-effect waves-light btn-small" href="#!">Configurar conta</a><br><br>
                        <a class="waves-effect waves-light btn-small" href="index.php">Sair</a>
                    </div>
                </div>
            </div>
            <h3><span class="teal-text">Controle Administrativo</span></h3>
        </div>
        <div class="col s6 hide-on-small-only">
            <img src="assets/img/imgfaetec.jpg" alt="" width="627" height="450">
        </div>
    </div>


    <ul class="sidenav hide-on-small-only " id="lado">
        <li>
            <div class="user-view ">
                <div class="background teal  darken-4">
                    <a href="#user"><img class="circle" src="images/card1.jpg" style="height: 64px; width: 64px;"></a>
                    <a href="#name"><span class="teal-text name">Usuário</span></a>
                    <a href="#email"><span class="teal-text email">usuario@gmail.com</span></a>
                </div>

            </div>
        </li>
        <li><a href="#!"><i class="material-icons">account_circle</i>Configurar Conta</a></li>
        <li>
            <div class="divider"></div>
        </li>
        <li><a class="waves-effect" href="index.php"><i class="material-icons">power_settings_new</i>Sair</a></li>
    </ul>

    <div data-role="content">


    </div>
    <!-- MODAL PARA LOGADO -->
    <ul id="dropdown-action-options2" class="dropdown-content">

        <li>
            <div class="user-view ">
                <div class="background teal  darken-4">
                    <a href="#user"><img class="circle" src="images/card1.jpg" style="height: 64px; width: 64px;"></a>
                    <a href="#name"><span class="teal-text name">Usuário</span></a>
                    <a href="#email"><span class="teal-text email">usuario@gmail.com</span></a>
                </div>

            </div>
        </li>
        <li><a href="#!"><i class="material-icons text-blue-grey darken-1">account_circle</i>Configurar Conta</a></li>
        <li>
            <div class="divider"></div>
        </li>
        <a class="waves-effect " href="index.php"><i class="material-icons">power_settings_new</i>Sair</a>
    </ul>

    <div class="row">
        <div class="myDiv col s2 white">
            <span>
                <a class="collection-item teal-text" href="views/index.php"><i class="material-icons">school</i>Pessoas</a>
            </span>

        </div>
        <div class="myDiv col s2 white">
            <span>
                <a class="collection-item teal-text" href="#!"><i class="material-icons">supervisor_account</i>Responsáveis</a>
            </span>

        </div>
        <div class="myDiv col s2 white">
            <span>
                <a class="collection-item teal-text" href="views/TemplateAluno.php"><i class="material-icons">face</i>Alunos</a>
            </span>

        </div>
        <div class="myDiv col s2 white">
            <span>
                <a class="collection-item teal-text" href="views/TemplateTurmas.php"><i class="material-icons">recent_actors</i>Turmas</a>
            </span>

        </div>
        <div class="myDiv col s2 white">
            <span>
                <a class="collection-item teal-text" href="views/TemplateHorarios.php"><i class="material-icons">import_contacts</i>Horários</a>
            </span>

        </div>
        <div class="myDiv col s2 white">
            <span>
                <a class="collection-item teal-text" href="index.php?rota=CUsuario&acao=mostrar"><i class="material-icons">face</i>Usuários</a>
            </span>

        </div>
    </div>
    <div class="row">
        <div class="myDiv col s2 white">
            <span>
                <a class="collection-item teal-text" href="views/TemplateRestricoes.php"><i class="material-icons">pan_tool</i>Restrições</a>
            </span>

        </div>
        <div class="myDiv col s2 white">
            <span>
                <a class="collection-item teal-text" href="views/TemplateAvisos.php"><i class="material-icons">notifications</i>Avisos</a>
            </span>

        </div>
        <div class="myDiv col s2 white">
            <span>
                <a class="collection-item teal-text" href="#!"><i class="material-icons">person_pin_circle</i>Mapa Presencial</a>
            </span>
        </div>

        <div class="myDiv col s2">
            <span>
                <a class="collection-item teal-text" href="#!"><i class="material-icons">person_pin_circle</i>proximo c1</a>
            </span>
        </div>
        <div class="myDiv col s2">
            <span>
                <a class="collection-item teal-text" href="#!"><i class="material-icons">person_pin_circle</i>proximo c2</a>
            </span>

        </div>
        <div class="myDiv col s2">
            <span>
                <a class="collection-item teal-text" href="#!"><i class="material-icons">person_pin_circle</i>proximo c3</a>
            </span>

        </div>
    </div>

</body>

<!-- JQUERY JS -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- MATARIALIZE JS -->
<script src="assets/js/materialize.min.js"></script>
<script>
    $(document).ready(function() {

        M.AutoInit();
    });
</script>

</html>