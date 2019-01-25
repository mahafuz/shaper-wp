<?php get_header(); ?>


<div class="inner-page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                    while(have_posts()) {
                        the_post();
                        ?>
                        <h2><?php the_title(); ?></h2>

                        <div class="content">
                            <?php the_content(); ?>
                        </div>

                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>