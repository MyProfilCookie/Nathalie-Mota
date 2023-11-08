<?php
  // PAGE RECHERCHE
  get_header();
  echo ('search.php');
?>

<!--contenu utilisé pour la page archive afin de ne pas dupliquer le code -->
<!--la page archive est utilisée pour la page d'accueil et la page blog -->
<?php get_template_part( 'archive' ); ?>

<?php get_footer(); ?>
