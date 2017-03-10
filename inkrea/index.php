<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <title>Parallax Template - Materialize</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
    <script type="text/javascript" src="js/jquery.textillate.js"></script>
    <script src="js/animatescroll.min.js"></script>
    <script src="js/mail.js"></script>
    <script src="js/newsletter.js"></script>
    <script src="js/phone.js"></script>
    <script src="js/phone2.js"></script>
    <link href="css/slidertext.css" media="screen" rel="stylesheet" type="text/css"> 
    <script type="text/javascript" src="js/timer.js"></script>
    <script type="text/javascript" src="js/core.js"></script>
    <!-- <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"> -->
</head>


<body>
    <div id="header-contact" class="basic-background-color">
        <div class="nav-wrapper container text-white text-align-right">
            <i class="x-small material-icons center-vertical" style="width: 2rem;">email</i>
            <i class="material-text center-vertical text-italic" style="margin-top:5px; font-size:12px">info@inkrea.pl</i>
            <i class="x-small material-icons center-vertical" style="width: 2rem;">phone</i>
            <i class="material-text center-vertical text-italic" style="margin-top:5px; font-size:12px; margin-right:15px;">697 994 409</i>
        </div>
    </div>
    <nav class="basic-background-color no-shadow" role="navigation">

        <div class="nav-wrapper container">
            <a href="www.inkrea.pl/nowa" class="brand-logo"><img class="logo-img" src="img/logo.png" /></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#" onclick="$('#onas').animatescroll();">O nas</a></li>
                <li><a href="#" onclick="$('#oferta').animatescroll();">Oferta</a></li>
                <li><a href="#" onclick="$('#portfolio').animatescroll();">Realizacje</a></li>
                <li><a href="#" onclick="$('#onas').animatescroll();">Blog</a></li>
                <li><a href="#" onclick="$('#kontakt').animatescroll();">Kontakt</a></li>
            </ul>

            <ul id="nav-mobile" class="side-nav white-hover">
                <li><a href="#onas" onclick="$('#onas').animatescroll();">O nas</a></li>
                <li><a href="#" onclick="$('#oferta').animatescroll();">Oferta</a></li>
                <li><a href="#" onclick="$('#portfolio').animatescroll();">Realizacje</a></li>
                <li><a href="#" onclick="$('#onas').animatescroll();">Blog</a></li>
                <li><a href="#" onclick="$('#kontakt').animatescroll();">Kontakt</a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>

    <div id="index-banner" class="parallax-container slider-container">
        <div class="section">
            <div class="container header-text">
                <br><br><br><br>
                
                <ul id="tabs">
                    <li style="display: none;" class="header center">GRAFIKA</li>
                    <li style="display: none;" class="header center">STRONY WWW</li>
                    <li style="display: none;" class="header center">E-MARKETING</li>
                    <li style="display: list-item;" class="active_tab header center">PRAWDZIWY MARKETING</li>
                </ul>    
                <!-- <h1 class="header center">PRAWDZIWY<br>MARKETING</h1> -->
                <div class="row center">

                </div>
                <div class="row center">
                    <a onclick="$('#onas').animatescroll();" style="display:block">
                        <div id="slider-button">
                            <h1 class="noselect">SPRAWDŹ</h1>
                        </div>
                    </a>
                </div>
                <br><br>
            </div>
        </div>
        <div class="parallax"><img src="img/slider_background.png" alt="Unsplashed background img 1"></div>
    </div>

    <div id="onas" class="container-all white-background-color">
        <div class="row no-margin-bottom">
            <div class="col s12 m6 no-padding-all width-max-992 center-horizontal float-none">

                <div id="content-about-left-title">
                    <h2 class="line-height-100 no-margin-all" style="padding-top:20px">Inkrea</h2>
                </div>
                <div style="width:100%; clear:both;">
                    <div id="content-about-left-text">
                        <p class="light text-about">Inkrea to coś więcej niż agencja interaktywna.<br> Inkrea to zespół ludzi znających się na marketingu i&nbsp;Internecie, a do tego otwartych, pogodnych i&nbsp;optymistycznie nastawionych do otaczającego świata. Inkrea to idea. Idea współpracy - nie&nbsp;konkurencji, idea prawdy - nie manipulacji. </p>
                    </div>
                    <div id="content-about-left-button">
                        <h1>WIĘCEJ</h1>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 no-padding-all">
                <div id="content-about-right">
                    <div class="magic-div">
                        <div id="content-about-right-title" style="position: absolute;">
                            <h2 class="line-height-100 no-margin-all" style="padding-top:20px">Prawda</h2>
                        </div>
                    </div>
                    <img src="img/content_about_background.png">

                </div>
            </div>
        </div>
    </div>

    <div id="oferta" class="parallax-container valign-wrapper">
        <div class="container">
            <div class="row">
                <div class="col s12 center padding-bottom-15">
                    <div class="center-horizontal border-bottom-white title-container-width">
                        <h2 class="line-height-100">Oferta</h2>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="icon-block icon-blockst">
                        <img src="img/icon.png" class="img-center-horizontal img-offer">
                        <h5 class="center">grafika i film</h5>
                        <p class="light text-centered">Jeden obraz wart jest tysiąca słów, a jedno wideo wart tysiąca obrazów. Sprawdź co możemy dla Ciebie zrobić w&nbsp;zakresie skutecznych multimediów.</p>
                        <p class="light text-centered marginedb"><a href="/nowa/grafika.html" class="text-white more">więcej...</a></p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <img src="img/icon.png" class="img-center-horizontal img-offer">
                        <h5 class="center">strony www</h5>
                        <p class="light text-centered">Nieliczni wiedzą jak strona lub sklep internetowy może wznieść biznes na wyżyny. My wiemy i&nbsp;chętnie się tą wiedzą z&nbsp;Tobą podzielimy.</p>
                        <p class="light text-centered marginedb"><a href="/nowa/stronywww.html" class="text-white more">więcej...</a></p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <img src="img/icon.png" class="img-center-horizontal img-offer">
                        <h5 class="center">e-marketing</h5>
                        <p class="light text-centered">Dlaczego Twoja firma ma nie osiągać zwielokrotnionych wyników dzięki wykorzystaniu potencjału e-marketingu? Pomożemy Ci w tym!</p>
                        <p class="light text-centered"><a href="/nowa/emarketing.html" class="text-white more">więcej...</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="parallax">
            <img src="img/tlo.png" alt="Unsplashed background img 1">
        </div>
    </div>

    <div id="portfolio" class="container-all white-background-color content-portfolio-container">
        <div class="container no-pad-bot">
            <div class="section no-pad-bot">
                <div class="center center-horizontal border-bottom-black title-container-width">
                    <h2 class="line-height-100">Realizacje</h2>
                </div>
            </div>
        </div>
        <div id="content-portfolio">
            <div id="content-portfolio-background">
                <img src="img/content_portfolio_background.png" />
            </div>
            <div id="content-portfolio-inner">
                <div id="content-portfolio-button">
                    <h1>ZOBACZ WIĘCEJ</h1>
                </div>
                <div id="content-portfolio-slider">
                    <img class="slide" src="img/portfolio_slider/1.png" alt="" />
                    <img class="slide" src="img/portfolio_slider/2.png" alt="" />
                    <img class="slide" src="img/portfolio_slider/3.png" alt="" />
                    <img class="slide" src="img/portfolio_slider/4.png" alt="" />
                </div>
            </div>
        </div>
    </div>

    <div class="container-all background-recommend text-white">
        <div class="container ">
            <div class="section">

                <div class="row">
                    <div class="col s12 center padding-bottom-15">
                        <div class="center-horizontal border-bottom-white title-container-width">
                            <h2 class="line-height-100">Polecają nas</h2>
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <div class="card background-recommend-inner no-shadow">
                            <div class="card-image">
                                <img src="img/recommend_left.png" class="img-center-horizontal padding-top-20" style="max-width:100px">
                                <!--<span class="card-title">Card Title</span>-->
                            </div>
                            <div class="card-content text-centered">
                                <p class="center">Katarzyna Nowak</p>
                                <p>I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m6">
                        <div class="card background-recommend-inner no-shadow">
                            <div class="card-image">
                                <img src="img/recommend_right.png" class="img-center-horizontal padding-top-20" style="max-width:100px">
                                <!--<span class="card-title">Card Title</span>-->
                            </div>
                            <div class="card-content text-centered">
                                <p class="center">Dariusz Krakowski</p>
                                <p>I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-all background-contact-short text-white">
        <div class="container containerkontakt">
            <div class="section background-phone-image " style="padding-bottom:1rem;">

                <div class="row mgrow">
                    <div class="col s12 m6">
                        <div class="card background-transparent no-shadow">
                            <div class="card-content no-padding-all center">
                                <span class="span-big">Zostaw kontakt!</span>
                                <span class="span-small">Oddzwonimy do Ciebie.</span>
                            </div>
                            <div class="card-content no-padding-all center ">

                                <div id="content-contact-short-form">
                                    <div class="row mgrow">
                                        <form action="php/phone.php" method="POST" name="phoneContact" id="phoneContact">
                                            <div class="col s12 m6">
                                                <input name="phone" id="phone" class="phone-input" value="" placeholder="numer telefonu" type="text">
                                            </div>
                                            <div class="col s12 m6">
                                                <input class="btn btn-large waves-effect waves-light white-background-color content-contact-short-form no-margin-all btn-margin no-shadow" value="Wyślij" name="submit" style="margin-left: 45px;" type="submit">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m6">
                        <div class="card background-transparent no-shadow">
                            <div class="card-content no-padding-all center">
                                <span class="span-big">Masz pytanie?</span>
                                <span class="span-small">Zapytaj naszego doradcę.</span>
                            </div>
                            <div class="card-content no-padding-all center">
                                <span class="span-big-phone">697 994 409</span>
                            </div>
                            <div class="card-content no-padding-all center">
                                <span class="span-small callnow">Zadzwoń teraz!</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="container-all white-background-color">
        <div class="container">
            <div class="section">

                <div class="row" style="padding-bottom:2rem;">
                    <div class="col s12 center padding-bottom-15">
                        <div class="center-horizontal border-bottom-black title-container-width">
                            <h2 class="line-height-100">Zaufali nam</h2>
                        </div>
                    </div>
                    <div class="col s12 m4" style="margin-top:3.5rem;">
                        <div class="card no-padding-all no-shadow">
                            <div class="card-image partimage">
                                <!-- <div class="w3-content w3-section mySlides"> -->
                                <img src="img/content_company_1.png" style="width:100%">
                                <img src="img/content_company_2.png" style="width:100%">
                                <img src="img/content_company_3.png" style="width:100%">
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                     <div class="col s12 m4" style="margin-top:3.5rem;">
                        <div class="card no-padding-all no-shadow">
                            <div class="card-image partimage">
                                <!-- <div class="w3-content w3-section mySlides"> -->
                                <img src="img/content_company_4.png" style="width:100%">
                                <img src="img/content_company_5.png" style="width:100%">
                                <img src="img/content_company_6.png" style="width:100%">
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4" style="margin-top:3.5rem;">
                        <div class="card no-padding-all no-shadow">
                            <div class="card-image partimage">
                                <!-- <div class="w3-content w3-section mySlides"> -->
                                <img src="img/content_company_7.png" style="width:100%">
                                <img src="img/content_company_8.png" style="width:100%">
                                <img src="img/content_company_9.png" style="width:100%">
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>                  
                </div>
            </div>
        </div>
    </div>

    <div class="container-all text-white">
        <div class="container">
            <div class="section no-pad-bot">

                <div class="row">
                    <div class="col s12 center">
                        <div class="center-horizontal border-bottom-white title-container-width">
                            <h2 class="line-height-100">Newsletter</h2>
                        </div>
                        <div class="col s12 centered clearfix">
                            <div class="center-horizontal">

                                <p class="light">Zapisz się na bezpłatny newsletter i dowiaduj się więcej o emarketingowych tipach przygotowanych dla Twojej firmy.<br> Zarejestruj konto już dziś, a prześlemy Ci poradnik „10 przykazań marketingu”.</p>
                            </div>
                            <div class="card-content no-padding-all center margin-bottom-15 ">
                                <div id="content-contact-short-form">
                                <form action="php/newsletter.php" method="POST" name="newsletterContact" id="newsletterContact">
                                    <input name="nEmail" id="nEmail" class="phone-input" value="" placeholder="e-mail" type="text" />
                                    <input class="btn btn-large waves-effect waves-light white-background-color content-contact-short-form no-margin-all btn-margin no-shadow" value="Wyślij" name="submit btn-margin" style="margin-left: 45px;" type="submit" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-all background-contact-short text-white">
        <div class="container containerkontakt">
            <div class="section background-phone-image " style="padding-bottom:1rem;">

                <div class="row mgrow">
                    <div class="col s12 m6">
                        <div class="card background-transparent no-shadow">
                            <div class="card-content no-padding-all center">
                                <span class="span-big">Zostaw kontakt!</span>
                                <span class="span-small">Oddzwonimy do Ciebie.</span>
                            </div>
                            <div class="card-content no-padding-all center ">
                                <div id="content-contact-short-form">
                                    <div class="row mgrow">
                                        <form action="php/phone2.php" method="POST" name="phoneContact2" id="phoneContact2">
                                            <div class="col s12 m6">
                                                <input name="phone2" id="phone2" class="phone-input2" value="" placeholder="numer telefonu" type="text">
                                            </div>
                                            <div class="col s12 m6">
                                                <input class="btn btn-large waves-effect waves-light white-background-color content-contact-short-form no-margin-all btn-margin no-shadow" value="Wyślij" name="submit" style="margin-left: 45px;" type="submit">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m6">
                        <div class="card background-transparent no-shadow">
                            <div class="card-content no-padding-all center">
                                <span class="span-big">Masz pytanie?</span>
                                <span class="span-small">Zapytaj naszego doradcę.</span>
                            </div>
                            <div class="card-content no-padding-all center">
                                <span class="span-big-phone">697 994 409</span>
                            </div>
                            <div class="card-content no-padding-all center">
                                <span class="span-small callnow">Zadzwoń teraz!</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <div id="kontakt" class="container-all white-background-color">
        <div class="container">
            <div class="section">

                <div class="row margin-top-15">
                    <div class="col s12 m12 l6">
                        <div class="card no-padding-all no-shadow">
                            <form action="php/mail.php" method="POST" name="emailContact" id="emailContact" class="col s12">

                                <div class="row color-deepskyblue ">
                                    <div class="col m6 s12 center">
                                        <i class="small material-icons center-vertical" style="width: 3rem;">phone</i>
                                        <i class="material-text center-vertical" style="margin-top:5px; font-size:1.3rem">697 994 409</i>
                                    </div>
                                    <div class="col m6 s12 center">
                                        <i class="small material-icons center-vertical" style="width: 3rem;">email</i>
                                        <i class=" material-text center-vertical" style="margin-top:5px; font-size:1.3rem">info@inkrea.pl</i>
                                    </div>
                                </div>
                                <div class="row color-deepskyblue ">
                                    <div class="col m6 s12 center">
                                        <i class="small material-icons center-vertical" style="width: 3rem;">home</i>
                                        <i class="material-text center-vertical" style="margin-top:5px; font-size:1.3rem">Nadbystrzycka 36A<br>Lublin</i>
                                    </div>
                                    <div class="col m6 s12 center">
                                        <i class="small center-vertical mdi mdi-facebook-box" style="width: 3rem;"></i>
                                        <i class=" material-text center-vertical" style="margin-top:5px; font-size:1.3rem">AgencjaInkrea</i>
                                    </div>
                                </div>
                                <div class="row color-deepskyblue ">
            <!--                         <div class="col m6 s12 center">
                                        <i class="small material-icons center-vertical" style="width: 3rem;"></i>
                                        <i class="material-text center-vertical" style="margin-top:5px; font-size:1.3rem">20-618 Lublin</i>
                                    </div> -->
                                    <div class="col m6 s12">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col m6 s12">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="name" class="validate" type="text" name="name">
                                        <label for="icon_prefix">Imię i nazwisko</label>
                                    </div>
                                    <div class="input-field col m6 s12">
                                        <i class="material-icons prefix">phone</i>
                                        <input id="number" class="validate" type="tel" name="number">
                                        <label for="icon_telephone">Nr telefonu</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col m12 s12">
                                        <i class="material-icons prefix">mail</i>
                                        <input class="validate" type="email" id="email" name="email">
                                        <label for="email" data-error="wrong" data-success="right">Email</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">mode_edit</i>
                                        <textarea id="message" class="materialize-textarea" name="message"></textarea>
                                        <label for="icon_prefix2">Twoja wiadomość</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="centered form-makdroid" style="width:155px;">
                                        <button class="btn waves-effect waves-light background-dark-blue no-shadow" type="submit" name="action">
                                        Wyślij
                                        <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col s12 m12 l6">
                        <div class="card no-padding-all no-shadow">
                            <div id="content-contact-map-wrap" class="centered">
                                <div id="content-contact-map">
                                    <div id="map">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="page-footer no-padding-top">
        <div class="footer-copyright">
            <div class="container text-centered">
                <a href="http://www.facebook.com/AgencjaInkrea/"><i class="small center-vertical mdi mdi-facebook social-footer" style="width: 3rem;"></i></a>
                <a href="http://www.facebook.com/AgencjaInkrea/"><i class="small center-vertical mdi mdi-youtube-play social-footer" style="width: 3rem;"></i></a>
                <p class="no-margin-all"><a href="www.inkrea.pl" class="social-footer">Inkrea - Prawdziwy marketing</a></p>
                <p class="no-margin-all">© 2016 All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!--  Scripts-->
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
    <script src='https://maps.googleapis.com/maps/api/js?key=&sensor=false&extension=.js'></script>
    <script src="js/main.js"></script>

</body>

</html>
