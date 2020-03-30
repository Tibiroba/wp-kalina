<?php 
// Template Name: Home

 get_header(); ?>
 <div class="container-fluid">
 <div class="row">
    <div class="col-12 cta-header-st" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/img/cta1.jpg'); height:100vh;">
            <div class="cta-title">
            <h1 class="title-cta"><?php wp_title();?></h1>
        </div>
        </div>
        <div class="col-12 divider">
            <hr>
        </div>
    </div>
    </div>
</div>
 <div class="container">
   <div class="row">
    <div class="col-12 divider"><hr><h1> Blog</h1></div>
    <div class="col-12 col-md-5">
  <img src="https://via.placeholder.com/400x300">
</div>

<div class="col-12 col-md-7">
<?php 
while ( have_posts() ) : the_post(); ?>

 <h2><?php the_title(); ?></h2>
 <p><?php the_content();?></p>
 <?php 
                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part( 'content', get_post_format() );


            // End the loop.
            endwhile;

?>
</div>

</div>
 </div>
<?php get_footer();?>
