<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php 
                        if ( have_posts() ) {
                            while ( have_posts() ) {
                                the_post(); ?>
                                
                                <div class="hero" style="">
                                    <?php the_post_thumbnail();?>
                                    <div class="text"><?php the_content(); ?></div>
                                    
                                </div>
                                
                            <?php
                            } // end while
                        } // end if
                    ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>