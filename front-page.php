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

	<main id="primary" class="site-main">
	<br>
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="<?php echo get_template_directory_uri();?>/img/slider01img.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="<?php echo get_template_directory_uri();?>/img/slider02img.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php echo get_template_directory_uri();?>/img/slider03img.jpg" class="d-block w-100" alt="...">
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
  <div class="seccionmedio">
    <h1>Destacados</h1>
    <br>
    <div class="container ">

      <div class="row">
        <div class="col">
          <div class="card">
            <img class="card-img-top" src="assets/img/destacados_1.jpeg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Totebag Eva-01</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img class="card-img-top" src="assets/img/destacados_2.jpeg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Bandolera Akira</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img class="card-img-top" src="assets/img/destacados_3.jpeg" alt="Card image cap">
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
            <img class="card-img-top" src="assets/img/destacados_4.jpeg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Bandolera Eva-01</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img class="card-img-top" src="assets/img/destacados_5.jpeg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Gen'ei Ryodan Tee</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img class="card-img-top" src="assets/img/destacados_6.jpeg" alt="Card image cap">
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
    <h1 style="text-align: center ;">Novedades</h1>
    <br>
    <div class="container ">

      <div class="row">
        <div class="col">
          <div class="card">
            <img class="card-img-top card_color" src="assets/img/Poleras sin fondo/AKIRA sin fondo1.png"
              alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Akira Tee</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img class="card-img-top card_color" src="assets/img/Poleras sin fondo/Chrollo Lucifer sin fondo.png"
              alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Chrollo Lucifer Tee</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img class="card-img-top card_color" src="assets/img/JUNJI sin fondo figma.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Junji Ito Tee</h5>
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
            <img class="card-img-top card_color" src="assets/img/poleron Dragonball.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Polerón Dragon Ball</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img class="card-img-top card_color" src="assets/img/Bandolera EVA-01.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Bandolera EVA-01</h5>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img class="card-img-top card_color" src="assets/img/polerón Eren titán.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Polerón Eren Titán</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
?>