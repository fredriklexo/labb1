<?php
    /* Template Name: Homepage */
    get_header();
?>
		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1><?php the_title(); ?></h1>
                            <p><?php the_content(); ?></p>
						</div>
						
                        <aside id="secondary" class="col-xs-12 col-md-3">
                            <?php wp_nav_menu( array(
                                'theme_location' => 'subpage_menu',
                                'container' => 'ul',
                                'menu_class' => "side-menu",
                            ) );
                            ?>
                        </aside>
					</div>
				</div>
			</section>
		</main>
        
    

<?php get_footer(); ?>