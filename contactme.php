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
    <title>Simplecs.</title>
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

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcj7IUmQauOqpqeL5xj-UZbLb03vhBV3s&amp;sensor=false"></script>

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
        <div class="slider-wrapper">
            <div class="slider-description">
                <div class="slider-description-inner">
                    <h1>Pura<span>Elegancia</span></h1>
                </div>
                <div class="cd-intro">
                    <div class="cd-headline clip">
                        <span class="cd-words-wrapper">
                            <b class="is-visible">Orientado a Resultados</b>
                            <b>Diseño Moderno</b>
                            <b>Soluciones Creativas</b>
                        </span>
                    </div>
                </div>
            </div>
            <div id="slider-ef" class="slider-images-wrapper">
                <img class="img-responsive" src="img/simplecs-header.jpg" alt="">
                <img class="img-responsive" src="img/simplecs-header-2.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="container margin-top">
        <div class="history-wrapper">
            <div class="col-md-6 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.5s">
                <div class="row">
                  <h1>¡Gracias! Tu mensaje se ha enviado. Pronto nos comunicaremos</h1>
                </div>
              </div>
            </div>
          </div>
        </body>
        </html>


<?php

}

?>
