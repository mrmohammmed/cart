<?php get_header(); ?>

<?php

$about_title = get_field('about_title');
$about_content = get_field('about_content');
$about_photo = get_field('about_photo');

$why_title = get_field('why_title');
$why_sub_title = get_field('why_sub_title');

$works_title = get_field('works_title');

$package_title = get_field('package_title');
$package_content = get_field('package_content');
$package_photo = get_field('package_photo');

$client_title = get_field('client_title');
$client_content = get_field('client_content');


?>

<section class="about desktop">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                <div class="right">
                    <h2 class="title">
                        <?php echo $about_title; ?>
                    </h2>
                    <p>
                        <?php echo $about_content; ?>
                    </p>
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item">
                            <a href="<?php echo site_url('/تواصل-معنا') ?>">طلب متجر </a>
                        </li>
                        <li class="list-group-item">
                            <a href="<?php echo site_url('/نماذج-المتاجر') ?>">الإطلاع علي النماذج</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                <div class="left">
                    <img src="<?php echo $about_photo['url'] ?>">
                </div>
            </div>
        </div>
    </div>
</section>



<!-- mobile -->

<section class="about mobile">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                <div class="left">
                    <img src="<?php echo $about_photo['url'] ?>">
                </div>
            </div>
            <div class="col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                <div class="right">
                    <h2 class="title">
                        <?php echo $about_title; ?>
                    </h2>
                    <p>
                        <?php echo $about_content; ?>
                    </p>
                    <ul class="list-group list-group-horizontal">
                    <li class="list-group-item">
                            <a href="<?php echo site_url('/تواصل-معنا') ?>">طلب متجر </a>
                        </li>
                        <li class="list-group-item">
                            <a href="<?php echo site_url('/نماذج-المتاجر') ?>">الإطلاع علي النماذج</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="why-us wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
    <div class="container">
        <h2 class="title"><?php echo $why_title; ?></h2>
        <p class="sub-title"><?php echo $why_sub_title; ?></p>
        <div class="row">

            <?php
            $arg_why = array(
                'post_type' => 'why',
                'order' => 'asc'

            );
            $query_why = new wp_query($arg_why);

            if ($query_why->have_posts()) {
                while ($query_why->have_posts()) {
                    $query_why->the_post();
            ?>
                    <div class="col-md-4 col-6">
                        <div class="first">
                            <?php the_post_thumbnail() ?>
                            <h2><?php the_title() ?></h2>
                            <?php the_content() ?>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</section>




<section class="works desktop">
    <div class="container">

        <h2 class="title"><?php echo $works_title; ?></h2>
        <div class="owl-carousel owl-theme" id="slider">
            <?php
            $arg_works = array(
                'post_type' => 'works',
                'order' => 'asc'

            );
            $query_works = new wp_query($arg_works);

            if ($query_works->have_posts()) {
                while ($query_works->have_posts()) {
                    $query_works->the_post();
            ?>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="first">
                                    <h2><?php the_title() ?></h2>
                                    <?php the_content(); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="second">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>

        </div>
    </div>
</section>


<section class="works mobile">
    <div class="container">

        <h2 class="title"><?php echo $works_title; ?></h2>
        <div class="owl-carousel owl-theme" id="slider2">
            <?php
            $arg_works = array(
                'post_type' => 'works',
                'order' => 'asc'

            );
            $query_works = new wp_query($arg_works);

            if ($query_works->have_posts()) {
                while ($query_works->have_posts()) {
                    $query_works->the_post();
            ?>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="first">
                                    <h2><?php the_title() ?></h2>
                                    <?php the_content(); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="second">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>

        </div>
    </div>
</section>


<section class="packages">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="words">
                            <h2 class="title"><?php echo $package_title; ?></h2>
                            <p><?php echo $package_content; ?></p>
                            <img src="<?php echo $package_photo['url'] ?>">
                        </div>
                    </div>
                    <?php
            $arg_package = array(
                'post_type' => 'package',
                'order' => 'asc'

            );
            $query_package = new wp_query($arg_package);

            if ($query_package->have_posts()) {
                while ($query_package->have_posts()) {
                    $query_package->the_post();
            ?>
                    <div class="col-md-4 wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="feature">
                            <div class="feature-titles">
                                <h2><?php the_title() ?></h2>
                                <p><?php the_field('feature') ?></p>
                            </div>
                            <div class="feature-info">
                           <?php the_content(); ?>
                                <p class="price"><?php the_field('price') ?>
                                    <label>ريال</label>
                                </p>
                            </div>
                        </div>
                    </div>
                 <?php
                }
            }
            ?>
                </div>
            </div>
        </section>
        <section class="clients wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
            <div class="container">
                <h2 class="title"><?php echo $client_title; ?></h2>
                <p class="sub-title"><?php echo $client_content; ?></p>
                <div class="owl-carousel owl-theme" id="client">
                <?php
            $arg_clients = array(
                'post_type' => 'clients',
                'order' => 'asc'

            );
            $query_clients = new wp_query($arg_clients);

            if ($query_clients->have_posts()) {
                while ($query_clients->have_posts()) {
                    $query_clients->the_post();
            ?>
                    <div class="box">
                        <div class="photo">
                       <?php the_post_thumbnail() ?>
                        </div>
                        <h2 class="title"><?php the_title() ?></h2>
                        <a href="<?php the_field('link') ?>">
                            معاينة المتجر 
                            <i class="fa fa-arrow-left"></i>
                        </a>
                    </div>
                 <?php
                }
            }
            ?>
                </div>
            </div>
        </section>

        <section class="start-now">
            <div class="container">
                <h2 class="title"><?php echo smart_get_setting('title') ?></h2>
                <p class="content"><?php echo smart_get_setting('content') ?></p>
                <a href="<?php echo site_url('/تواصل-معنا') ?>">إبدا الأن</a>
            </div>
        </section>
<?php get_footer(); ?>