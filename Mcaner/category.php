<?php get_header(); ?>
<div class="container">
		<h4><em><b><?php single_cat_title(); ?></b></em></h4>
        <ul class="kategoriler">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php $format = get_post_format(); ?>
    <?php if($format=='quote') { ?>   <!-- Alıntı gösterme Bölümü -->
    <div class="well"><?php the_content(); ?></div>
    <?php } elseif($format=='video') { ?> <!-- Video gösterme Bölümü -->
    	<li>
        <div class="col-lg-4">
        		<?php echo get_post_meta( get_the_ID(),$key = 'video',$single = true ); ?>
            
            </div>
        
        <div class="col-lg-8">
         <a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>"><?php the_title();?> 	&nbsp;	&nbsp;(<small><?php the_time('F jS, Y') ?></small>)</a>
    <p class="text-muted"> <?php the_excerpt(); ?></p>
        </div>
        <div class="clearfix"></div>
    </li>
    
    
    <?php } else{ ?>
    <li>
    	<div class="col-lg-4">
	<?php         // check if the post has a Post Thumbnail assigned to it.
		if ( has_post_thumbnail() ) {
		the_post_thumbnail("bizimresim");
		}
		else {?>
			<img  class="responsive" src="<?php bloginfo("stylesheet_directory")?>/images/fotoyok.png" alt="thumbnail">;
			<?php }
     ?>

        </div>
        
        <div class="col-lg-8">
         <a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>"><?php the_title();?> 	&nbsp;	&nbsp;(<small><?php the_time('F jS, Y') ?></small>)</a>
    <p class="text-muted"> <?php the_excerpt(); ?></p>
        </div>
        <div class="clearfix"></div>
    </li>
    <?php } ?>
     
            
    
            <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </ul>
                 
            
</div>

<?php get_footer(); ?>