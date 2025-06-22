<?php // Template-part carte.php
// affiche une carte dans un cotneneur flex 
$lien = "<a class='conteneur__carte__lien' href=" . get_permalink() . ">Suite</a>"; //Sur WP tableau de bord > Réglages > Permaliens = "Nom de l'article" alors le lien est de la forme : https://www.monsite.com/nom-de-l-article/ ?>

<article class="conteneur__carte">
    <?php the_post_thumbnail('thumbnail'); ?>
    <h2><?php the_title(); // affiche le titre principal de "post" ?></h2>
    <p class="conteneur__conteneur__carte__paragraphe"><?= wp_trim_words(get_the_excerpt(), 10, $lien);
    //  the_excerpt() affiche un extrait des articles de la page d'accueil
    ?>
    </p>
    <small>Température minimum : <?php the_field('temperature_minimum'); ?>&deg;C.</small>
    <small>Température minimum : <?php the_field('temperature_minimum'); ?>&deg;C.</small>
    <small>Température moyenne : <?php the_field('temperature_moyenne'); ?>&deg;C.</small>
</article>