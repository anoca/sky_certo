<html>
    <head>
        <title>template MVC</title>
        <base href="<?= BASE_URL ?>">


        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="./publico/img/fav.png">
        <!-- Author Meta -->
        <meta name="author" content="colorlib">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>Macro</title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
            <!--
            CSS
            ============================================= -->
            <link rel="stylesheet" href="./publico/css/linearicons.css">
            <link rel="stylesheet" href="./publico/css/font-awesome.min.css">
            <link rel="stylesheet" href="./publico/css/bootstrap.css">
            <link rel="stylesheet" href="./publico/css/magnific-popup.css">
            <link rel="stylesheet" href="./publico/css/jquery-ui.css">                
            <link rel="stylesheet" href="./publico/css/nice-select.css">                          
            <link rel="stylesheet" href="./publico/css/animate.min.css">
            <link rel="stylesheet" href="./publico/css/owl.carousel.css">             
            <link rel="stylesheet" href="./publico/css/main.css">
        </head>

    <body class="container">
        <?php require "visao/cabecalho.php"; ?>

        <?php alertComponentRender(); ?>


<!-- start banner Area -->
            <section class="banner-area">       
                <div class="container">
                    <div class="row fullscreen align-items-center justify-content-between">
                        <div class="col-lg-12 banner-content">
                            <h6 class="text-white">Muitos sabores para escolher</h6>
                            <h1 class="text-white">SKY PIECES</h1>
                            <p class="text-white">
                                Sorvetes caseiros com sabores diferenciados e descrições que vão mexer com os seus sentidos
                            </p>
                            <a href="#" class="primary-btn text-uppercase">Check o Menu</a>
                        </div>
                    </div>
                </div>                  
            </section>
            <!-- End banner Area -->

        <main class="container">
            <?php require $viewFilePath; ?>
        </main>
        <?php require "visao/rodape.php"; ?>


            <script src="./publico/js/vendor/jquery-2.2.4.min.js"></script>
            <script src="./publico/js/popper.min.js"></script>
            <script src="./publico/js/vendor/bootstrap.min.js"></script>          
            <script src="./publico/https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>     
            <script src="./publico/js/jquery-ui.js"></script>                 
            <script src="./publico/js/easing.min.js"></script>            
            <script src="./publico/js/hoverIntent.js"></script>
            <script src="./publico/js/superfish.min.js"></script> 
            <script src="./publico/js/jquery.ajaxchimp.min.js"></script>
            <script src="./publico/js/jquery.magnific-popup.min.js"></script>                     
            <script src="./publico/js/jquery.nice-select.min.js"></script>                    
            <script src="./publico/js/owl.carousel.min.js"></script>          
            <script src="./publico/js/isotope.pkgd.min.js"></script>                              
            <script src="./publico/js/mail-script.js"></script>   
            <script src="./publico/js/main.js"></script>  


    </body>
</html>
