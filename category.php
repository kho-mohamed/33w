<?php
// Modèle catégorie.php permet d'afficher 
get_header(); ?>
<h1>---catégorie.php</h1>
<main>

  <section class="populaire">
    <?php
    if (have_posts()) {
      while (have_posts()) {
        the_post();
        // affiche l'image mise en avant de "post" miniature
        the_post_thumbnail('thumbnail');
        ?>
        <h1><?php the_title();
        // affiche le titre principal de "post" ?></h1>

        <?php the_content();
      }
    } ?>
  </section>
</main>

<?php get_footer();
