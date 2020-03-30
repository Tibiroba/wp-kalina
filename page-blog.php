<?php 
// Template Name: Blog

 get_header(); ?>
<div class="container-fluid">
 <div class="row">
    <div class="col-12 cta-header-st" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/img/cta2.jpg'); height:100vh;">
            <div class="cta-title">
            <h1 class="title-cta"><?php wp_title();?></h1>
        </div>
        </div>
        <div class="col-12 divider">
			<hr>
		</div>
    </div>
    </div>
<?php 
while ( have_posts() ) : the_post();
 
                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
    
                get_template_part( 'content', get_post_format() );
                the_title();
                

the_content();
            // End the loop.
            endwhile; 
?>
 <div class="col-lg-7">
        <h3>Quer saber mais sobre os Pacotes Especiais Kalina Viagens?<br>Descubra mais roteiros personalizados.</h3>
      </div>
      <div class="col-lg-5" style="margin:auto 0;">
        <a class="btn btn-lg btn-secondary btn-block" href="#">Saiba mais</a>
      </div>
<?php get_footer();?>
