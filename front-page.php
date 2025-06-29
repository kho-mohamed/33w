<?php
//le modèle front-page permet d'afficher la page d'accueil
get_header(); ?>
<main>
  <section class="hero">
    <?php get_template_part("gabarit/hero"); ?>
  </section>
  <section class="populaire">
    <?php get_template_part("gabarit/populaire"); ?>
  </section>
</main>

<?php get_footer();
