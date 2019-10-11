<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Tik-Tutz | A plataforma dos seus eventos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Está procurando por eventos? Está na plataforma certa! Aqui se encontra todos os eventos do Brasil. Desde shows, reuniões e até palestras." />
        <meta name="author" content="Dariclei Anjos" />
        <link rel="icon" href="assets/img/favicon.ico" />
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />  
        <link href="assets/css/carousel.css" rel="stylesheet" type="text/css" />
        <link href="assets/sidebarmenu/sidebar.css" rel="stylesheet" />
        <link href="assets/sidebarmenu/style.css" rel="stylesheet" />
        <link href="assets/owncarousel/dist/assets/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/owncarousel/dist/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet" type="text/css"/>
        <link href="css/newstyle.css" rel="stylesheet" type="text/css"/>
        <style type="text/css">
            .item {
                /*                background: red;*/
                height: auto;
            }

        </style>
    </head>
    <body class="bg-light">

        <div class="wrapper">

<!--            <nav id="sidebar" class="fixed-top">
                <br />
                <br />
                <br />
                <div class="sidebar-header">
                    <h3>Entrar<a id="btn-close-sidebar"><img src="assets/img/erro-white2.png" style="float:right;"/></a></h3>
                </div>



                <ul class="list-unstyled CTAs">
                    <li>
                        <div id="login">

                            <div class="form-group">
                                <input id="login_email" class="form-control d-block w-100 mb-2" type="email" placeholder="E-mail" aria-label="E-mail" />
                            </div>

                            <div class="form-group">
                                <input id="login_senha" class="form-control d-block w-100 mb-2" type="password" placeholder="Senha" aria-label="Senha" />
                            </div>

                            <div class="custom-control custom-checkbox w-100 mb-3">
                                <input id="login_remember" class="" type="checkbox" style="margin-left: -15px;">Manter-se conectado!</input>           

                            </div>
                            <input id="btn_login" class="w-100 mb-3 btn" type="submit" value="Entrar" style="color: #9D07AF; background-color: #fff;" />
                            <input id="btn_login_google" class="w-100 mb-3 btn" type="button" value="Entrar com Google" style="color: #9D07AF; background-color: #fff;" />
                            <input id="btn_login_facebook" class="w-100 mb-3 btn" type="button" value="Entrar com Facebook" style="color: #9D07AF; background-color: #fff;" />



                        </div>

                        <div class="form-group mb-2">
                            <a href="cadastro.aspx">
                                <h6>Não tem conta? Cadastre-se!</h6>
                            </a>
                        </div>


                    </li>
                    <li>
                        <a href="#" class="download">Termos e Condições</a>
                    </li>
                    <li>
                        <a href="#" class="article">Perguntas Frequentes</a>

                    </li>

                </ul>
            </nav>-->

<div class="menu mt-5">
<!--    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Service</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Contact</a></li>
</ul>-->                <br />
                <br />
                <br />

                <div class="sidebar-header">
                    <a id="btn-close-sidebar"><img src="assets/img/erro-violet.png" style="float:right; margin-right: 40px;"/></a>
                </div>



                <ul class="list-unstyled CTAs">
                    <li>
                        <div id="login">
                            
                            <div class="form-group">
                                <h3 style="color:#9D07AF;">Entrar</h3>
                            </div>

                            <div class="form-group">
                                <input id="login_email" class="form-control d-block w-100 mb-2" type="email" placeholder="E-mail" aria-label="E-mail" />
                            </div>

                            <div class="form-group">
                                <input id="login_senha" class="form-control d-block w-100 mb-2" type="password" placeholder="Senha" aria-label="Senha" />
                            </div>

                            <div class="custom-control custom-checkbox w-100 mb-3" style="margin-left: -15px;">
                                <input id="login_remember" class="" type="checkbox" >&nbsp;Manter-se conectado!</input>           

                            </div>
                            <input id="btn_login" class="w-100 mb-3 btn" type="submit" value="Entrar" style="color: #fff; background-color: #9D07AF;" />
                            <input id="btn_login_google" class="w-100 mb-3 btn" type="button" value="Entrar com Google" style="color: #fff; background-color: #9D07AF;" />
                            <input id="btn_login_facebook" class="w-100 mb-3 btn" type="button" value="Entrar com Facebook" style="color: #fff; background-color: #9D07AF;" />



                        </div>

                        <div class="form-group mb-2">
                            <a href="cadastro.aspx">
                                <h6>Não tem conta? Cadastre-se!</h6>
                            </a>
                        </div>


                    </li>


                </ul>
