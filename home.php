<?php
/**
 * The Home : ACCUEIL BLOG
 *
 * @package WordPress
 * @subpackage nathalie-mota theme
 * @since nathalie-mota theme 1.0
 * @version 1.0
 * @author KeepCalmAndEatACookie
 */


  get_header();
?>

<!--contenu utilisé pour la page archive afin de ne pas dupliquer le code -->
<!--la page archive est utilisée pour la page d'accueil et la page blog -->

<?php get_template_part( 'archive' ); ?>

<?php get_footer(); ?>