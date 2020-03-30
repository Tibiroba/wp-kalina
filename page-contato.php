<?php 
// Template Name: Contato
get_header();
?>
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
    <div class="container">
    	<div class="row">
    		<div class="col-12" style="text-align:center;">
	<h2>Entre em contato com a Kalina</h2>
<?php echo do_shortcode( '[contact-form-7 id="71" title="Fale Conosco"]' ); ?>

</div>
    		
    	
	 <div class="col-lg-7">
        <h3>Quer saber mais sobre os Pacotes Especiais Kalina Viagens?<br>Descubra mais roteiros personalizados.</h3>
      </div>
      <div class="col-lg-5" style="margin:auto 0;">
        <a class="btn btn-lg btn-secondary btn-block" href="#">Saiba mais</a>
      </div>

</div>
    </div>
<?php
get_footer();
?>