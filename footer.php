<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blackdomino
 */

?>

<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col" id="logofooter">
                    <img class="imgconfig" src="/img/Symbol_White_135px.png" alt="">
                    <div class="rrss">
                        <a href=""><img class="imgconfig" src="./assets/img/iconmail.png" alt=""></a>
                        <a href="https://www.instagram.com/blackdomino.atelier/"><img class="imgconfig"
                                src="./assets/img/instagramIcon.png" alt="ig logo"></a>
                        <a href="https://www.facebook.com/people/Blacky-Domino/100079510762644/"><img class="imgconfig"
                                src="./assets/img/facebookicon.png" alt="fb logo"></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h5 class="FT">Sobre Nosotros</h5>
                    <p>Las mejores serigrafías <br> desde 2013.</p>
                </div>
                <div class="footer-col">
                    <h5>Ayuda</h5>
                    <p>
                        <a href="/preguntasfrecuentes.html">Preguntas frecuentes</a><br>
                        <a href="/comocomprar.html">Cómo comprar</a><br>
                        <a href="/Tallaje.html">Tallaje</a><br>
                    </p>
                </div>
                <div class="footer-col">
                    <h5 class="FT">Horario</h5>
                    <p><b>Lunes a Viernes</b> <br> 11:30 hrs.<br>
                        <b>Sábado</b> <br> 11:00 a 16:00 hrs.
                    </p>
                </div>
                <div class="footer-col">
                    <h5 class="FT">Productos</h5>
                    <p>
                        <a href="/Bandoleras.html"> Bandoleras</a><br>
                        <a href="/Totebag.html"> Totebags</a><br>
                        <a href="/poleras.html"> Poleras</a><br>
                        <a href="polerones.html"> Polerones</a><br>
                        <a href="/colecciones.html"> Colecciones</a>
                    </p>
                </div>
                <div class="footer-col" id="metodosdepago">
                    <img class="imgconfig" src="./assets/img/webpay.png" alt="webpay" style="width: 9rem;"> <br>
                    <img class="imgconfig" src="./assets/img/khipu.png" alt="khipu">
                </div>
                <div class="footer-col" id="logofooter2">
                    <div class="rrss">
                        <a href=""><img class="imgconfig" src="./assets/img/iconmail.png" alt=""></a>
                        <a href="https://www.instagram.com/blackdomino.atelier/"><img class="imgconfig"
                                src="/img/facebookicon.png" alt="ig logo"></a>
                        <a href="https://www.facebook.com/people/Blacky-Domino/100079510762644/"><img class="imgconfig"
                                src="./assets/img/facebookicon.png" alt="fb logo"></a>
                    </div>
                </div>
            </div>
        </div>
        
    </footer>

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'blackdomino' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'blackdomino' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'blackdomino' ), 'blackdomino', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
