<?php
// on va crée un carrousel dont le nombre d'image est configurable

$nbImage = get_theme_mod("nb_image_carrousel", 3);

// il faut faire une boucle ici pour récupérer les images du carrousel
for ($i = 0; $i < $nbImage; $i++) {
    $hero_background[$i] = get_theme_mod("hero_background_$i");
    $opacity = ($i === 0) ? '1' : '0'; // juste la premiere page qui est visible
}
?>

<!-- Les divs carrousel sont toujours présents pour que le JS fonctionne -->
<?php for ($i = 0; $i < $nbImage; $i++): ?>
    <div class="carrousel"
        style="background-image: url('<?= $hero_background[$i] ? $hero_background[$i] : '' ?>'); opacity:<?= $opacity ?>;">
    </div>
<?php endfor; ?>

<form class="carrousel__form">
    <?php for ($i = 0; $i < $nbImage; $i++): ?>
        <input type="radio" class="carrousel__radio" name="carrousel__radio" <?= $i === 0 ? 'checked' : '' ?>>
    <?php endfor; ?>
</form>