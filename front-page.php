<?php
//le modèle front-page permet d'afficher la page d'accueil
get_header(); ?>
<h1>------------Front-page.php</h1>
<main>
  <section class="hero">
    <div class="hero__content">
      <h1 class="hero__titre">Voyagez Autrement avec Club de Voyage !</h1>
      <p class="hero__description">
        Découvrez des destinations inoubliables avec Club de Voyage. Nous
        vous offrons des expériences uniques, des séjours authentiques et
        des paysages à couper le souffle. Partez à la découverte du monde
        avec nous et créez des souvenirs impérissables.
      </p>
      <div class="hero__contact">
        <a href="mailto:info@clubdevoyage.ca">info@clubdevoyage.ca</a>
        <p>123, rue des Explorateurs, Montréal</p>
        <p>514-123-4567</p>
      </div>
      <a href="#" class="button">S'inscrire</a>
      <div class="hero__reseaux-sociaux">
        <a href="#" class=""><img src="https://s2.svgbox.net/materialui.svg?ic=facebook&color=000" width="32"
            height="32" /></a>
        <a href="#" class=""><img src="https://s2.svgbox.net/social.svg?ic=instagram&color=000" width="32"
            height="32" /></a>
      </div>
    </div>
    <form action="" class="form">
      <div class="form__champ">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" required />
      </div>
      <div class="form__champ">
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" required />
      </div>
      <div class="form__champ">
        <label for="email">Courriel</label>
        <input type="email" id="email" name="email" required />
      </div>
      <div class="form__champ">
        <label for="telephone">Téléphone</label>
        <input type="tel" id="telephone" name="telephone" required />
      </div>
      <div class="form__submit">
        <input type="submit" value="S'inscrire" />
      </div>
    </form>
  </section>
  <section class="populaire">
    <div class="conteneur global">
      <?php
      if (have_posts()) {
        while (have_posts()) {
          the_post();
          // affiche l'image mise en avant de "post" miniature
          ?>
          <h2><?php the_title();
          // affiche le titre principal de "post" ?></h2>
          <?php
          if (in_category('galerie')) {
            get_template_part("gabarit/galerie");
          } else {
            get_template_part("gabarit/carte"); ?>

            <?php
          }
        }
      } ?>
    </div>
  </section>
</main>

<?php get_footer();
