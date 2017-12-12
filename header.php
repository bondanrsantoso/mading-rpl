<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo get_bloginfo( 'name' ); ?></title>


    <!--  favicon -->
    <link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory'); ?>/assets/img/ico/favicon.png">
    <!--  apple-touch-icon -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/img/ico/apple-touch-icon-57-precomposed.png">

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
    <!-- Material Icons CSS -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/fonts/iconfont/material-icons.css" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- owl.carousel -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/owl.carousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <!-- materialize -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/materialize/css/materialize.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- shortcodes -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/shortcodes/shortcodes.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <?php wp_head();?>
</head>

<body id="top" class="has-header-search">

    <!-- Top bar start-->
    <div class="top-bar light-blue visible-md visible-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left">
                    <ul class="topbar-cta no-margin">
                        <li class="mr-20">
                            <a>SMK NEGERI 1 CIMAHI</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="topbar-cta no-margin">
                        <li class="mr-20">
                            <a><i class="material-icons mr-10">&#xE0B9;</i>rpl@smkn1-cmi.sch.id</a>
                        </li>
                        <li>
                            <a><i class="material-icons mr-10">&#xE0CD;</i>(022) 6629583</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- Top bar end-->

    <!--header start-->
    <header id="header" class="tt-nav nav-border-bottom">

        <div class="header-sticky light-header ">

            <div class="container">

                <div class="search-wrapper">
                    <div class="search-trigger pull-right">
                        <div class='search-btn'></div>
                        <i class="material-icons">&#xE8B6;</i>
                    </div>

                    <!-- Modal Search Form -->
                    <i class="search-close material-icons">&#xE5CD;</i>
                    <div class="search-form-wrapper">
                        <form action="#" class="white-form">
                            <div class="input-field">
                                <input type="text" name="search" id="search">
                                <label for="search" class="">Cari Berita Disini...</label>
                            </div>
                            <button class="btn pink search-button waves-effect waves-light" type="submit"><i class="material-icons">&#xE8B6;</i></button>

                        </form>
                    </div>
                </div>
                <!-- /.search-wrapper -->

                <div id="materialize-menu" class="menuzord">

                    <!--logo start-->
                    <a href="<?php echo get_bloginfo( 'wpurl' );?>" class="logo-brand">
                        <h1 class="retina"><?php echo get_bloginfo( 'name' ); ?></h1>
                    </a>
                    <!--logo end-->

                    <!--mega menu start-->
                    <ul class="menuzord-menu pull-right">
                        <li><a href="#">Hot News</a></li>
                        <!-- <li><a href="#">Informasi SMK</a></li>
                        <li><a href="#">Info Lomba</a></li>
                        <li><a href="#">Berita Pekerjaan</a></li> -->
                    </ul>
                    <!--mega menu end-->

                </div>
            </div>
        </div>
    </header>
