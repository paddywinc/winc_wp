</main>
<footer class="footer">
	<div class="social">
	
		<?php if( have_rows('social','option') ): 
		 while( have_rows('social','option') ): the_row(); 

			$email = get_sub_field('email','option');
			$facebook = get_sub_field('facebook','option');
			$twitter = get_sub_field('twitter','option');
			$instagram = get_sub_field('instagram','option');?>

				<?php
				if ($email) { ?>
				<a href="<?php echo $email;?>" target="_blank">
					<img class="icon " src="<?php bloginfo ('template_url');?>/assets/images/email.svg">
				</a>
				<?php } ?>

				<?php
				if ($facebook) { ?>
				<a href="<?php echo $facebook;?>" target="_blank">
					<img class="icon " src="<?php bloginfo ('template_url');?>/assets/images/facebook.svg">
				</a>
				<?php } ?>

				<?php
				if ($twitter) { ?>
				<a href="<?php echo $twitter;?>" target="_blank">
					<img class="icon " src="<?php bloginfo ('template_url');?>/assets/images/twitter.svg">
				</a>
				<?php } ?>

				<?php
				if ($instagram) { ?>
				<a href="<?php echo $instagram;?>" target="_blank">
					<img class="icon " src="<?php bloginfo ('template_url');?>/assets/images/instagram.svg">
				</a>
				<?php } ?>
		
		  <?php endwhile; endif; ?>
		
		</div>

		<div>
		© <?php echo date("Y"); ?>
			<?php the_field('footer_content','option');?>
		</div>	


	<div>
		Built by <a href="https://wincstudio.co.uk" target="_blank">Winc Studio</a>
	</div>
	<div>
		<a href="https://wincstudio.co.uk" target="_blank">
			<img class="icon is-pulled-right" src="<?php bloginfo ('template_url');?>/assets/images/winc.png">
		</a>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>