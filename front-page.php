<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blackdomino
 */

get_header();
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bokor&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&display=swap"
    rel="stylesheet">

  <?php wp_head(); ?>
</head>
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="<?php echo get_template_directory_uri(); ?>/img/slider01img.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="10000">
      <img src="<?php echo get_template_directory_uri(); ?>/img/slider02img.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="10000">
      <img src="<?php echo get_template_directory_uri(); ?>/img/slider03img.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden"></span>
  </button>
</div>

<br>

<br>
<div class="seccionmedio">
  <h1 class="homeh1">Destacados</h1>
  <br>
  <div class="container ">

    <div class="row">
      <div class="col">
        <div class="card">
          <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/destacados_1.jpeg"
            alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Totebag Eva-01</h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/destacados_2.jpeg"
            alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Bandolera Akira</h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/destacados_3.jpeg"
            alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Polerón Misato Eva-01</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>

  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card">
          <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/destacados_4.jpeg"
            alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Bandolera Eva-01</h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/destacados_5.jpeg"
            alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Gen'ei Ryodan Tee</h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/destacados_6.jpeg"
            alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Hisoka Tee</h5>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<br>
<div class="seccionmedio">
  <h1 class="homeh1" style="text-align: center ;">Novedades</h1>
  <br>
  <div class="container ">
    <?php echo do_shortcode('[recent_products columns=3 limit=6]'); ?>
  </div>
  <?php
  while (have_posts()):
    the_post();

    get_template_part('template-parts/content', 'page');

    // If comments are open or we have at least one comment, load up the comment template.
    if (comments_open() || get_comments_number()):
      comments_template();
    endif;

  endwhile; // End of the loop.
  ?>



  <?php
  get_footer();
  ?>