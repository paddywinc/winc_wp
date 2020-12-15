<?php
get_header();
?>
	<article class="container">
			<h1><?php the_title(); ?></h1>

			
		<?php get_template_part( 'templates/content-flex' );?>
		<?php get_template_part( 'templates/flex/news' );?>

	</article>
<?php
get_footer();
