<!DOCTYPE html>
<html lang="en">

<head>
<?php
$filterEffect = (isset($_GET['filterEffect'])) ? $_GET['filterEffect'] : 'popup';
$hoverDirection = (isset($_GET['hoverDirection'])) ? (bool)$_GET['hoverDirection'] : true;
$hoverInverse = (isset($_GET['hoverInverse'])) ? (bool)$_GET['hoverInverse'] : false;
$hoverDelay = (isset($_GET['hoverDelay'])) ? intval($_GET['hoverDelay']) : 0;
$expandingSpeed = (isset($_GET['expandingSpeed'])) ? intval($_GET['expandingSpeed']) : 500;
?>
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
    

</head>

<body>
    <div id="header-contact" class="basic-background-color">
        <div class="nav-wrapper container text-white text-align-right">
            <i class="x-small material-icons center-vertical" style="width: 2rem;">email</i>
            <i class="material-text center-vertical text-italic" style="margin-top:5px; font-size:12px">info@inkrea.pl</i>
            <i class="x-small material-icons center-vertical" style="width: 2rem;">phone</i>
            <i class="material-text center-vertical text-italic" style="margin-top:5px; font-size:12px; margin-right:15px;">697 99 44 09</i>
        </div>
    </div>
    <nav class="basic-background-color no-shadow" role="navigation">

        <div class="nav-wrapper container">
            <a href="#" class="brand-logo"><img class="logo-img" src="img/logo.png" /></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#" onclick="$('#onas').animatescroll();">O nas</a></li>
                <li><a href="#" onclick="$('#onas').animatescroll();">Oferta</a></li>
                <li><a href="#" onclick="$('#onas').animatescroll();">Realizacje</a></li>
                <li><a href="#" onclick="$('#onas').animatescroll();">Blog</a></li>
                <li><a href="#" onclick="$('#onas').animatescroll();">Kontakt</a></li>
            </ul>

            <ul id="nav-mobile" class="side-nav white-hover">
                <li><a href="#onas" onclick="$('#onas').animatescroll();">O nas</a></li>
                <li><a href="#" onclick="$('#onas').animatescroll();">Oferta</a></li>
                <li><a href="#" onclick="$('#onas').animatescroll();">Realizacje</a></li>
                <li><a href="#" onclick="$('#onas').animatescroll();">Blog</a></li>
                <li><a href="#" onclick="$('#onas').animatescroll();">Kontakt</a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>

        </div>
    </nav>

    <div class="container-all white-background-color content-portfolio-container text-color-dark-blue">
        <div class="container">
            <div class="section">

                <div class="col s12" style="line-height: 64px;">
                    <a href="#!" class="breadcrumb text-color-dark-blue">Strona głowna</a>
                    <a href="#!" class="breadcrumb text-color-dark-blue">Realizacje</a>
                </div>

  <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/elastic_grid.min.css" />


