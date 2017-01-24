<?php get_header(); ?>
	<?php $format = get_post_format(); ?>
    <?php if($format=="video"){
		get_template_part("single","video");
		}
		else{
			get_template_part("single","genel");
			} ?>

<?php get_footer(); ?>