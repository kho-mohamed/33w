<?php
// Fonction pour afficher la liste des catégories sauf celle à retirer
function carte($cat_a_retirer)
{
    // Récupère toutes les catégories
    $categories = get_categories(array(
        'hide_empty' => false
    ));
    echo '<ul class="populaire__list">';
    foreach ($categories as $cat) {
        // Exclure la catégorie à retirer (par nom)
        if ($cat->name !== $cat_a_retirer) {
            echo '<li class="populaire__item" style="transition: box-shadow 0.3s;">';
            echo '<a href="' . get_category_link($cat->term_id) . '" class="populaire__link">' . esc_html($cat->name) . '</a>';
            echo '</li>';
        }
    }
    echo '</ul>';
}
?>