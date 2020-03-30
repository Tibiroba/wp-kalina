<?php 
// Template Name: Roteiros 
get_header();
?>
<div class="container-fluid">
 <div class="row">
    <div class="col-12 cta-header-st" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/img/cta3.jpg'); height:100vh;">
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
      <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
        <div class="card-h">
          <a href="#"><img class="card-img-top" src="<?php the_field('image_roteiro_1');?>" alt="img-roteiro"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#"><?php the_field('roteiro_title_1');?></a>
            </h4>
            <p class="card-text"><?php the_field('roteiro_texto_1');?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
        <div class="card-h">
          <a href="#"><img class="card-img-top" src="<?php the_field('image_roteiro_2');?>" alt="img-roteiro"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#"><?php the_field('roteiro_title_2');?></a>
            </h4>
            <p class="card-text"><?php the_field('roteiro_texto_2');?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
        <div class="card-h">
          <a href="#"><img class="card-img-top" src="<?php the_field('image_roteiro_3');?>" alt="img-roteiro"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#"><?php the_field('roteiro_title_3');?></a>
            </h4>
            <p class="card-text"><?php the_field('roteiro_texto_3');?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
        <div class="card-h">
          <a href="#"><img class="card-img-top" src="<?php the_field('image_roteiro_4');?>" alt="img-roteiro"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#"><?php the_field('roteiro_title_4');?></a>
            </h4>
            <p class="card-text"><?php the_field('roteiro_texto_4');?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
        <div class="card-h">
          <a href="#"><img class="card-img-top" src="<?php the_field('image_roteiro_5');?>" alt="img-roteiro"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#"><?php the_field('roteiro_title_5');?></a>
            </h4>
            <p class="card-text"><?php the_field('roteiro_texto_5');?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
        <div class="card-h">
          <a href="#"><img class="card-img-top" src="<?php the_field('image_roteiro_6');?>" alt="img-roteiro"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#"><?php the_field('roteiro_title_6');?></a>
            </h4>
            <p class="card-text"><?php the_field('roteiro_texto_6');?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
        <div class="card-h">
          <a href="#"><img class="card-img-top" src="<?php the_field('image_roteiro_7');?>" alt="img-roteiro"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#"><?php the_field('roteiro_title_7');?></a>
            </h4>
            <p class="card-text"><?php the_field('roteiro_texto_7');?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
        <div class="card-h">
          <a href="#"><img class="card-img-top" src="<?php the_field('image_roteiro_8');?>" alt="img-roteiro"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#"><?php the_field('roteiro_title_8');?></a>
            </h4>
            <p class="card-text"><?php the_field('roteiro_texto_8');?></p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 divider"><hr></div>

    <!-- /.row -->

    <!-- Pagination 
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">«</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">1</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">2</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">3</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">»</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul> --> 

  </div>
<?php get_footer(); ?>