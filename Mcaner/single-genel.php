<?php get_header(); ?>
<div class="tümü row">
<div class="col-lg-8">
<div class="single">
	<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <h2> <?php the_title();?></h2>
    <p class="help-block"><?php _e( 'Kategori :' ); ?> <?php the_category( ', ' );?> <?php the_time('F jS, Y'); ?>, <?php comments_number( 'yorum yok', '1 yorum', '% yorum' ); ?>, by <?php the_author_posts_link(); ?>, <?php if(function_exists('the_views')) { the_views(); } ?></p>
    <p><?php the_content();?></p>
    <!----------------------------- Özel Alan Kodu  ------------------>
	<?php $fiyat=get_post_meta( get_the_ID(),$key = 'fiyat',$single = false );
	foreach($fiyat as $deger){
		echo $deger." , ";
		}
	 ?>
    <?php echo get_the_tag_list('<div>Etiketler: ',' , ','</div>'); ?>
     <?php endwhile; ?>
    <?php else : ?>
    Bu kategoride makale bulunmuyor.
    <?php endif; ?>
   
    </div>
    
    <div class="pull-left"><?php previous_post_link("%link","<- Önceki"); ?></div>
    <div class="pull-right"><?php next_post_link("%link","Sonraki ->"); ?></div>
    <div class="clearfix"></div>
   
    <hr >
    <?php comments_template();?>
    <hr >
</div>
    <div class="sagtaraf col-lg-4">
    
    <?php get_sidebar(); ?>
    
    </div>
</div>