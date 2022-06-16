<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<!-- Mirrored from gothemes.net/html/noire/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Jun 2020 02:08:00 GMT -->

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Website Title
    ======================================= -->
    <title><?php bloginfo('name') ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">


    <meta name="keywords" content="" />
    <meta name="author" content="Mohamed Ahmed">

    <!-- Noyre Fonts -->

    <!-- Noyre CSS -->

    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>


<header>


<!-- start of navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    
    <div class='container'>

        <a class="navbar-brand desktop" href="<?php echo site_url() ?>">
            <img src='<?php echo smart_get_setting('infoImg/url') ?>'>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    
            <img src="<?php echo get_template_directory_uri() . '/images/menu-right-alt.png' ?>">
        </button>
        <a class="navbar-brand mobile" href="<?php echo site_url() ?>">
        <img src='<?php echo smart_get_setting('mobileImg/url') ?>'>
        </a>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php navbar_header(); ?>
            <div class="my-2 my-lg-0">
                <ul class="list-group list-group-horizontal area">
                    <li class="list-group-item">
                        <a href="<?php echo site_url('/تواصل-معنا') ?>">
                            طلب متجر 
                        </a>
                    </li>



                </ul>
            </div>
        </div>
    </div>
</nav>
</header>
<!-- end of navbar -->