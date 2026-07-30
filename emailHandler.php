<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <title>KR - Asesoria Contable</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Realización de trámites de administración contable e impositiva para emprendedores y Pymes. Contamos con el mejor servicio profesional para cada cliente.">
    <meta name="keywords" content="asesoramiento contable, asesoria contable,vencimiento de afip, Contador publico, Afip Monotributo, Contadora Publica, Pago de Afip, Liquidacion de sueldos, contador para emprendedores">
    <meta name="google-site-verification" content="Z-WitWKQoK6j_l87jaZGyqJf7BgAr0-FF_8QViLL7R8" />
    <meta http-equiv="content-language" content="es">
    <link rel="stylesheet" href="assets/css/style-starter.css?v=5">
</head>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke px-0">
                <!-- <h1>
                    <a class="navbar-brand" href="index.html">
                        <span>Be</span>Idea</a>
                </h1> -->

                <a class="navbar-brand" href="index.html">
                <img src="./assets/images/logo-small.png" alt="KR ASESORÍA" title="KR ASESORÍA" style="width: 100px; top:10px;" />
                </a> 
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#asesoria">Asesoria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#servicios">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position mt-lg-2">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--//header-->

    <!-- inner banner -->
    <div class="inner-banner">
        <div class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold">Contactanos</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Contactanos</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //inner banner -->

    <!-- contact section -->
    <section class="w3l-contact py-5" id="contact">
        <div class="container py-md-5 py-4">
            <!--<div class="title-main text-center mx-auto mb-5" style="max-width:500px;">
                <p class="text-uppercase">Get In Touch</p>
                <h3 class="title-style">Contact with <span>Us</span></h3>
            </div>-->
            <div class="mx-auto" style="max-width:1000px">
                <div class="row contact-block">
                <?php
                    $to = "no-reply@c2450293.ferozo.com";
                    $subject = "Contacto desde asesoriacontablekr.com.ar";

                    $message = "
                    <html>
                    <head>
                    <title>email enviado desde asesoriacontablekr.com.ar</title>
                    </head>
                    <body>
                    <p>Nombre: ".$_POST['nombre']."</p>
                    <p>Email: ".$_POST['email']."</p>
                    <p>Mensaje: ".$_POST['mensaje']."</p>
                    </body>
                    </html>
                    ";

                    // It is mandatory to set the content-type when sending HTML email
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                    // More headers. From is required, rest other headers are optional
                    $headers .= 'From: Contacto Web <no-reply@c2450293.ferozo.com>' . "\r\n";

                    $mail_status = mail($to,$subject,$message,$headers);

                    if ($mail_status) {

                        echo "<h4 class='mb-sm-3 mb-2'> <span>       Mensaje Enviado</span> Nos pondremos en contacto a la brevedad</h4>";
                        
                        ?>
                        <script language="javascript" type="text/javascript">
                             setTimeout(function () {
                                window.location.href = "index.html";
                            }, 3000);
                        </script>
                        <?php
                      }
                      else {

                        echo "<h4 class='title-style mb-sm-3 mb-2'><span>Error</span> ocurrio un error, por favor contactenos a info@asesoriacontablekr.com.ar</h4>";
                          ?>
                        <script language="javascript" type="text/javascript">
                             setTimeout(function () {
                                window.location.href = "contacto.html";
                            }, 6000);
                        </script>
                          <?php
                      }
                      header('Location: https://www.asesoriacontablekr.com.ar');
                ?> 
                
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="w3l-footer-16 py-5">
        <div class="container pt-md-4">
            <div class="row footer-p">
                <div class="col-lg-4 pr-lg-5">
                    <a class="footer-logo" href="index.html">KR - Asesoria Contable</a>
                    <div class="columns-2 mt-4">
                        <ul class="social">
                            <li><a target="_blank" href="https://www.facebook.com/kr.asesoriacontable"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a target="_blank" href="https://www.instagram.com/kr.asesoriacontable/?hl=es"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 mt-lg-0 mt-5">
                    <div class="row">
                            <div class="col-xl-5 col-6 column pl-lg-0">
                            <h3 class="mt-lg-3">Contacto</h3>
                            <ul class="footer-contact-list">
                                <li class="mt-2"><a target="_blank" href="https://api.whatsapp.com/send?phone=5491131880155">11-3188-0155</a></li>
                            </ul>
                        </div>
                        <div class="col-xl-5 col-6 column">
                            <h3 class="mt-lg-3">Acceso Rapido</h3>
                            <ul class="footer-gd-16">
                                <li><a href="index.html#nosotros">Nosotros</a></li>
                                <li><a href="index.html#servicios">Servicios</a></li>
                                <li><a href="contacto.html">Contacto</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="whatsappMobile">
		<a target="_blank" href="https://api.whatsapp.com/send?phone=5491131880155" class="floatMobile" target="_blank"><i class="fab fa-whatsapp"></i></a>
	</div>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function () {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function (i, char) {
                        setTimeout(function () {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function () {
            // Now to start autoTyping just call the autoType function with the 
            // class of outer div
            // The second paramter is the speed between each letter is typed.   
            autoType(".type-js", 200);
        });
    </script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->
</body>

</html>