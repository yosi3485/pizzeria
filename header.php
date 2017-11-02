<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head() ?>
</head>
<body>

	<header class="header-site">
		
		<div class="container">
			
			<div class="logo">
				<a href="<?php echo esc_url( home_url('/') ); ?>">
					<img class="image-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg">
				</a>
			</div>

			<div class="info-header">
				<div class="social-networth">
					
					<?php 

						$args = array(
							
							'theme_location' => 'social-menu',
							'container' => 'nav',
							'container_class' => 'menu-social',
							'container_id' => 'menu-social',
							'link_before' => '<span class="sr-text">',
							'link_after' => '</span>'
						);

						wp_nav_menu($args);

					?>

				</div>
			</div>

		</div>

	</header>

		<div class="menu-principal">

			<div class="menu-mobile">
				<a href="#" class="mobile"><i class="fa fa-bars" aria-hidden="true"></i> Menu</a>
			</div>

			<div class="container navigation">
				
				<?php 

					$args = array(

						'theme_location' => 'header-menu',
						'container' => 'nav',
						'container_class' => 'menu-site',

					);

					wp_nav_menu ($args);

				?>

			</div>
		</div>
		