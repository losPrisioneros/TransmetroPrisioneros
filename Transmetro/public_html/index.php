<!DOCTYPE html>
<?PHP
session_start();
?>

<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge ,chrome1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Transmetro</title>

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- css login-->
        <link href="css/styleForm.css" rel="stylesheet"/> 
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/freelancer.css" rel="stylesheet">
    </head>
    <script type="text/javascript"> 
        window.mapColor1 = "#FF0000";
        window.mapColor2 = "#00FF00";
        window.mapColor3 = "#0000FF";
    </script>
    <body id="page-top" class="index" onLoad="setInterval('initMap()', 20000);">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#page-top">TransMetro</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li class="page-scroll">
                            <a href="#portfolio">Mapa</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#about">Administracion</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#contact">Contacto</a>
                        </li><?PHP
                        if (empty($_SESSION["usuario"])) {
                            echo '<li
                        class = "page-scroll">
                        <a href = "login.php">Login</a>
                        
                        
                        </li>';
                        } else {
                            echo '<li
                        class = "page-scroll">
                        <a href = "logout.php">Logout</a>
                        
                        </li>';
                        }
                        ?>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <!-- Header -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <img class="img-responsive" src="img/profile.png" alt="">
                        <div class="intro-text">
                            <span class="skills">Transmetro es un sistema integrado de transporte público masivo cuyo campo de accion es el area metropolitana de bucaramanga, incluyendo sectores de baja circulación.</span>
                            <hr class="star-light">
                            <span class="skills">Contamos con el personal idóneo para la prestación del servicio, brindando satisfacción y seguridad a los pasajeros en cada una de nuestras diferentes rutas.</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <section id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Mapa</h2>
                        <hr class="star-primary">

                        <center> <div>

                                <div id="map" style="width: 500px; height: 500px;"></div>
                                <script>
                                    var k = 0;
                                    var bus1 = 'img/BUS1.png';
                                    var ubicacionBus111 = new Array();
                                    ubicacionBus111[0] = {lat: 7.137102, lng: -73.120316};
                                    ubicacionBus111[1] = {lat: 7.134617, lng: -73.120313};
                                    ubicacionBus111[2] = {lat: 7.130504, lng: -73.119703};
                                    ubicacionBus111[3] = {lat: 7.127949, lng: -73.119356};
                                    ubicacionBus111[4] = {lat: 7.127286, lng: -73.119203};
                                    ubicacionBus111[5] = {lat: 7.122932, lng: -73.117179};
                                    ubicacionBus111[6] = {lat: 7.118873, lng: -73.115625};
                                    ubicacionBus111[7] = {lat: 7.107438, lng: -73.114105};
                                    ubicacionBus111[8] = {lat: 7.107438, lng: -73.114105};
                                    ubicacionBus111[9] = {lat: 7.107438, lng: -73.114105};

                                    var bus2 = 'img/BUS2.png';
                                    var ubicacionBus211 = new Array();
                                    ubicacionBus211[0] = {lat: 7.134479, lng: -73.117695};
                                    ubicacionBus211[1] = {lat: 7.134479, lng: -73.117695};
                                    ubicacionBus211[2] = {lat: 7.130545, lng: -73.112817};
                                    ubicacionBus211[3] = {lat: 7.130545, lng: -73.112817};
                                    ubicacionBus211[4] = {lat: 7.130545, lng: -73.112817};
                                    ubicacionBus211[5] = {lat: 7.130545, lng: -73.112817};
                                    ubicacionBus211[6] = {lat: 7.127956, lng: -73.111854};
                                    ubicacionBus211[7] = {lat: 7.125512, lng: -73.112664};
                                    ubicacionBus211[8] = {lat: 7.106588, lng: -73.109369};
                                    ubicacionBus211[9] = {lat: 7.104044, lng: -73.110563};

                                    var bus3 = 'img/BUS3.png';
                                    var ubicacionBus311 = new Array();

                                    ubicacionBus311[0] = {lat: 7.136582, lng: -73.131607};
                                    ubicacionBus311[1] = {lat: 7.135262, lng: -73.131006};
                                    ubicacionBus311[2] = {lat: 7.123569, lng: -73.128672};
                                    ubicacionBus311[3] = {lat: 7.122682, lng: -73.128525};
                                    ubicacionBus311[4] = {lat: 7.122086, lng: -73.128890};
                                    ubicacionBus311[5] = {lat: 7.121699, lng: -73.129676};
                                    ubicacionBus311[6] = {lat: 7.121611, lng: -73.130310};
                                    ubicacionBus311[7] = {lat: 7.121069, lng: -73.131461};
                                    ubicacionBus311[8] = {lat: 7.120832, lng: -73.131811};
                                    ubicacionBus311[9] = {lat: 7.120601, lng: -73.131809};
                                    var bus4 = 'img/BUS4.png';

                                    var ubicacionBus411 = new Array();
                                    ubicacionBus411[0] = {lat: 7.120446, lng: -73.131550};
                                    ubicacionBus411[1] = {lat: 7.120234, lng: -73.131245};
                                    ubicacionBus411[2] = {lat: 7.119905, lng: -73.131133};
                                    ubicacionBus411[3] = {lat: 7.119626, lng: -73.131151};
                                    ubicacionBus411[4] = {lat: 7.118819, lng: -73.131269};
                                    ubicacionBus411[5] = {lat: 7.118457, lng: -73.131322};
                                    ubicacionBus411[6] = {lat: 7.117843, lng: -73.131590};
                                    ubicacionBus411[7] = {lat: 7.117683, lng: -73.131598};
                                    ubicacionBus411[8] = {lat: 7.116068, lng: -73.131118};
                                    ubicacionBus411[9] = {lat: 7.114606, lng: -73.130505};

                                    var estacion = 'img/estacion.png';
                                    var ubicacionEstacion1ruta1 = {lat: 7.137102, lng: -73.120316};
                                    var ubicacionEstacion2ruta1 = {lat: 7.127949, lng: -73.119356};
                                    var ubicacionEstacion3ruta1 = {lat: 7.107438, lng: -73.114105};

                                    var ubicacionEstacion1ruta2 = {lat: 7.134479, lng: -73.117695};
                                    var ubicacionEstacion2ruta2 = {lat: 7.127956, lng: -73.111854};
                                    var ubicacionEstacion3ruta2 = {lat: 7.104044, lng: -73.110563};

                                    var ubicacionEstacion1ruta3 = {lat: 7.138796, lng: -73.120385};
                                    var ubicacionEstacion2ruta3 = {lat: 7.120446, lng: -73.131550};
                                    var ubicacionEstacion3ruta3 = {lat: 7.112452, lng: -73.129751};

                                    function ubicacionBus1() {
                                        ubicacionBus11 = ubicacionBus111[k]
                                        return ubicacionBus11

                                    }

                                    function ubicacionBus2() {

                                        ubicacionBus21 = ubicacionBus211[k]
                                        return ubicacionBus21

                                    }

                                    function ubicacionBus3() {

                                        ubicacionBus31 = ubicacionBus311[k]
                                        return ubicacionBus31

                                    }

                                    function ubicacionBus4() {

                                        ubicacionBus41 = ubicacionBus411[k]
                                        return ubicacionBus41

                                    }

                                    function initMap() {
                                        k++;
                                        if (k > 9) {
                                            k = 0;
                                        }
                                        var map = new google.maps.Map(document.getElementById('map'), {
                                            center: {lat: 7.12053219, lng: -73.1177568},
                                            zoom: 14,
                                            mapTypeId: google.maps.MapTypeId.HYBRID
                                        });

                                        var marcadorBus1 = new google.maps.Marker({
                                            position: ubicacionBus1(),
                                            title: "Bus 1",
                                            map: map,
                                            icon: bus1
                                        });
                                        marcadorBus1.setMap(map);
                                        var marcadorBus2 = new google.maps.Marker({
                                            position: ubicacionBus2(),
                                            title: "Bus 2",
                                            map: map,
                                            icon: bus2
                                        });
                                        marcadorBus2.setMap(map);
                                        var marcadorBus3 = new google.maps.Marker({
                                            position: ubicacionBus3(),
                                            title: "Bus 3",
                                            map: map,
                                            icon: bus3
                                        });
                                        marcadorBus3.setMap(map);
                                        var marcadorBus4 = new google.maps.Marker({
                                            position: ubicacionBus4(),
                                            title: "Bus 4",
                                            map: map,
                                            icon: bus4
                                        });
                                        marcadorBus4.setMap(map);

                                        var marcadorEstacion1ruta1 = new google.maps.Marker({
                                            position: ubicacionEstacion1ruta1,
                                            title: "E1R1",
                                            map: map,
                                            icon: estacion
                                        });
                                        var marcadorEstacion2ruta1 = new google.maps.Marker({
                                            position: ubicacionEstacion2ruta1,
                                            title: "E2R1",
                                            map: map,
                                            icon: estacion
                                        });
                                        var marcadorEstacion3ruta1 = new google.maps.Marker({
                                            position: ubicacionEstacion3ruta1,
                                            title: "E3R1",
                                            map: map,
                                            icon: estacion
                                        });

                                        var marcadorEstacion1ruta2 = new google.maps.Marker({
                                            position: ubicacionEstacion1ruta2,
                                            title: "E1R2",
                                            map: map,
                                            icon: estacion
                                        });
                                        var marcadorEstacion2ruta2 = new google.maps.Marker({
                                            position: ubicacionEstacion2ruta2,
                                            title: "E2R2",
                                            map: map,
                                            icon: estacion
                                        });
                                        var marcadorEstacion3ruta2 = new google.maps.Marker({
                                            position: ubicacionEstacion3ruta2,
                                            title: "E3R2",
                                            map: map,
                                            icon: estacion
                                        });

                                        var marcadorEstacion1ruta3 = new google.maps.Marker({
                                            position: ubicacionEstacion1ruta3,
                                            title: "E1R3",
                                            map: map,
                                            icon: estacion
                                        });
                                        var marcadorEstacion2ruta3 = new google.maps.Marker({
                                            position: ubicacionEstacion2ruta3,
                                            title: "E2R3",
                                            map: map,
                                            icon: estacion
                                        });
                                        var marcadorEstacion3ruta3 = new google.maps.Marker({
                                            position: ubicacionEstacion3ruta3,
                                            title: "E3R3",
                                            map: map,
                                            icon: estacion
                                        });

                                        var ruta1 = [
                                            {lat: 7.137102, lng: -73.120316},
                                            {lat: 7.134617, lng: -73.120313},
                                            {lat: 7.130504, lng: -73.119703},
                                            {lat: 7.127949, lng: -73.119356},
                                            {lat: 7.127286, lng: -73.119203},
                                            {lat: 7.122932, lng: -73.117179},
                                            {lat: 7.118873, lng: -73.115625},
                                            {lat: 7.107438, lng: -73.114105}
                                        ];

                                        var ruta2 = [
                                            {lat: 7.134479, lng: -73.117695},
                                            {lat: 7.134276, lng: -73.112585},
                                            {lat: 7.130545, lng: -73.112817},
                                            {lat: 7.127956, lng: -73.111854},
                                            {lat: 7.125512, lng: -73.112664},
                                            {lat: 7.106588, lng: -73.109369},
                                            {lat: 7.104044, lng: -73.110563}
                                        ];
                                        var ruta3 = [
                                            {lat: 7.138796, lng: -73.120385},
                                            {lat: 7.136582, lng: -73.131607},
                                            {lat: 7.135262, lng: -73.131006},
                                            {lat: 7.123569, lng: -73.128672},
                                            {lat: 7.122682, lng: -73.128525},
                                            {lat: 7.122086, lng: -73.128890},
                                            {lat: 7.121699, lng: -73.129676},
                                            {lat: 7.121611, lng: -73.130310},
                                            {lat: 7.121069, lng: -73.131461},
                                            {lat: 7.120832, lng: -73.131811},
                                            {lat: 7.120601, lng: -73.131809},
                                            {lat: 7.120446, lng: -73.131550},
                                            {lat: 7.120234, lng: -73.131245},
                                            {lat: 7.119905, lng: -73.131133},
                                            {lat: 7.119626, lng: -73.131151},
                                            {lat: 7.118819, lng: -73.131269},
                                            {lat: 7.118457, lng: -73.131322},
                                            {lat: 7.117843, lng: -73.131590},
                                            {lat: 7.117683, lng: -73.131598},
                                            {lat: 7.116068, lng: -73.131118},
                                            {lat: 7.114606, lng: -73.130505},
                                            {lat: 7.112452, lng: -73.129751}
                                        ];

                                         

                                        var trazo1 = new google.maps.Polyline({
                                            path: ruta1,
                                            geodesic: true,
                                            strokeColor: window.mapColor1,
                                            strokeOpacity: 1.0,
                                            strokeWeight: 2
                                        });
                                        var trazo2 = new google.maps.Polyline({
                                            path: ruta2,
                                            geodesic: true,
                                            strokeColor: window.mapColor2,
                                            strokeOpacity: 1.0,
                                            strokeWeight: 2
                                        });
                                        var trazo3 = new google.maps.Polyline({
                                            path: ruta3,
                                            geodesic: true,
                                            strokeColor: window.mapColor3,
                                            strokeOpacity: 1.0,
                                            strokeWeight: 2
                                        });
                                        trazo1.setMap(map);
                                        trazo2.setMap(map);
                                        trazo3.setMap(map);
                                    }




                                </script>


                                <script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>

                            </div>
                            <?php
                                if(!empty($_SESSION["usuario"]) || isset($_GET["entro"]) == "si") { 
                            ?>
                                <div class="CBB">
                                    <div>
                                        <input type="button" value="Recargar" onclick="initMap()">
                                    </div>
                                    <div class="checkroute">
                                        <input type="checkbox" name="routes1" value="ruta1" checked /> Ruta 1
                                        <label for="colorPicker1">Color:</label>
                                        <input id="colorPicker1"  type="text">
                                    </div>
                                    <div class="checkroute">
                                        <input type="checkbox" name="routes2" value="ruta2" checked/> Ruta 2
                                        <label for="colorPicker2">Color:</label>
                                        <input id="colorPicker2" type="text">
                                    </div>
                                    <div class="checkroute">
                                        <input type="checkbox" name="routes3" value="ruta3" checked/> Ruta 3
                                        <label for="colorPicker3">Color:</label>
                                        <input id="colorPicker3" type="text">
                                    </div>
                                </div>    
    
                            <?php
                                }
                            ?>
                        </center>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 portfolio-item">

                    </div>
                </div>
            </div>
        </section>


        <!-- administracion -->
        <section class="success" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Asministracion</h2>
                        <hr class="star-light">
                        <p> <?PHP
                            if (!empty($_SESSION["usuario"])) {
                                echo "Bienvenido: ", $_SESSION["usuario"];
                            }
                            ?>

                        </p>
                        <p><?PHP
                            echo $_SESSION["nombres"], " ", $_SESSION["apellidos"];
                            ?>
                        </p>

                    </div>
                </div>
            </div>
        </section>


        <!-- contacto -->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Contact Me</h2>
                        <hr class="star-primary">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Phone Number</label>
                                    <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Message</label>
                                    <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-success btn-lg">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="text-center">
            <div class="footer-above">
                <div class="container">
                    <div class="row">
                        <div class="footer-col col-md-4">
                            <h3>Location</h3>
                            <p>3481 Melrose Place<br>Beverly Hills, CA 90210</p>
                        </div>
                        <div class="footer-col col-md-4">
                            <h3>Around the Web</h3>
                            <ul class="list-inline">
                                <li>
                                    <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-col col-md-4">
                            <h3>About Freelancer</h3>
                            <p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-below">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            Copyright &copy; Your Website 2014
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
        <div class="scroll-top page-scroll visible-xs visible-sm">
            <a class="btn btn-primary" href="#page-top">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>

        <!-- Portfolio Modals -->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Project Title</h2>
                                <hr class="star-primary">
                                <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                                <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong><a href="http://startbootstrap.com">April 2014</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong><a href="http://startbootstrap.com">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Project Title</h2>
                                <hr class="star-primary">
                                <img src="img/portfolio/cake.png" class="img-responsive img-centered" alt="">
                                <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong><a href="http://startbootstrap.com">April 2014</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong><a href="http://startbootstrap.com">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Project Title</h2>
                                <hr class="star-primary">
                                <img src="img/portfolio/circus.png" class="img-responsive img-centered" alt="">
                                <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong><a href="http://startbootstrap.com">April 2014</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong><a href="http://startbootstrap.com">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Project Title</h2>
                                <hr class="star-primary">
                                <img src="img/portfolio/game.png" class="img-responsive img-centered" alt="">
                                <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong><a href="http://startbootstrap.com">April 2014</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong><a href="http://startbootstrap.com">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Project Title</h2>
                                <hr class="star-primary">
                                <img src="img/portfolio/safe.png" class="img-responsive img-centered" alt="">
                                <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong><a href="http://startbootstrap.com">April 2014</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong><a href="http://startbootstrap.com">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Project Title</h2>
                                <hr class="star-primary">
                                <img src="img/portfolio/submarine.png" class="img-responsive img-centered" alt="">
                                <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                                <ul class="list-inline item-details">
                                    <li>Client:
                                        <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                        </strong>
                                    </li>
                                    <li>Date:
                                        <strong><a href="http://startbootstrap.com">April 2014</a>
                                        </strong>
                                    </li>
                                    <li>Service:
                                        <strong><a href="http://startbootstrap.com">Web Development</a>
                                        </strong>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jqColorPicker.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="js/jqBootstrapValidation.js"></script>
        
        <script>
                $("#colorPicker3").colorPicker({
                renderCallback: function () {
                    window.mapColor3 = "#"+ this.color.colors.HEX ;
                }
                });
          
            
            $("#colorPicker2").colorPicker({
                renderCallback: function () {
                    window.mapColor2 = "#" + this.color.colors.HEX;
                }
            });
            $("#colorPicker1").colorPicker({
                renderCallback: function () {
                    window.mapColor1 = "#" + this.color.colors.HEX;
                    initMap();
                }
            });
        
        </script>

        <!--
        <script src="js/login.js"></script>
        -->

        <!-- Plugin JavaScript -->
        <script src="js/classie.js"></script>
        <script src="js/cbpAnimatedHeader.js"></script>

        <!-- Contact Form JavaScript -->
        <script src="js/contact_me.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/freelancer.js"></script>

    </body>

</html>