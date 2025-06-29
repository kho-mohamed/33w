<?php
// Modèle catégorie.php permet d'afficher 
get_header(); ?>
<main>

  <section class="categorie">

    <?php
    if (have_posts()) {
      while (have_posts()) {
        echo "<div class='categorie__carte'>";
        the_post();
        // affiche l'image mise en avant de "post" miniature
        the_post_thumbnail('large');
        ?>
        <h1><?php the_title();
        // affiche le titre principal de "post" ?></h1>
        <?php the_content();
        echo "</div>";
      }
    } ?>
  </section>
</main>

<?php get_footer();
