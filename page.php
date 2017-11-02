<?php get_header(); ?>

	<?php while(have_posts()): the_post(); ?>

		
		<div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
			<div class="content-hero">
				<div class="text-hero">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>

		

		<div class="prinsipal container">
			<main class="text-center content-page">
				<?php the_content(); ?>
			</main>
		</div>

	<?php endwhile; ?>
	
<?php get_footer(); ?>