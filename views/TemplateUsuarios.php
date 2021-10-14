<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Controle de Usuários</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css" media="screen,projection" />
    <!-- JQuery -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- Materialize JS -->
    <script src="assets/js/materialize.js"></script>
    <!-- FAETEC CSS -->
    <link rel="stylesheet" href="assets/css/estilo.css">
</head>

<body class="teal lighten-4">


    <!--CLASSE crud-container-master CRIADA PARA ABRIGAR TODOS OS ELEMENTOS DA VIEW DE CRUD-->
    <div id="crud-container-master">
        <!--ID crud-row-nav CRIADO PARA ABRIGAR A NAVEGACAO DE CABEÇALHO DA VIEW DE CRUD-->
        <header id="crud-row-nav" class="row">

            <!--NAVBAR TOPO-->

            <nav class="nav-wraper teal  darken-4 z-depth-0">
                <div class="container">
                    <a href="" class="brand-logo">
                        <img src="assets/img/logomapa.png" classe="responsive-img">
                        Controle de Usuários
                    </a>
                    <a href="" class="sidenav-trigger" data-target="sidemenu">
                        <i class="material-icons">menu</i>
                    </a>
                    <ul class="right hide-on-med-and-down">
                        <li>
                            <a href="" class="btn-floating teal darken-4 z-depth-0">
                                <i class="material-icons">view_agenda</i>
                            </a>
                        </li>
                        <li>
                            <a href="#modalapps" class="btn-floating teal darken-4 z-depth-0 dropdown-trigger" data-target='dropdownapps'>
                                <i class="material-icons">apps</i>
                            </a>
                        </li>
                        <li>
                            <div class="user-view">
                                <a href="" class="btn-floating teal darken-4 z-depth-0">
                                    <i class="material-icons">account_circle</i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

        </header>
        <!--ID crud-row-content CRIADO PARA ABRIGAR O CONTEÚDO DA VIEW DE CRUD-->
        <!--TERMINANDO NO LIMITE DA VIEW PORT RESPONSIVAMENTE-->
        <div id="crud-row-content" class="row">
            <!--COLUNA PARA ABRIGAR A LISTA DE RESULTADOS E INFORMAÇÕES DE FILTROS-->
            <!--CLASSE crud-col CRIADA PARA ADICIONAR BARRA DE ROLAGEM À COLUNA QUANDO NECESSÁRIO-->
            <div id="crud-search-view" class="col s12 m6 l4 crud-col teal darken-4  ">
                <!--hide-on-small-only-->
                <!--CONTEUDOS DA PESQUISA-->
                <!--PESQUISA-->
                <!--ÁREA PARA FILTROS-->
                <div id="query-crud">



                    <!--NAV COM SEARCH-->
                    <nav id="search-form" class="">
                        <div class="nav-wrapper teal lighten-5">
                            <form>
                                <div id="" class="input-field">
                                    <input id="search" type="search" name="search" placeholder="Título" required>
                                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                    <i class="material-icons">close</i>
                                </div>

                            </form>
                        </div>
                    </nav>

                    <!--DIV PARA MOSTRARA OS FILTROS APLICADOS-->
                    <div id="filters-view" class="filters">
                        <label class="white-text hide-on-small-only">Filtros:</label>
                        <div id="filter-large" class="filters-content hide-on-small-only">
                            <div class="filter">
                                <div class="attrib">
                                    ativo:
                                </div>
                                <div class="attrib-value">
                                    sim
                                </div>
                            </div>
                            <div class="filter">
                                <div class="attrib">
                                    Publicação:
                                </div>
                                <div class="attrib-value">
                                    20/12/2019 - 20/12/2019
                                </div>
                            </div>
                        </div>
                        <span class="badge1 hide-on-med-and-up">9</span>

                        <a href="#filters-form" id="more-filter" class="icon-action modal-trigger"><i class="material-icons white-text">more_vert</i></a>
                    </div>

                </div>

                <!--LISTA DE RESULTADOS-->
                <!--ÁREA PARA RESULTADOS-->
                <div id="results-view">
                    <ul id="results" class="collection">

                        <li id="l1" class="collection-item avatar" style="cursor:pointer">
                            <a href="javascript:selectItemListQuery('#l1')">
                                <img src="images/card1.jpg" alt="" class="circle">
                                <div class="title truncate">titulo grande para testar a responsividade dos titulos</div>
                                <p>lalal la la la lalalalal lal alalalalala lalalalalal lal la lal la lal a
                                </p>
                            </a>
                            <a href="#!" class="secondary-content">
                                <div class="switch">
                                    <label>
                                        <input type="checkbox">
                                        <span class="lever"></span>
                                    </label>
                                </div>
                            </a>
                            <a href="#!" class="tertiary-content"><i class="material-icons blue-text">edit</i></a>
                        </li>
                        <li id="l2" class="collection-item avatar">
                            <a href="javascript:selectItemListQuery('#l2')">
                                <img src="images/card1.jpg" alt="" class="circle">
                                <div class="title truncate">titulo grande para testar a responsividade dos titulos</div>
                                <p>lalal la la la lalalalal lal alalalalala lalalalalal lal la lal la lal a
                                </p>
                            </a>
                            <a href="#!" class="secondary-content">
                                <div class="switch">
                                    <label>
                                        <input type="checkbox">
                                        <span class="lever"></span>
                                    </label>
                                </div>
                            </a>
                            <a href="#!" class="tertiary-content"><i class="material-icons blue-text">edit</i></a>
                        </li>
                        <li id="l3" class="collection-item avatar">
                            <a href="javascript:selectItemListQuery('#l3')">
                                <img src="images/card1.jpg" alt="" class="circle">
                                <div class="title truncate">titulo grande para testar a responsividade dos titulos</div>
                                <p>lalal la la la lalalalal lal alalalalala lalalalalal lal la lal la lal a
                                </p>
                            </a>
                            <a href="#!" class="secondary-content">
                                <div class="switch">
                                    <label>
                                        <input type="checkbox">
                                        <span class="lever"></span>
                                    </label>
                                </div>
                            </a>
                            <a href="#!" class="tertiary-content"><i class="material-icons blue-text">edit</i></a>
                        </li>




                    </ul>
                    <div class="vspace-1"></div>
                </div>
            </div>

            <!--COLUNA PARA ABRIGAR O CONTEÚDO DO REGISTRO SELECIONADO E AS FUNÇÕES EXPECIFICAS DE CRUD-->


            <div id="crud-data-view" class="col s12 m6 l8  crud-col hide-on-small-only">
                <!--hide-on-small-only-->


                <div id="crud-view">
                    <div id="crud-view-nav">

                        <!--NAVEGAÇÃO SUPERIOR-->

                        <nav class="nav-extended teal darken-3">
                            <div class="nav-wrapper">
                                <div class="container">
                                    <a id="btn-cancel-back" class="btn-floating btn-small teal darken-3 z-depth-0">
                                        <i class="material-icons">arrow_back</i>
                                    </a>
                                    <a id="btn-action-display" class="btn-floating btn-small teal darken-3 z-depth-0">
                                        <i class="material-icons pulse">visibility</i>
                                    </a>
                                    <spam class="pk_attribute">Ver:</spam>
                                    <spam class="pk_value">1002</spam>
                                    <a class='dropdown-trigger right' href='#' data-target='dropdown-action-options'>
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <a id="btn-action-save" class="btn-floating btn-small teal darken-3 z-depth-0 right" style="margin-top: 15px">
                                        <i class="material-icons">check</i>
                                    </a>
                                    <a id="btn-action-delete" class="action-not-allowed btn-floating btn-small teal darken-3 z-depth-0 right hide-on-med-and-down" style="margin-top: 15px">
                                        <i class="material-icons">delete</i>
                                    </a>
                                    <a id="btn-action-edit" class="btn-floating btn-small teal darken-3 z-depth-0 right hide-on-med-and-down" style="margin-top: 15px">
                                        <i class="material-icons">edit</i>
                                    </a>

                                </div>
                            </div>
                            <div class="nav-content ">
                                <!--SÓ UTILIZADO EM CONTROLES COMPLEXOS-->
                                <ul class="tabs tabs-transparent hide">
                                    <li class="tab"><a class="" href="#test1">
                                            <i class="material-icons">visibility</i>
                                        </a></li>
                                    <li class="tab"><a class="active" href="#test2">
                                            <i class="material-icons">edit</i>
                                        </a></li>
                                    <li class="tab disabled"><a href="#test3">
                                            <i class="material-icons">add</i>
                                        </a></li>
                                </ul>
                            </div>
                        </nav>


                    </div>
                    <div id="crud-view-content">
                        <!--CONTEUDO DO REGISTRO-->

                        <div class="row container">
                            <form id="form-data" method="POST" action="index.php?rota=CUsuario&acao=cadastrar">
                                <!--AQUI ENTRA O FORMULARIO-->
                                <fieldset>
                                    <legend>Controle de usuários</legend>
                                    <input type="hidden" name="id" value="" />
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="CPF 11 DIGITOS" id="cpf" type="text" class="validate">
                                            <label for="cpf">CPF</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Email" id="email" type="text" class="validate">
                                            <label for="email">Email</label>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <select>
                                                <option value="" disabled selected>Escolha sua opção</option>
                                                <option value="adm">Administrador</option>
                                                <option value="alu">Aluno</option>
                                                <option value="res">Responsável</option>
                                                <option value="rec">Recepcionista</option>
                                            </select>
                                        </div>
                                        <div class="input-field col s6">
                                            <input id="senha" type="text" class="validate">
                                            <label for="senha">Senha</label>
                                        </div>
                                    </div>

                                    <div class="row file-field input-field">

                                        <div class="btn teal lighten-2">
                                            <span>Foto</span>
                                            <input type="file">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" name="foto">
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="input-field col s1">
                                            <div class="switch">
                                                <label>
                                                    Não
                                                    <input type="checkbox" name="ativo">
                                                    <span class="lever"></span>
                                                    Sim
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </fieldset>
                            </form>
                        </div>

                    </div>
                </div>





            </div>

        </div>
    </div>



    <!--#######################################-->
    <!--    ÁREA PARA MENUS, DROPDOWNS E MODAIS-->
    <!--#######################################-->

    <!-- DROPDOWN APPS -->

    <!-- Dropdown Structure -->
    <div id='dropdownapps' class='dropdown-content'>
        <div class="row container">
            <h5>Apps</h5>
        </div>
        <div class="divider">
            <h5>Apps</h5>
        </div>
        <div class="row container">
            <div class="col s6">
                <a href="" class="center-align btnapp">
                    <img src="icons/location-icon.png" class="logoapp">
                    <p>Mapa Presencial</p>
                </a>
            </div>
            <div class="col s6">
                <a href="" class="center-align btnapp">
                    <img src="icons/heart-icon.png" class="logoapp">
                    <p>Depoimentos</p>
                </a>
            </div>
            <div class="col s6">
                <a href="" class="center-align btnapp">
                    <img src="icons/caution-icon.png" class="logoapp">
                    <p>Ocorrências</p>
                </a>
            </div>
            <div class="col s6">
                <a href="" class="center-align btnapp">
                    <img src="icons/bomb-icon.png" class="logoapp">
                    <p>Boletim Online</p>
                </a>
            </div>

        </div>
    </div>



    <!--MENU MOBILE-->

    <ul id="sidemenu" class="sidenav collapsible">
        <li>
            <div class="user-view">
                <div class="background teal darken-4">

                </div>
                <a href="#user"><img class="circle" src="images/card1.jpg"></a>
                <a href="#name"><span class="white-text name">Usuário</span></a>
                <a href="#email"><span class="white-text email">usuario@gmail.com</span></a>
            </div>
        </li>
        <li><a href="#!"><i class="material-icons">account_circle</i>Configurar Conta</a></li>
        <li>
            <div class="divider"></div>
        </li>
        <li><a class="subheader">Controles</a></li>
        <li><a class="waves-effect" href="#!"><i class="material-icons">account_box</i>Usuários</a></li>
        <li><a class="waves-effect" href="#!"><i class="material-icons">perm_identity</i>Direção</a></li>
        <li><a class="waves-effect" href="#!"><i class="material-icons">school</i>Professores</a></li>
        <li><a class="waves-effect" href="#!"><i class="material-icons">supervisor_account</i>Responsáveis</a></li>
        <li><a class="waves-effect" href="#!"><i class="material-icons">face</i>Alunos</a></li>
        <li><a class="waves-effect" href="#!"><i class="material-icons">recent_actors</i>Turmas</a></li>
        <li><a class="waves-effect" href="#!"><i class="material-icons">import_contacts</i>Disciplinas</a></li>
        <li><a class="waves-effect" href="#!"><i class="material-icons">filter_9</i>Notas</a></li>
        <li><a class="waves-effect" href="#!"><i class="material-icons">feedback</i>Ocorrências</a></li>
        <li><a class="waves-effect" href="#!"><i class="material-icons">notifications</i>Avisos</a></li>
        <li>
            <div class="divider"></div>
        </li>
        <li><a class="subheader">Módulos</a></li>
        <li><a class="waves-effect" href="#!"><i class="material-icons">person_pin_circle</i>Mapa Presencial</a></li>
        <li><a class="waves-effect" href="#!"><i class="material-icons">font_download</i>Boletim Online</a></li>
        <li><a class="waves-effect" href="#!"><i class="material-icons">notification_important</i>Ocorrências</a></li>
        <li><a class="waves-effect" href="#!"><i class="material-icons">favorite</i>Depoimentos</a></li>
        <li>
            <div class="divider"></div>
        </li>
        <li><a class="waves-effect" href="#!"><i class="material-icons">power_settings_new</i>Sair</a></li>
    </ul>


    <!--DADOS DE FILTRO-->
    <!-- MODAL PARA FILTROS -->
    <div id="filters-form" class="modal modal-fixed-footer">
        <!-- bottom-sheet-->

        <div class="modal-content black-text row">
            <div class="col s12 ">
                <h5>Filtros</h5>
            </div>
            <div class="col s12 m3">
                <h6 class="teal-text">Ativa</h6>
            </div>
            <div class="col s12 m9">
                <select name="ativa">
                    <option value="1" selected>Sim</option>
                    <option value="2">Não</option>
                    <option value="3">Ambos</option>
                </select>
            </div>
            <div class="col s12 m3">
                <h6 class="teal-text">Expirada</h6>
            </div>
            <div class="col s12 m9">
                <select name="expirada">
                    <option value="1">Sim</option>
                    <option value="2" selected>Não</option>
                    <option value="3">Ambos</option>
                </select>
            </div>
            <div class="col s12 m3">
                <h6 class="teal-text">Data de Publicação</h6>
            </div>
            <div class="col s12 m9">
                <label class="inline">De: <input type="date" class="" name="data1"></label>
                <!--width:calc(100% - 20px);-->
                <label class="inline">Até: <input type="date" class="" name="data2"></label>
            </div>
        </div>
        <div class="modal-footer ">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat left">Aplicar</a>
            <a href="#!" class="modal-close waves-effect waves-green btn-flat left">Cancelar</a>
        </div>
    </div>


    <!-- Dropdown de açoes crud -->

    <ul id='dropdown-action-options' class='dropdown-content'>
        <li id="dropdown-add"><a href="javascript:addNew()"><i class="material-icons">add</i>Novo</a></li>
        <li id="dropdown-edit"><a href="javascript:edit()"><i class="material-icons">edit</i>Editar</a></li>
        <li id="dropdown-delete" class="link-disabled"><a href="javascript:delete()"><i class="material-icons">delete</i>Excluir</a></li>
        <li class="divider" tabindex="-1"></li>
        <li id="dropdown-cancel"><a href="javascript:cancel()"><i class="material-icons">close</i>Cancelar</a></li>
        <li id="dropdown-save"><a href="javascript:save()"><i class="material-icons">check</i>salvar</a></li>
        <li class="divider" tabindex="-1"></li>
        <li id="dropdown-print"><a href="javascript:print()"><i class="material-icons">print</i>Imprimir</a></li>
        <li class="action-not-allowed"><a href="#!"><i class="material-icons">cloud</i>esconde</a></li>
    </ul>




    <!--MENU FLUTUANTE-->
    <!-- Element Showed -->
    <div id="action-add" class="fixed-action-btn click-to-toggle">
        <a id="add" class="waves-effect waves-light btn-large btn-floating cor5">
            <i class="material-icons">add</i>
        </a>
    </div>
    <!-- Tap Target Structure -->
    <div class="tap-target teal lighten-2" data-target="add">
        <div class="tap-target-content teal">
            <h5>Adicionar</h5>
            <p>Aqui você pode inserir nova notícia.</p>
        </div>
    </div>

    
    <!-- JQUERY JS -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- MATARIALIZE JS -->
    <script src="assets/js/materialize.min.js"></script>
    
    <script>
        $(document).ready(function() {

            $('.sidenav').sidenav();
            $('.datepicker').datepicker({
                format: 'dd/mm/yyyy',
                i18n: {
                    today: 'Hoje',
                    clear: 'Limpar',
                    done: 'Ok',
                    cancel: 'cancelar',
                    nextMonth: 'Próximo mês',
                    previousMonth: 'Mês anterior',
                    weekdaysAbbrev: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S'],
                    weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'],
                    weekdays: ['Domingo', 'Segunda-Feira', 'Terça-Feira', 'Quarta-Feira', 'Quinta-Feira', 'Sexta-Feira', 'Sábado'],
                    monthsShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
                    months: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro']
                }
            });
            $('select').formSelect();
            $('.tabs').tabs();
            $('.slider').slider();
            $('.dropdown-trigger').dropdown();
            //$('.scrollspy').scrollSpy();
            $('.tap-target').tapTarget();
            $('.collapsible').collapsible();
            $('.modal').modal();
            $('.fixed-action-btn').floatingActionButton({
                direction: 'top',
                hoverEnabled: false
            });
            if (window.localStorage.getItem('existe') != "a") {
                //só abre a ajuda tap se for a primeira vez que abre a página.
                window.localStorage.setItem('existe', 'a');
                $('.tap-target').tapTarget('open');
            }
        });

        $('.chips').chips();




        $(window).scroll(function() {
            /*
            if ($(this).scrollTop() > 10) {
                $('.navbar-fixed').fadeOut();
            }
            else {
                $('.navbar-fixed').fadeIn();
            }
            */
        });

        //FUNÇÃO VALIDAR SE ARQUIVO É IMAGEM
        function isImage(input) {
            var extPermitidas = ['jpg', 'png', 'jpeg'];
            var extArquivo = input.value.split('.').pop();

            if (typeof extPermitidas.find(function(ext) {
                    return extArquivo == ext;
                }) == 'undefined') {
                return false;
            } else {
                return true;
            }
        }

        //FUNÇÃO PRE-VISUALIZAR IMAGEM
        function previewImg(input, image) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $(image).attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        //FUNÇÃO HABILITAR E DESASBILITAR CAMPOS
        function enabledFields(flag) {
            $value = 'hidden';

            $('#form-data').find('input').prop('disabled', !flag);
            $('#form-data').find('select').prop('disabled', !flag);
            $('#form-data').find('textarea').prop('disabled', !flag);

            if (flag) {
                value = 'visible';
            }
            $('#form-data').find('a').css('visibility', value);
        }
        //FUNÇÃO ATIVAR E DESATIVAR BOTOES PARA EDIÇÃO/ADIÇÃO
        function enabledEdit(flag) {
            if (flag) {
                //ATIVAR
                $('#btn-cancel-back').find('i').html('clear');
                $('#btn-action-edit').addClass("link-disabled");
                $('#btn-action-save').removeClass("link-disabled");
                $('#btn-action-delete').removeClass("link-disabled");

                $('#dropdown-add').addClass("link-disabled");
                $('#dropdown-edit').addClass("link-disabled");
                $('#dropdown-delete').addClass("link-disabled");
                $('#dropdown-print').addClass("link-disabled");
                $('#dropdown-cancel').removeClass("link-disabled");
                $('#dropdown-save').removeClass("link-disabled");

                $('#add').css('visibility', 'hidden');
                //$('#add').addClass("action-not-allowed");

            } else {
                $('#btn-cancel-back').find('i').html('arrow_back');
                $('#btn-action-edit').removeClass("link-disabled");
                $('#btn-action-save').addClass("link-disabled");
                $('#btn-action-delete').addClass("link-disabled");

                $('#dropdown-add').removeClass("link-disabled");
                $('#dropdown-edit').removeClass("link-disabled");
                $('#dropdown-delete').removeClass("link-disabled");
                $('#dropdown-print').removeClass("link-disabled");
                $('#dropdown-cancel').addClass("link-disabled");
                $('#dropdown-save').addClass("link-disabled");

                $('#add').css('visibility', 'visible');
                //$('#add').removeClass("action-not-allowed");
            }
            enabledFields(flag);
        }

        //FUNÇÃO PARA LIMPAR OS CAMPOS
        function clearFields() {

            $('#form-data input,textarea,select').val("");
            $('#form-data').find('.switch').find("[type='checkbox']").prop('checked', true); //ativar os switch
            //$('#form-data').find('.switch').find("[type='checkbox']").prop('checked', false); //desativar os switch

        }

        //FUNÇÃO PARA RESETAR FORMULARIO
        function resetForm(form) {
            $(form).each(function() {
                this.reset();
            });
        }
        //FUNÇÃO VISUALIZAR DADOS
        function view(item) {
            $("input[name='titulo'").val('lalalal').css('text-indent', '50px');
            $("input[name='titulo'").trigger("focus");




        }
        //FUNÇÃO NOVO
        function addNew() {
            showDivQueryForSmall(false);
            enabledEdit(true);
            $('#btn-action-display').find('i').html('add');

            clearFields();
            $('.pk_attribute').html("Adicionar ");
            $('.pk_value').html("");
            $('#form-data').find("input:text:eq(0):visible").focus();

        }
        //FUNÇÃO CANCELAR
        function cancel() {
            showDivQueryForSmall(false);
            enabledEdit(false);
            $('#btn-action-display').find('i').html('visibility');
            resetForm('#form-data');
            $('.pk_attribute').html("Ver ");
            $('.pk_value').html("");
        }
        //FUNÇÃO EDITAR
        function edit($pk) {
            showDivQueryForSmall(false);
            enabledEdit(true);
            $('#btn-action-display').find('i').html('edit');
            $('.pk_attribute').html("Editar ");
            $('.pk_value').html($pk);
            $("input:text:eq(0):visible").focus();
        }

        //FUNÇÃO SALVAR
        function save() {
            //validar e enviar (FAZER)
            showDivQueryForSmall(false);
            enabledEdit(false);
            $('#btn-action-display').find('i').html('visibility');

            resetForm('#form-data');
            $('.pk_attribute').html("Ver");
            $('.pk_value').html("");


        }
        //FUNÇÃO PARA EXIBIR / ESCONDER A PESQUISA OU O FORMULARIO
        function showDivQueryForSmall($flag) {
            if (!$flag) {
                $('#crud-search-view').addClass("hide-on-small-only");
                $('#crud-data-view').removeClass("hide-on-small-only");
            } else {
                $('#crud-search-view').removeClass("hide-on-small-only");
                $('#crud-data-view').addClass("hide-on-small-only");
            }

        }
        //FUNÇÃO LIMPAR ATIVO DA LISTA DE RESULTADOS
        function clearListActive() {
            $('.collection-item.avatar').removeClass('active');
        }

        //FUNÇÃO AO SELECIONAR UM ITEM DO RESULTADO
        function selectItemListQuery(item) {
            clearListActive();
            $(item).addClass('active');
            view(item);
        }


        //EVENTOS DE INTERFACE



        //Evento change da input file.
        $("#input-file-photo").change(function() {
            if (isImage(this)) {
                previewImg(this, '#img-tag');
            } else {
                M.toast({
                    html: 'Arquivo de Imagem Inválido!'
                });
                // M.toast({html: 'Arquivo de Imagem Inválido!',classes: 'rounded red'});
            }
        });
        $("#action-add").click(function() {
            addNew();

        });
        $("#btn-action-save").click(function() {
            save();
        });
        $("#btn-action-edit").click(function() {
            edit("");
        });
        $("#btn-cancel-back").click(function() {
            if ($(this).find('i').html() == "clear") {
                cancel();

            } else {
                showDivQueryForSmall(true);
                clearFields();
                clearListActive();
            }
        });
        $("#btn-action-edit").click(function() {
            edit("");
        });




        /*
        $('.collection-item.avatar').click(function(){
            clearListActive();
            $(this).addClass('active');
        })
        
        */
    </script>



    
</body>

</html>