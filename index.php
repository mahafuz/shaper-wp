<?php get_header(); ?>


<div class="inner-page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                    while(have_posts()) {
                        the_post();
                    ?>

                        <div class="single-blog-post">

                            <div class="post-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>

                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                            <div class="content">
                                <?php the_excerpt(); ?>

                                <a href="<?php the_permalink(); ?>"><?php echo _e('Read More', 'shaper-wp'); ?></a>
                            </div>

                        </div>
                        

                    <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>