<div id="elastic_grid_demo"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/classie.js"></script>
<script type="text/javascript" src="js/elastic_grid.min.js"></script>

                <div class="center center-horizontal tytulbox">
                    <h4 class="line-height-100">Wybrane realizacje</h4>
  <!--                   <p class="light text-centered">Inkrea powstała, aby pomagać przedsiębiorcom osiągać większe zyski wykorzystując nowoczesne technologie. Tworzymy strony i sklepy internetowe, grafiki i materiały promocyjne oraz kampanie e-marketingowe na różnych platformach. Więcej dowiesz się w zakładce oferta. Nie patrzymy na biznes tylko przez pryzmat $$$ - doskonale zdajemy sobie sprawę z tego, że każda firma to ludzie. I to właśnie realna pomoc ludziom na partnerskich warunkach, w atmosferze PRAWDY i zaufania jest dla nas największą wartością.</p> -->
                </div>
            </div>
        </div>
    </div>



    <div class="container-all white-background-color text-color-dark-blue">
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col s12 m12">
                        <div class="icon-block">
                            <img src="img/inc_dark.png" class="img-center-horizontal img-offer">
                            <h5 class="center">Skuteczność</h5>
                            <p class="light text-centered">Dzięki kompleksowym rozwiązaniom i szerokiej wiedzy z zakresu marketingu jesteśmy w stanie identyfikować i wdrażać takie kanały komunikacji, które gwarantują jak najlepsze możliwe efekty w perspektywie długofalowej. Skuteczność jest zawsze najważniejsza w procesie dobierania odpowiednich narzędzi marketingowych. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-all content-portfolio-container text-white">
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col s12 m12">
                        <div class="icon-block">
                            <img src="img/icon.png" class="img-center-horizontal img-offer">
                            <h5 class="center">Pasja</h5>
                            <p class="light text-centered">Każdy dzień naszej pracy przebiega z entuzjazmem i pełną radością. Nasz zespół to osoby młode i kreatywne. Zawsze mamy energię do stawiania czoła nowym wyzwaniom. Ciągły rozwój firmy jak i całego zespołu, wynika przede wszystkim z realizownia naszych pasji i chęci pomocy innym.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div id="elastic_grid"></div>



    <div class="container-all background-contact-short text-white">
        <div class="container ">
            <div class="section background-phone-image ">

                <div class="row mgrow">
                    <div class="col s12 m6">
                        <div class="card background-transparent no-shadow">
                            <div class="card-content no-padding-all center">
                                <span class="span-big">Zostaw kontakt!</span>
                                <span class="span-small">Oddzwonimy do Ciebie.</span>
                            </div>
                            <div class="card-content no-padding-all center ">

                                <div id="content-contact-short-form">
                                    <div class="row">
                                        <div class="col s12 m6">
                                            <input name="contact-short-phone" id="contact-short-number" class="phone-input" value="" placeholder="numer telefonu" type="text">
                                        </div>
                                        <div class="col s12 m6">
                                            <input class="btn btn-large waves-effect waves-light white-background-color content-contact-short-form no-margin-all btn-margin no-shadow" value="Wyślij" name="submit" style="margin-left: 45px;" type="submit">
                                        </div>
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
                                <span class="span-small">Zadzwoń teraz!</span>
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
    <script type="text/javascript">
    $(function(){
        $("#elastic_grid").elastic_grid({
            'filterEffect': '<?php echo $filterEffect;?>', // moveup, scaleup, fallperspective, fly, flip, helix , popup
            'hoverDirection': '<?php echo $hoverDirection;?>',
            'hoverDelay': <?php echo $hoverDelay;?>,
            'hoverInverse': '<?php echo $hoverInverse;?>',
            'showAllText' : 'All',
            'expandingSpeed': <?php echo $expandingSpeed;?>,
            'expandingHeight': 500,
            'items' :
            [
                {
                    'title'         : 'Azuki uzuki',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['images/small/1.jpg', 'images/small/2.jpg', 'images/small/3.jpg', 'images/small/10.jpg', 'images/small/11.jpg'],
                    'large'         : ['images/large/1.jpg', 'images/large/2.jpg', 'images/large/3.jpg', 'images/large/10.jpg', 'images/large/11.jpg'],
              
                    'tags'          : ['Grafika']
                },
                {
                    'title'         : 'Swiss chard pumpkin',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['images/small/4.jpg', 'images/small/5.jpg', 'images/small/6.jpg', 'images/small/7.jpg'],
                    'large'         : ['images/large/4.jpg', 'images/large/5.jpg', 'images/large/6.jpg', 'images/large/7.jpg'],
                    
                    'tags'          : ['E-sklepy i Strony WWW']
                },
                {
                    'title'         : 'Spinach winter purslane',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['images/small/15.jpg','images/small/8.jpg', 'images/small/9.jpg', 'images/small/10.jpg'],
                    'large'         : ['images/large/15.jpg','images/large/8.jpg', 'images/large/9.jpg', 'images/large/10.jpg'],
                    
                    'tags'          : ['Grafika', 'E-sklepy i Strony WWW']
                },
                {
                    'title'         : 'Aubergine napa cabbage',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['images/small/12.jpg', 'images/small/13.jpg', 'images/small/14.jpg', 'images/small/15.jpg', 'images/small/16.jpg'],
                    'large'         : ['images/large/12.jpg', 'images/large/13.jpg', 'images/large/14.jpg', 'images/large/15.jpg', 'images/large/16.jpg'],
                    
                    'tags'          : ['Grafika']
                },
                {
                    'title'         : 'Bbunya chard pumpkin',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['images/small/17.jpg', 'images/small/18.jpg', 'images/small/19.jpg', 'images/small/20.jpg'],
                    'large'         : ['images/large/17.jpg', 'images/large/18.jpg', 'images/large/19.jpg', 'images/large/20.jpg'],
                    
                    'tags'          : ['E-sklepy i Strony WWW']
                },
                {
                    'title'         : 'Soko coriander sweet',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['images/small/13.jpg','images/small/15.jpg', 'images/small/11.jpg', 'images/small/10.jpg'],
                    'large'         : ['images/large/13.jpg','images/large/15.jpg', 'images/large/11.jpg', 'images/large/10.jpg'],
                    
                    'tags'          : ['E-marketing']
                },
                {
                    'title'         : 'Plantain aubergine',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['images/small/7.jpg','images/small/8.jpg', 'images/small/9.jpg', 'images/small/10.jpg'],
                    'large'         : ['images/large/7.jpg','images/large/8.jpg', 'images/large/9.jpg', 'images/large/10.jpg'],
                    
                    'tags'          : ['Grafika']
                },
                {
                    'title'         : 'Maize plantain',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['images/small/16.jpg', 'images/small/13.jpg', 'images/small/14.jpg', 'images/small/15.jpg', 'images/small/16.jpg'],
                    'large'         : ['images/large/16.jpg', 'images/large/13.jpg', 'images/large/14.jpg', 'images/large/15.jpg', 'images/large/16.jpg'],
                    
                    'tags'          : ['E-marketing']
                },
                {
                    'title'         : 'Swiss bunya nuts',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['images/small/18.jpg', 'images/small/18.jpg', 'images/small/19.jpg', 'images/small/20.jpg'],
                    'large'         : ['images/large/18.jpg', 'images/large/18.jpg', 'images/large/19.jpg', 'images/large/20.jpg'],
                    
                    'tags'          : ['E-sklepy i Strony WWW']
                },
                {
                    'title'         : 'Winter chard pumpkin bunya',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['images/small/11.jpg','images/small/15.jpg', 'images/small/11.jpg', 'images/small/10.jpg'],
                    'large'         : ['images/large/11.jpg','images/large/15.jpg', 'images/large/11.jpg', 'images/large/10.jpg'],
                    
                    'tags'          : ['Grafika']
                },
                {
                    'title'         : 'Napa cabbage soko',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['images/small/3.jpg','images/small/15.jpg', 'images/small/11.jpg', 'images/small/10.jpg'],
                    'large'         : ['images/large/3.jpg','images/large/15.jpg', 'images/large/11.jpg', 'images/large/10.jpg'],
                    
                    'tags'          : ['E-marketing']
                },
                {
                    'title'         : 'Water maize',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['images/small/5.jpg','images/small/8.jpg', 'images/small/9.jpg', 'images/small/10.jpg'],
                    'large'         : ['images/large/5.jpg','images/large/8.jpg', 'images/large/9.jpg', 'images/large/10.jpg'],
                    
                    'tags'          : ['Grafika', 'E-sklepy i Strony WWW']
                },
                {
                    'title'         : 'Bean aubergine',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['images/small/6.jpg', 'images/small/13.jpg', 'images/small/14.jpg', 'images/small/15.jpg', 'images/small/16.jpg'],
                    'large'         : ['images/large/6.jpg', 'images/large/13.jpg', 'images/large/14.jpg', 'images/large/15.jpg', 'images/large/16.jpg'],
                    
                    'tags'          : ['E-marketing']
                },
                {
                    'title'         : 'Chard napa',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['images/small/8.jpg', 'images/small/18.jpg', 'images/small/19.jpg', 'images/small/20.jpg'],
                    'large'         : ['images/large/8.jpg', 'images/large/18.jpg', 'images/large/19.jpg', 'images/large/20.jpg'],
                    
                    'tags'          : ['E-sklepy i Strony WWW']
                },
                {
                    'title'         : 'Purslane sweet',
                    'description'   : 'Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage.',
                    'thumbnail'     : ['images/small/9.jpg','images/small/15.jpg', 'images/small/11.jpg', 'images/small/10.jpg'],
                    'large'         : ['images/large/9.jpg','images/large/15.jpg', 'images/large/11.jpg', 'images/large/10.jpg'],
                    
                    'tags'          : ['E-marketing', 'E-sklepy i Strony WWW']
                }

            ]
        });
    });
</script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
    <script src='https://maps.googleapis.com/maps/api/js?key=&sensor=false&extension=.js'></script>
    <script src="js/main.js"></script>
</body>

</html>