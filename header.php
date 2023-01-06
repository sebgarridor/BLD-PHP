<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blackdomino
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Bokor&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&display=swap"
        rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'blackdomino' ); ?></a>








	<header id="masthead" class="site-header">

        <div>
            <?php the_custom_logo(); ?>
        </div>
    <br>



    <nav class="navbar navbar-expand-lg fontbokor" id="fontsize">
        <div class="container">
            <button class="navbar-toggler" style="background-color: white;" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav">
    
                    <li class="nav-item">
                        <a class="margin_a" href="/">Inicio</a>
                    </li>
    
                    
    
    
                    <li class="nav-item" id="dropdown-productosresponsive">
                        <p>
                            <a class="margin_a" data-bs-toggle="collapse" href="#productos" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                Productos
                            </a>
                        </p>
                        <div class="collapse fontbokor" id="productos">
                            <a href="/product-category/poleras/">Poleras</a><hr>
                            <a href="polerones_polo.html">Polerones polo</a><hr>
                            <a href="polerones_hoodie.html">Polerones canguro</a><hr>
                            <a href="/product-category/totebags/">Totebags</a><hr>
                            <a href="/product-category/bandoleras/">Bandoleras</a><br>
                            
                        </div>
                    </li>
    
                    <li class="nav-item" id="dropdown-productos">
                        <div>
                            <a class="margin_a" href="" data-bs-toggle="dropdown" aria-expanded="false">Productos</a>
    
                            <ul class="dropdown-menu drop">
    
                                <div class="container">
    
                                    <div class="row" style="padding: 2rem;">
                                        <div class="col-3">
                                            <div class="card"
                                                style="width: 15rem; border-radius: 0%; border-color: #202020;  ">
                                                <a href="/product-category/poleras/"><img class="card-img-top "
                                                        style="background-color: #202020;"
                                                        src="<?php echo get_template_directory_uri();?>/img/JUNJI sin fondo figma.png"
                                                        alt="Card image cap"></a>
                                                <div style="background-color:#2D2D2D;">
                                                    <h5 class="card-title fontZenKaku">Poleras<h5>
                                                </div>
                                            </div>
                                        </div>
    
    
                                        <div class="col-3">
                                            <div class="card"
                                                style="width: 15rem; border-radius: 0%; border-color: #202020; ">
                                                <div class="hovercontainer" style="position: relative;">
                                                    <img class="card-img-top "
                                                    style="background-color: #202020;  height: 21rem;" src="<?php echo get_template_directory_uri();?>/img/polerón Eren titán.png" alt="Card image cap" id="poleronesphoto">
                                                    <div id="botones">
                                                        <button class="fontZenKaku" id="primerboton" onclick="location.href = '/polerones_polo.html';">Polerones polo</button>
                                                        <button class="fontZenKaku" id="segundoboton" onclick="location.href = '/polerones_hoodie.html';">Polerones canguro</button>
                                                    </div>
    
                                                </div>
    
                                                <div style="background-color:#2D2D2D;">
                                                    <h5 class="card-title fontZenKaku">Polerones</h5>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="col-3">
                                            <div class="card"
                                                style="width: 15rem; border-radius: 0%; border-color: #202020; ">
                                                <a href="/product-category/bandoleras"><img class="card-img-top "
                                                    style="background-color: #202020; height: 21rem;"
                                                    src="<?php echo get_template_directory_uri();?>/img/Bandolera EVA-01.png" alt="Card image cap"></a>
                                                <div style="background-color:#2D2D2D;">
                                                    <h5 class="card-title fontZenKaku">Bandoleras</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="card"
                                                style="width: 15rem; border-radius: 0%; border-color: #202020; ">
                                                <a href="/product-category/totebags/"><img class="card-img-top" style="background-color: #202020; "
                                                src="<?php echo get_template_directory_uri();?>/img/JUNJI sin fondo figma.png" alt="Card image cap"></a>
                                                <div style="background-color:#2D2D2D;">
                                                    <h5 class="card-title fontZenKaku">Totebags</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="margin_a" href="/preguntas-frecuentes/">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="margin_a" href="/comocomprar.html">Como Comprar</a>
                    </li>
            </div>
        </div>
    </nav>
	</header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
