<?php get_header()
/*
Template Name: questions
*/

?>



<section class="questions">
    <div class="container">
        <h2 class="title"><?php the_title() ?></h2>
        <div class="accordion" id="accordionExample">
            <?php
            $arg_question = array(
                'post_type' => 'question',
                'order' => 'asc'

            );
            $query_question = new wp_query($arg_question);

            if ($query_question->have_posts()) {
                while ($query_question->have_posts()) {
                    $query_question->the_post();
            ?>
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-right" type="button" data-toggle="collapse" data-target="#<?php the_field('question-id') ?>" aria-expanded="true" aria-controls="<?php the_field('question-id') ?>">
                                    <?php the_title() ?>
                                </button>
                            </h2>
                        </div>

                        <div id="<?php the_field('question-id') ?>" class="collapse <?php the_field('show') ?>" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
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
</section>

<section class="start-now">
    <div class="container">
        <h2 class="title"><?php echo smart_get_setting('title') ?></h2>
        <p class="content"><?php echo smart_get_setting('content') ?></p>
        <a href="<?php echo site_url('/تواصل-معنا') ?>">إبدا الأن</a>
    </div>
</section>






<?php get_footer() ?>