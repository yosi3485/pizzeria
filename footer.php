
		<footer>
			
			<?php 

				$args = array (

					'theme_location' => 'header-menu',
					'container' => 'nav',
					'after' => '<span class="separate"> | </span>'
				);

				wp_nav_menu($args);

			?>

			<p class="copyright">Todos los derechos reservados <?php echo date('Y'); ?></p>

		</footer>


		<?php wp_footer(); ?>

	</body>
</html>