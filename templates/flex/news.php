
<section class="padding" id="news">
	<div class="columns is-mobile is-centered">
		<h1>News</h1>
	</div>
	
	<div class="container">
		<div class="columns slider">
			<?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>
			<?php while ($the_query -> have_posts()) : $the_query -> the_post(); 
			$thumbnail = get_field('thumbnail');
			?>

			<div class="column is-one-third news-item">
		      <img src="<?php echo wp_get_attachment_image_src( get_field( 'thumbnail' ), 'news-thumb' )[0]; ?>">
				<div class="columns project-info">
					<div class="column">
						<h3><?php the_title(); ?></h3>
					</div>
					<div class="column">
						<a class="btn-small is-pulled-right" href="<?php the_permalink(); ?>">Read More</a>
					</div>
				</div>
			</div>

			<?php endwhile;
			wp_reset_postdata();
			?>

		</div>
	</div>
</section>