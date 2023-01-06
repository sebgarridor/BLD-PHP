<?php
/**
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
<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col" id="logofooter">
                    <img class="imgconfig" src="<?php echo get_template_directory_uri();?>/img/Symbol_White_135px.png" alt="">
                    <div class="rrss">
                        <a href=""><img class="imgconfig" src="<?php echo get_template_directory_uri();?>/img/iconmail.png" alt=""></a>
                        <a href="https://www.instagram.com/blackdomino.atelier/"><img class="imgconfig"
                                src="<?php echo get_template_directory_uri();?>/img/instagramIcon.png" alt="ig logo"></a>
                        <a href="https://www.facebook.com/people/Blacky-Domino/100079510762644/"><img class="imgconfig"
                                src="<?php echo get_template_directory_uri();?>/img/facebookicon.png" alt="fb logo"></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h5 class="FT">Sobre Nosotros</h5>
                    <p>Las mejores serigrafías <br> desde 2013.</p>
                </div>
                <div class="footer-col">
                    <h5>Ayuda</h5>
                    <p>
                        <a href="/preguntasfrecuentes">Preguntas frecuentes</a><br>
                        <a href="/comocomprar">Cómo comprar</a><br>
                        <a href="/Ta">Tallaje</a><br>
                    </p>
                </div>
                <div class="footer-col">
                    <h5 class="FT">Horario</h5>
                    <p><b>Lunes a Viernes</b> <br> 11:30 a 19.00 hrs.<br>
                        <b>Sábado</b> <br> 11:00 a 16:00 hrs.
                    </p>
                </div>
                <div class="footer-col">
                    <h5 class="FT">Productos</h5>
                    <p>
                        <a href="/Bandoleras"> Bandoleras</a><br>
                        <a href="/Totebag"> Totebags</a><br>
                        <a href="/poleras"> Poleras</a><br>
                        <a href="polerones"> Polerones polo</a><br>
                        <a href="/colecciones"> Polerones canguro</a>
                    </p>
                </div>
                <div class="footer-col" id="metodosdepago">
                    <img class="imgconfig" src="<?php echo get_template_directory_uri();?>/img/webpay.png" alt="webpay" style="width: 9rem;"> <br>
                    <img class="imgconfig" src="<?php echo get_template_directory_uri();?>/img/khipu.png" alt="khipu">
                </div>
                <div class="footer-col" id="logofooter2">
                    <div class="rrss">
                    <a href="mailto:blackdomino.atelier@gmail.com"><img class="imgconfig"
                                src="<?php echo get_template_directory_uri();?>/img/iconmail.png" alt="gmaillogo" ></a>
                        <a href="https://www.instagram.com/blackdomino.atelier/"> <img class="imgconfig" src="<?php echo get_template_directory_uri();?>/img/instagramIcon.png" alt="ig logo"></a>
                        <a href="https://www.facebook.com/people/Blacky-Domino/100079510762644/"><img class="imgconfig"
                                src="<?php echo get_template_directory_uri();?>/img/facebookicon.png" alt="fb logo"></a>
                    </div>
                </div>
            </div>
        </div>
        
    </footer>
    <h6 class="noti">©2022 Squirr3l - Todos los derechos reservados </h6>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
