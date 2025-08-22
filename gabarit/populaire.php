<div class="conteneur global">
    <?php
    require_once get_template_directory() . '/functions/carte_a_retirer.php';
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            // affiche l'image mise en avant de "post" miniature
            ?>
            <?php
            if (in_category('galerie')) {
                get_template_part("gabarit/galerie");
            } else {
                get_template_part("gabarit/carte"); ?>

                <?php
            }
        }
    } ?>

    <section class="populaire__destination"><?= carte('Populaire'); ?></section>
</div>