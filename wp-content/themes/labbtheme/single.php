<?php
    get_header(); // prints out whats inside header.php
?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    
                    <?php if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post(); ?>
                    <article>
                    
                        <?php  the_post_thumbnail(); ?>
                            <h1 class="title"><?php the_title(); ?> </h1>
                            
                            <ul class="meta">
                            <li>
                                <i class="fa fa-calendar"></i><?php the_time(get_option('date_format')); ?>
                            </li>
                            <li>
                                 <i class="fa fa-user"></i> <?php the_author_posts_link(); ?> 
                            </li>
                            <li>
                                <i class="fa fa-tag"></i> <?php the_category(" , ", true, ""); ?>
                            </li>
                            </ul>
                            <p><?php the_content(); ?> </p>
                    </article>
                    <?php } // end while
                    }?> 
                    <nav class="navigation pagination">
                        <?php echo paginate_links();?> <!-- this fuction makes the pagination for blogpost -->
                    </nav>
                </div>
                <aside id="secondary" class="col-xs-12 col-md-3">
                    <div id="sidebar">
                        <?php dynamic_sidebar("sidebar-1"); ?> 
                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>