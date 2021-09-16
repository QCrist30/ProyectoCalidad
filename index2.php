<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Site made with Mobirise Website Builder v5.1.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.1.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/mbr-121x176.png" type="image/x-icon">
  <meta name="description" content="Pagina de contacto">
  
  
  <title>Contacto</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
</head>
<body>
<section class="menu cid-sbikAktn9w" once="menu" id="menu1-9">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.html#header2-1">
                         <img src="assets/images/mbr-121x176.png" alt="Mobirise" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black text-primary display-5" href="index.php#header2-1">
                        BARBER NATION</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-black text-primary display-4" href="index.php">
                        
                        Inicio</a>
                </li><li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="contacto.php#contacts1-6">
                        
                        Contacto</a></li><li class="nav-item">
                    <a class="nav-link link text-black text-primary display-4" href="nosotros.php">
                        
                        Nosotros&nbsp;&nbsp;</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black text-primary display-4" href="admin.php">
                        
                        Admin</a>
                </li></ul>
            
        </div>
    </nav>
</section>

<section class="cid-sbibOw2Tfg mbr-fullscreen mbr-parallax-background" id="header2-1">

    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);"></div>

    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                    BARBER NATION</h1>
                
                <p class="mbr-text pb-3 mbr-fonts-style display-5">Vive a tu manera. En Barber Nation le damos personalidad a tu estilo.<br>Con las más recientes tendencias de la moda y el estilismo<br>ofrecemos un producto diferente, orientado al caballero de hoy,<br>vanguardista y moderno</p>
                <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="index.php#services1-2">Inicio</a>
                    <a class="btn btn-md btn-white-outline display-4" href="contacto.php#contacts1-6">CONTACTO</a></div>
            </div>
        </div>
    </div>
</section>

<?php
 $conexion=mysqli_connect("localhost","root","","barberia") or die("Problemas con la conexión");

 mysqli_select_db($conexion,"barberia")or die("La BD no responde");

 mysqli_query($conexion,"insert into datos(name,email,phone,mensaje) values ('$_REQUEST[name]','$_REQUEST[email]','$_REQUEST[phone]','$_REQUEST[mensaje]')")
 or die("Problemas".mysqli_error($conexion));
 

?>

<section class="cid-sbinKcK66Z" id="footer5-a">

    <div class="container">
        <div class="media-container-row">
            <div class="col-md-3">
                <div class="media-wrap">
                    <a href="index.php">
                       <img src="assets/images/mbr-88x128.png" alt="Mobirise">
                    </a>
                </div>
            </div>
            <div class="col-md-9">
                <p class="mbr-text align-right links mbr-fonts-style display-7"><a href="index.php" class="text-black text-primary">INICIO</a> &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="nosotros.php#header1-g" class="text-black text-primary">NOSOTROS</a>&nbsp;&nbsp;&nbsp; &nbsp;<a href="contact.php#contacts1-6" class="text-black text-primary">CONTAC</a>TO</p>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-md-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2020 Barber Nation - All Rights Reserved
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://twitter.com/archytoons" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/archytoons" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.instagram.com/archytoons" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon"></span>
                            </a>
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><a href="https://mobirise.site/e" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a><p style="flex: 0 0 auto; margin:0; padding-right:1rem;"><a href="https://mobirise.site/s" style="color:#aaa;">Website</a> was designed with Mobirise web template</p></section><script src="assets/web/assets/jquery/jquery.min.js"></script>  <script src="assets/popper/popper.min.js"></script>  <script src="assets/bootstrap/js/bootstrap.min.js"></script>  <script src="assets/tether/tether.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/dropdown/js/nav-dropdown.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>  <script src="assets/theme/js/script.js"></script>  <script src="assets/formoid/formoid.min.js"></script>  
  
</body>
</html>