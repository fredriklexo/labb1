<?php
    /* Template Name: Homepage */
    get_header();
?>

        <main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-6">
                            <h1><?php the_title(); ?></h1>
                            <p><?php the_content(); ?></p>						
                        </div>
						<div class="col-xs-12 col-sm-4 col-md-6">
							<?php the_post_thumbnail(); ?>
						</div>
					</div>
				</div>
			</section>
		</main>
    
     
</main>
<?php get_footer(); ?>