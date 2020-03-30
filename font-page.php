<?php
// Template Name: Front-Page
get_header(); ?>

      
   
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
       
        <div class="carousel-item active" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/img/cta1.jpg')">
          <div class="carousel-caption d-none d-md-block">

  
        
          </div>
        </div>
       
        <div class="carousel-item" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/img/cta2.jpg')">
          <div class="carousel-caption d-none d-md-block">
           
          </div>
        </div>
      
        <div class="carousel-item" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/img/cta3.jpg')">
          <div class="carousel-caption d-none d-md-block">
          
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  
 
   
<div class="container main-body">
    <div class="row">
      <div class="col-lg-6 kalina-top">       
        <h3>Atender bem nossos clientes.<br>Isso é o que nos motiva diariamente.<br> Agilidade, transparência, honestidade e seriedade são pilares que sustentam o trabalho e nos conectam aos clientes.</h3>
      </div>
      <div class="col-lg-6 kalina-top-img">
        <img class="img-fluid rounded" src="<?php echo get_stylesheet_directory_uri();?>/img/kalina-colorido.png" alt="Kalina.jpg">
      </div>
    </div>
    <hr>
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-4">
          <div class="control">
            <h2><?php the_field('roteiros_home_1');?></h2>
         

            <div class="container-fade">
              <img src="<?php the_field('roteiros_image_1')?>" alt="Avatar" class="image">
              
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-4">
          <div class="control">
            <h2><?php the_field('roteiros_home_2');?></h2>
           

            <div class="container-fade">
              <img src="<?php the_field('roteiros_image_2')?>" alt="Avatar" class="image">
              <div class="overlay">
                <div class="text"><?php the_field('roteiros_home_txt-2');?></div>
              </div>
            </div>
          </div>
        </div> 

        <div class="col-12 col-lg-4">
          <div class="control">
            <h2><?php the_field('roteiros_home_3');?></h2>
           

            <div class="container-fade">
              <img src="<?php the_field('roteiros_image_3')?>" alt="Avatar" class="image">
              <div class="overlay">
                <div class="text"><?php the_field('roteiros_home_txt-3');?></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 dividider">
         <hr>
       </div>
       <div class="col-lg-7">
        <h3>Quer saber mais sobre os Pacotes Especiais Kalina Viagens?<br>Descubra mais roteiros personalizados.</h3>
      </div>
      <div class="col-lg-5" style="margin:auto 0;">
        <a class="btn btn-lg btn-secondary btn-block" href="#">Saiba mais</a>
      </div>
      <div class="col-12 dividider">
       <hr>
     </div>


     <!-- Div feedback -->
    
    <div class="col-12 col-sm-6 div-feedback">
        <a class="img-comms-link" href=""><img class="img-comms" src="https://via.placeholder.com/200x150" alt="feedback-1.jpg"></a>   
        <p class="txt-comms">Trabalho Incrível !! Fiquei super satisfeita com o atendimento e a viagem em todo!! Sucesso sempre :)</p>
    </div>
    
    <div class="col-12 col-sm-6 div-feedback">
       <a class="img-comms-link" href=""><img class="img-comms" src="https://via.placeholder.com/200x150" alt="feedback-2.jpg"></a>  
    <p class="txt-comms">Qualidade em atendimento ao cliente.</p>
    </div>

     <div class="col-12 col-sm-6 div-feedback">
        <a class="img-comms-link" href=""><img class="img-comms" src="https://via.placeholder.com/200x150" alt="feedback-3.jpg"></a> 
        <p class="txt-comms">Diferente de tudo o que eu conhecia em relação à agência de viagens. gratidão por tudo sempre</p>   
    </div>
    <div class="col-12 col-sm-6 div-feedback">

       <a class="img-comms-link" href=""><img class="img-comms" src="https://via.placeholder.com/200x150" alt="feedback-4.jpg"></a>
       <p class="txt-comms">Ótima companhia, recomendo dá um ótimo suporte, em tudo q precisamos</p>  
    </div>

 

  
     <!-- end row -->
   </div>
 </div>
 </div>

<div class="container">
  <div class="row">
    <div class="col-12">
     <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Name of Widgetized Area") ) : ?>
<?php endif;?>

 <!-- end main body -->
 </div>
 </div>
</div>

<!-- end roteiros -->

<?php get_footer(); ?>