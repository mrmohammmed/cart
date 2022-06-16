<footer>
    <div class="top-footer desktop">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="first">
                        <p>
                            جميع الحقوق محفوظة لسفن كارت @2022
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="pages">
                <?php footer_first(); ?>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="pages social">
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item">
                                <a href="<?php echo smart_get_setting('instagram') ?>" target="_blank"><img src=" <?php echo get_template_directory_uri() . '/images/instagram.png' ?>"></a>
                            </li>
                            <li class="list-group-item">
                                <a href="https://api.whatsapp.com/send?phone=<?php echo smart_get_setting('whatsapp') ?>" target="_blank"><img src=" <?php echo get_template_directory_uri() . '/images/whatsapp.png' ?>"></a>
                            </li>
                            <li class="list-group-item">
                                <a href="<?php echo smart_get_setting('facebook') ?>" target="_blank"><img src=" <?php echo get_template_directory_uri() . '/images/facebook.png' ?>"></a>
                            </li>
                            <li class="list-group-item">
                                <a href="<?php echo smart_get_setting('twitter') ?>" target="_blank"><img src=" <?php echo get_template_directory_uri() . '/images/twitter.png' ?>"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<footer>
    <div class="top-footer mobile">
        <div class="container">
            <div class="row">

                <div class="col-sm-12">
                    <div class="pages">
                        <h2>سفن كارت </h2>
                        <?php footer_second(); ?>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="pages social">
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item">
                                <a href="<?php echo smart_get_setting('instagram') ?>" target="_blank"><img src=" <?php echo get_template_directory_uri() . '/images/instagram.png' ?>"></a>

                            </li>
                            <li class="list-group-item">
                                <a href="https://api.whatsapp.com/send?phone=<?php echo smart_get_setting('whatsapp') ?>" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/whatsapp.png' ?>"></a>
                            </li>
                            <li class="list-group-item">
                                <a href="<?php echo smart_get_setting('facebook') ?>" target="_blank"><img src=" <?php echo get_template_directory_uri() . '/images/facebook.png' ?>"></a>
                            </li>
                            <li class="list-group-item">
                                <a href="<?php echo smart_get_setting('twitter') ?>" target="_blank"><img src=" <?php echo get_template_directory_uri() . '/images/twitter.png' ?>"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer mobile">


        <p>
            جميع الحقوق محفوظة لسفن كارت @2022
        </p>


    </div>
</footer>









<?php wp_footer(); ?>
<script>
    new WOW().init();
</script>
</body>

</html>