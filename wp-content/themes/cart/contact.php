<?php get_header()
/*
Template Name: contact
*/

?>
<?php
$contact_title = get_field('contact_title');
$contact_content = get_field('contact_content');


?>


<section class="contact">
    <div class="parent">
        <div class="right">
            <h2><?php echo $contact_title; ?></h2>
            <p><?php echo $contact_content; ?></p>


            <?php
            echo do_shortcode('[contact-form-7 id="119" title="contact-ar"]');
            ?>



        </div>
        <div class="left">
            <div class="owl-carousel owl-theme" id="matger">
                <?php
                $arg_slider = array(
                    'post_type' => 'slider',
                    'order' => 'asc'

                );
                $query_slider = new wp_query($arg_slider);

                if ($query_slider->have_posts()) {
                    while ($query_slider->have_posts()) {
                        $query_slider->the_post();
                ?>
                        <div class="box">
                            <?php the_post_thumbnail(); ?>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>




<?php get_footer(); ?>