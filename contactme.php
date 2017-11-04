<?php

if(isset($_POST['email'])) {

    $email_to = "hola@simplecs.tech";

    $email_subject = "Contacto Simplecs";


    function died($error) {

        // your error code can go here

        echo "Hubo un error en tu mensaje. ";

        echo "Podría tener que ver con lo siguiente: <br /><br />";

        echo $error."<br /><br />";

        echo "Por favor intentalo nuevamente.<br /><br />";

        die();

    }



    // validation expected data exists

    if(!isset($_POST['name']) ||

        !isset($_POST['email']) ||

        !isset($_POST['message'])) {

        died('Disculpas, parece que hay un error en tu mensaje. Intenta nuevamente.');

    }


    $name = $_POST['name'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $message = $_POST['message'];


    $email_message = "Detalles.\n\n";



    function clean_string($string) {

      $bad = array("content-type","bcc:","to:","cc:","href");

      return str_replace($bad,"",$string);

    }



    $email_message .= "Name: ".clean_string($name)."\n";

    $email_message .= "Email: ".clean_string($email)."\n";

    $email_message .= "Asunto: ".clean_string($asunto)."\n";

    $email_message .= "Message: ".clean_string($message)."\n";


	// create email headers

	$headers = 'From: '.$email."\r\n".

	'Reply-To: '.$email."\r\n" .

	'X-Mailer: PHP/' . phpversion();

	@mail($email_to, $email_subject, $email_message, $headers);


?>



<!-- include your own success html here -->
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Simplecs</title>
    <meta name="description" content="">
    <meta name="msapplication-tap-highlight" content="yes" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0" />

    <!-- Google Web Font -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lekton:400,700,400italic' rel='stylesheet' type='text/css'>

    <!--  Bootstrap 3-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- OWL Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">

    <!--  Slider -->
    <link rel="stylesheet" href="css/jquery.kenburnsy.css">

    <!-- Animate -->
    <link rel="stylesheet" href="css/animate.css">

    <!-- Web Icons Font -->
    <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="css/iconmoon.css">
    <link rel="stylesheet" href="css/et-line.css">
    <link rel="stylesheet" href="css/ionicons.css">

    <!-- Magnific PopUp -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Tabs -->
    <link rel="stylesheet" type="text/css" href="css/tabs.css" />
    <link rel="stylesheet" type="text/css" href="css/tabstyles.css" />

    <!-- Loader Style -->
    <link rel="stylesheet" href="css/loader-1.css">

    <!-- Costum Styles -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Favicon -->
    <link rel="icon" type="image/ico" href="favicon.ico">

    <!-- Modernizer & Respond js -->
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>

      <!-- Preloader -->
      <div class="cover"></div>

      <div class="header">
          <div class="container">
              <div class="logo">
                  <a href="index.html">
                      <img src="img/logo-amarillo.png" alt="Logo">
                  </a>
              </div>
          </div>
      </div>

<div class="container">
    <div class="page-error">
        <h1>GRACIAS</h1>
        <h3> ¡Muy pronto te estaremos contactando!</h3>
        <p>Mientras tanto podés volver al <a href="index.html">Inicio</a> o visitarnos en <a href="https://facebook.com/simplecstech">Facebook</a></p>
    </div>
</div>




<div class="footer margin-top">
    <div class="container">
        <div class="row">
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="footer-inner">
                        <div class="footer-content">
                            <h4>SIMPLECS</h4>
                                <address>San Juan<br> Argentina</address>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-md-push-8 col-sm-4 col-xs-12">
                    <div class="footer-inner">
                        <div class="footer-content">
                           <h4>CONTACTO</h4>
                            <p>
                                T:+54 9 264 6209064 <br>
                                E:hola@simplecs.tech <br>
                                W:www.simplecs.tech
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-inner">
                        <div class="footer-content">
                        <ul class="social-media">
                            <li><a href="https://www.facebook.com/simplecstech/"><i class="iconmoon-facebook"></i></a></li>
                            <li><a href="https://twitter.com/simplecstech"><i class="iconmoon-twitter"></i></a></li>

                            <li><a href="#"><i class="iconmoon-linkedin2"></i></a></li>
                        </ul>
                        <span class="copyright-mark">&copy; 2017 SIMPLECS, TODOS LOS DERECHOS RESERVADOS</span>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

    <a href="javascript:void(0)" class="scroll-top" id="scroll-top"><i class="pe-7s-angle-up"></i></a>

    <script src="js/vendor/jquery-1.11.2.min.js"></script>
    <script data-pace-options='{ "ajax": false }' src="js/vendor/pace.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/vendor/classie.js"></script>
    <script src="js/vendor/isotope.pkgd.min.js"></script>
    <script src="js/vendor/jquery.velocity.min.js"></script>
    <script src="js/vendor/jquery.kenburnsy.min.js"></script>
    <script src="js/vendor/textslide.js"></script>
    <script src="js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="js/vendor/tabs.js"></script>
    <script src="js/ef-slider.js"></script>
    <script src="js/vendor/owl.carousel.min.js"></script>
    <script src="js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="js/vendor/jquery.social-buttons.min.js"></script>
    <script src="js/vendor/wow.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/ajax.js"></script>
</body>
</html>

<?php

}

?>
