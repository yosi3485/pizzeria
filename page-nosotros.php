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

		<div class="information-boxes container">

			<div class="box">
				<?php 

					$id_image = get_field('image_one');
					$image = wp_get_attachment_image_src($id_image, 'nosotros');
				?>
					<img src="<?php echo $image[0] ?>" class = "image-box" alt="Image about us">

				<div class="description-box">
					<?php the_field('description_one'); ?>
				</div>
			</div>

			<div class="box box-center">
				<?php 

					$id_image = get_field('image_two');
					$image = wp_get_attachment_image_src($id_image, 'nosotros');
				?>

				<div class="description-box">
					<?php the_field('description_two'); ?>
				</div>

				<img src="<?php echo $image[0] ?>" class = "image-box" alt="Image about us">

			</div>

			<div class="box">
				<?php 

					$id_image = get_field('image_three');
					$image = wp_get_attachment_image_src($id_image, 'nosotros');
				?>
					<img src="<?php echo $image[0] ?>" class = "image-box" alt="Image about us">

				<div class="description-box">
					<?php the_field('description_three'); ?>
				</div>
			</div>
			
		</div>

	<?php endwhile; ?>
	
<?php get_footer(); ?>