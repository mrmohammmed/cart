<?php get_header()
/*
Template Name: marketing
*/

?>
<?php
$marketing_title = get_field('marketing_title');
$advantages_title = get_field('advantages_title');

$start_title = get_field('start_title');
$start_content = get_field('start_content');



?>


<section class="marketing">
    <div class="container">
        <h2 class="title"><?php the_title() ?></h2>
        <div class="row">
            <div class="col-md-6">
                <div class="right">
                    <div class="photo">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="benefits">
                        <h2><?php echo $marketing_title; ?></h2>
                        <div class="row">
                            <?php
                            $arg_benefits = array(
                                'post_type' => 'benefits',
                                'order' => 'asc'

                            );
                            $query_benefits = new wp_query($arg_benefits);

                            if ($query_benefits->have_posts()) {
                                while ($query_benefits->have_posts()) {
                                    $query_benefits->the_post();
                            ?>
                                    <div class="col-md-6 col-6">
                                        <div class="parent">
                                            <div class="child1">
                                                <?php the_post_thumbnail() ?>
                                            </div>
                                            <div class="child2">
                                                <p><?php the_title() ?></p>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="left">
                    <h2><?php echo $advantages_title; ?></h2>
                    <?php
                    $arg_advantages = array(
                        'post_type' => 'advantages',
                        'order' => 'asc'

                    );
                    $query_advantages = new wp_query($arg_advantages);

                    if ($query_advantages->have_posts()) {
                        while ($query_advantages->have_posts()) {
                            $query_advantages->the_post();
                    ?>
                            <div class="features">
                                <div class="parent">
                                    <div class="child1">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="child2">
                                        <?php the_content() ?>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>

                </div>
            </div>
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