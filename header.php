<?php
/**
 * The header
 *
 * @package WordPress
 * @subpackage nathalie-mota
 * @since nathalie-mota 1.0
 * @version 1.0
 * @author KeepCalmAndEatACookie
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<meta name="keywords" content="photographe événementiel, photographe event, nathalie mota, photo format hd"/>
	<meta name="description" content="Nathalie Mota - Site personnel pour la vente de mes photos en impression HD."/>
	<!--recuperation de la police utilisée sur le site-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

	<!-- Récupération sur Fontawesome des icones dont on aura besoin dans notre compte fontawesome-->
	<script src="https://kit.fontawesome.com/8b4f3289a2.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>	
	<header id="header" class="header flexrow">
		<div class="container-header flexrow">
			<a href="<?php echo home_url( '/' ); ?>" aria-label="Page d'accueil de Nathalie Mota">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_nathalie_mota.png" 
				alt="Logo <?php echo bloginfo('name'); ?>">
			</a>
			<nav id="navigation">
			<?php 
					// Affichage du menu main déclaré dans functions.php
					wp_nav_menu(array('theme_location' => 'main')); 
					?>
				<!--Ajout du bouton pour la version mobile-->	
				<button id="modal__burger" class="btn-modal" aria-label="Menu pour la version portable">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>
				<!--Ajout du menu pour la version mobile-->
                <div id="modal__content" class="modal__content">           
					<?php 				
					wp_nav_menu(array('theme_location' => 'main')); 
					?>
					
				
                </div>
			</nav>
		</div>
	</header>	

