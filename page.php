<?php
//Template Name: page.php
 get_header(); ?>
<div class="container">
	<div class="row">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<div class="col-"><h2><?php the_title(); ?></h2></div>	
	<div class="col-8"><p><?php the_content(); ?></p></div>
	<div class="col-4"><img src="<?php the_field('custom_img_1')?>"></div>	

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>
</div>
<?php
get_footer();
?>