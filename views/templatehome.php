<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Mapa Presencial</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONTES DO GOOGLE -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize CSS -->
    <link rel="stylesheet" href="assets/css/materialize.min.css">
    <!--CSS PERSONALIZADO-->
    <link rel="stylesheet" href="assets/csshome/estilo.css">

</head>

<body class=" teal  lighten-4">
    <nav>
        <div class="nav-wrapper  teal  darken-4 z-depth-0">
            <a href="" class="brand-logo">
                <img src="assets/img/logomapa.png" classe="responsive-img">
            </a>
            <a href="#" data-target="lado" class="sidenav-trigger">
                <i class="material-icons">menu</i>
            </a>
            <ul id="nav-icons-right" class="right hide-on-med-and-down">
                <li>
                    <a class="tooltipped" data-position="left" data-tooltip="Sobre" href="sobre.html"><i class="large material-icons">person_pin_circle</i></a>
                </li>
                <li>
                    <a class="tooltipped" data-position="left" data-tooltip="Conheça a Unidade" href="uacv.html"><i class="large material-icons">school</i></a>
                </li>
                <li>
                    <a class="login tooltipped modal-trigger" data-position="left" data-tooltip="Fazer Login" href="#modal1"><i class="large material-icons">account_circle</i></a>
                </li>
            </ul>
        </div>
    </nav>
    <ul class="sidenav " id="lado">
        <li><a class="teal-text" href="index.html"> <i class="teal-text material-icons">home</i>home</a></li>
        <li><a class="teal-text" href="sobre.html"> <i class=" teal-text material-icons">person_pin_circle</i>Sobre</a></li>
        <li><a class="teal-text" href="acv.html"><i class="teal-text material-icons">school</i>Amaury César Vieira</a></li>
        <li>
            <div class="divider teal-text"></div>
        </li>
        <li><a class="modal-trigger teal-text" href="#modal1"><i class="teal-text material-icons">account_circle</i>Login</a></li>
        <li>
            <div class="divider teal-text"></div>
        </li>
    </ul>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="carousel carousel-slider center">
                    <div class="carousel-fixed-item center">
                        <a class="btn waves-effect white grey-text darken-text-2">Mais...</a>
                    </div>
                    <div class="carousel-item  teal  white-text car01-fundo" href="#one!">
                        <h2>Mapa Presencial</h2>

                        <p class="white-text car01-texto">
                            O Mapa Presencial FAETEC tem como objetivo garantir a segurança
                            do aluno e a trasnparência de sua localização para as famílias,
                            nas dependências da escola.
                        </p>
                    </div>
                    <div class="carousel-item amber white-text" href="#two!">
                        <h2>Second Panel</h2>
                        <p class="white-text">This is your second panel</p>
                    </div>
                    <div class="carousel-item  teal  white-text" href="#three!">
                        <h2>Third Panel</h2>
                        <p class="white-text">This is your third panel</p>
                    </div>
                    <div class="carousel-item blue white-text" href="#four!">
                        <h2>Fourth Panel</h2>
                        <p class="white-text">This is your fourth panel</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col s12 m6">
                <div class="card  teal ">
                    <div class="card-content  white-text text-darken-4">
                        <span class="card-title">
                            <i class="small material-icons">person_pin_circle</i>
                            Sobre O Sistema
                        </span>
                        <p>
                            O projeto do mapa presencial tem o principal
                            fundamento controlar a entrada e saída dos
                            alunos na instituição, garantindo controle,
                            segurança dos mesmos e fornecendo melhores
                            informações para seus responsáveis.
                        </p>
                    </div>
                    <div class="card-action">
                        <a href="#">Mais...</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m6">
                <div class="card teal darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">
                            <i class="small material-icons">school</i>
                            Amaury César Vieira
                        </span>
                        <p>
                            A Unidade da FAETEC ETE - Amaury Cesar Vieira
                            entá localiza na Rua 1015, s/n, Volta Grande II,
                            Volta Redonda/RJ. É composta de 4 prédios...
                            e oferece
                            diversos cursos de qualidade para jovens e adultos a população
                            de Volta Redonda.
                        </p>
                    </div>
                    <div class="card-action grey-text">
                        <a href="#">Mais...</a>
                    </div>
                </div>

            </div>


        </div>


    </div>



    <!-- MODAL PARA LOGIN -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <div class="row">
                <form action="index.php?rota=CUsuario&acao=buscar" method="post" class="col s12">
                    <div class="row">
                        <div class="col s12">
                            <h4 class="center-align teal-text text-darken-4">Login</h4>
                        </div>
                        <div class="input-field col s12">
                            <i class="teal-text material-icons prefix">alternate_email</i>
                            <input id="email" name="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="teal-text material-icons prefix">vpn_key</i>
                            <input id="senha" name="senha" type="password" class="validate">
                            <label for="senha">Senha</label>
                        </div>
                        <div class="input-field col s12 right-align">
                            <button class="btn teal waves-effect waves-light" type="reset" name="reset">
                                Limpar
                            </button>
                            <button class="btn  teal darken-3 waves-effect waves-light" type="submit" name="action">
                                Entrar
                            </button>


                        </div>

                    </div>
                </form>
            </div>
        </div>


    </div>



    <!--RODAPÉ-->

    <footer class="page-footer  teal  darken-3">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Desenvolvedores</h5>
                    <p class="grey-text text-lighten-4">
                        Equipe FAETEC 8M
                    </p>
                </div>
                <div class="col l4 offset-l1 s12">
                    <h5 class="white-text">Links</h5>
                    <a href="https://materializecss.com/">
                        <img class="responsive-img logo-link" src="assests/img/logomat.png" alt="">
                    </a>
                    <a href="https://www.mysql.com/">
                        <img class="responsive-img logo-link" src="assests/img/logomysql.png" style="width: 60px;" alt="">
                    </a>
                    <a href="https://www.php.net/">
                        <img class="responsive-img logo-link" src="assests/img/logophp.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-copyright  teal  darken-4">
            <div class="container">
                © 2020 Copyright - FAETEC - Amaury César Vieira / Volta Redonda - Todos os diteiros reservados

            </div>
        </div>
    </footer>

</body>
<!-- JQUERY JS -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- MATARIALIZE JS -->
<script src="assets/js/materialize.min.js"></script>
<script>
    $(document).ready(function() {
        M.AutoInit();
        $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true
        });

    });
</script>

</html>