</div>

            <div class="content" >

                <nav class="navbar navbar-light fixed-top  navbar-expand-md bg-light" >

                    <div class="col-3 col-md-2 mr-3 mr-sm-2 ml-2 ml-md-0 d-block d-md-none">
                        <a class="navbar-brand " id="banner_sm" href="#">
                            <img src="assets/img/tiktutz10.png" /></a>
                    </div>

                    <div>
                        <a id="search-sm-btn" class="btn btn-outline-light d-block d-md-none" data-toggle="collapse" href="#collapse_search" role="button" aria-expanded="false" aria-controls="collapse_search">
                            <img src="assets/img/24-search.png" /></a>
                    </div>

                    <div class="col-3 col-md-2 order-first mr-3 mr-md-0">
                        <button type="button" id="sidebarCollapse" class="navbar-brand btn btn-sm btn-dark rounded-circle img-fluid">
                            <span>
                                <img src="assets/img/24-user-white.png"  /></span>
                        </button>
                    </div>

                    <div>
                        <a id="menu-sm-btn" class="btn btn-outline-light d-block d-md-none" data-toggle="collapse" href="#collapse_menu" role="button" aria-expanded="false" aria-controls="collapse_menu">
                            <img src="assets/img/24-menu.png" /></a>
                    </div>

                    <div class="col-12 col-md-10 collapse navbar-collapse" id="navbarCollapse">

                        <ul class="col-md-4 navbar-nav nav nav-tabs ml-md-0 mr-md-0 mr-5 ml-3 ">
                            <li class="nav-item">
                                <a class="nav-link active" href="index.aspx">
                                    <img src="assets/img/24-home-blueviolet.png" />&nbsp;<b><span class="d-block d-md-none">Inicio</span></b><span class="sr-only">(atual)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <img src="assets/img/24-filter.png" />&nbsp;<b><span class="d-block d-md-none">
                                            Filtrar</span></b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <img src="assets/img/24-email.png" />&nbsp;
                                    <b><span class="d-block d-md-none">Contato</span></b></a>
                            </li>
                        </ul>

                        <div class="col-md-4 mx-0 d-none d-md-block ">
                            <a class="navbar-brand " id="banner_md" href="#">
                                <img src="assets/img/tiktutz10.png" /></a>
                        </div>

                        <div class="form-inline col-md-7">
                            <input id="search_top" class="form-control d-none d-md-block" type="search" placeholder="Digite algo sobre o evento..." aria-label="Digite algo sobre o evento..." />
                            <input id="btn_search_top1" class="btn btn-outline-light ml-1 mr-3 mr-md-0 d-none d-md-block " type="button" style="background-image:url('assets/img/24-search.png'); background-repeat:no-repeat; margin-top:2%;" />
                        </div>
                    </div>
                </nav>

                <div class="collapse fixed-top w-100" id="collapse_menu">
                    <div class="card card-body bg-light d-md-none" id="menu-sm">
                        <a style="background-color:#f8f9fa; margin-left:95%; margin-bottom:3%;" data-toggle="collapse" href="#collapse_menu" role="button" aria-expanded="false" aria-controls="collapse_menu"><p class="bg-light" style="text-align:right; margin-top:5px;"><img src="assets/img/erro-violet.png" /></p></a>
                        <ul class="navbar-nav nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="index.aspx">
                                    <b><span class=" d-md-none">Inicio</span></b><span class="sr-only">(atual)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <b><span class=" d-md-none">Filtrar</span></b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">
                                    <b><span class=" d-md-none">Contato</span></b></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="collapse fixed-top w-100" id="collapse_search">
                    <div class="card card-body bg-light d-md-none" id="search-sm">
                        <a style="background-color:#f8f9fa; margin-left:95%;margin-bottom:3%;" data-toggle="collapse" href="#collapse_search" role="button" aria-expanded="false" aria-controls="collapse_search"><img src="assets/img/erro-violet.png" /></a>
                        <div class="form-inline ">
                            <input id="search_top_sm" class="form-control w-100" placeholder="Digite algo sobre o evento..." aria-label="Digite algo sobre o evento..." type="search"/>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        