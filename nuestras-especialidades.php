<?php 
/*
*	Template Name: Especialidades
*/



get_header(); ?>

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

	<div class="nuestras-especialidades container">
		<h3>Pizzas</h3>

		<div class="container-grid">
		
			<?php 

			$args = array(
				'post_type' => 'especialidades',
				'posts_per_page' => -1,
				'orderby' => 'title',
				'order' => 'ASC',
				'category_name' => 'pizzas'
			);
			$pizzas = new WP_Query($args);
			while ($pizzas->have_posts()): $pizzas->the_post();
			?>

			<div class="">
				
				<?php the_post_thumbnail('especialidades'); ?>

				<div class="text-especialidades">
					<h4><?php the_title(); ?> <span>$<?php the_field('precio'); ?></span></h4>
					<?php the_content(); ?>
				</div>

			</div>

			<?php endwhile; wp_reset_postdata(); ?>
		</div>

	</div>
	
<?php get_footer(); ?>