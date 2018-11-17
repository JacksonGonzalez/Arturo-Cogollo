<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Arturo Cogollo</title>

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

    <!-- Link para el favicon -->
    <link rel="shortcut icon" href="views/img/favicon-arturo1.png" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <link href="views/css/bootstrap.min.css" rel="stylesheet">
    <script src="views/js/jquery.min.js"></script>

    <!-- Add this css File in head tag-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
    <!-- Custom styles for this template -->
    
    <link href="views/css/full-slider.css" rel="stylesheet">

    <!-- Fancy box -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.4/jquery.fancybox.css">

    <!-- Vendor Styles -->
    <link href="views/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="views/css/animate.css" rel="stylesheet" type="text/css"/>
    <link href="views/vendor/themify/themify.css" rel="stylesheet" type="text/css"/>
    <link href="views/vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css"/>
    <link href="views/vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css"/>
    <link href="views/vendor/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>

    <!-- Theme Styles -->
    <link href="views/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="views/css/global/global.css" rel="stylesheet" type="text/css"/>

    <!-- Theme Skins -->
    <link href="views/css/theme/gold.css" rel="stylesheet" type="text/css"/>

    
  </head>

  <body>

    <!-- Navigation -->
    <?php
        include 'views/modules/navigation.php';
    ?>
    
    <?php 

        $modulos = new Enlaces();
        $modulos -> enlacesController();

    ?>

    <!-- Bootstrap core JavaScript -->
    <?php
        include 'views/modules/library-js.php';
    ?>
    <script>
        $(document).ready(function(){
            $('.carousel').carousel({
              pause: "false",
              interval: 4000,
            });

            $('[data-fancybox="gallery"]').fancybox({
              buttons : [ 
                // 'slideShow',
                // 'share',
                // 'zoom',
                'thumbs',
                'fullScreen',
                'close'
              ],
              thumbs : {
                autoStart : true
              },
              css: {
                width : "100%"
              },
              animationEffect: "zoom",
              protect: true,
              preload: true,
              transitionEffect: "fade",
              transitionDuration: 1000,
              zoomOpacity: "auto",
            });
        });   
    </script>
  </body>

</html>