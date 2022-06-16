<?php get_header()
/*
Template Name: works
*/

?>
<section class="portofolios">
    <div class="container">
        <h2 class="title"><?php the_title() ?></h2>
        <div class="row">
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
                    <div class="col-sm-3 col-6">
                        <div class="first">
                            <div class="info">
                                <div class="photo">
                                    <?php the_post_thumbnail() ?>
                                </div>
                                <h2><?php the_title() ?></h2>
                                <?php the_content() ?>
                            </div>
                            <div class="show">
                                <a href="<?php the_field('link') ?>">
                                    معاينة المتجر
                                    <i class="fa fa-arrow-left"></i>
                                </a>
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

<section class="start-now">
    <div class="container">
        <h2 class="title"><?php echo smart_get_setting('title') ?></h2>
        <p class="content"><?php echo smart_get_setting('content') ?></p>
        <a href="<?php echo site_url('/تواصل-معنا') ?>">إبدا الأن</a>
    </div>
</section>

<?php get_footer(); ?>