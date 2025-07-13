(function () {
  console.log("Initialisation du carrousel");

  const carrousels = document.querySelectorAll(".carrousel");
  const radios = document.querySelectorAll(".carrousel__radio");

  // Vérifier que nous avons des éléments
  if (carrousels.length === 0 || radios.length === 0) {
    console.log("Aucun élément carrousel trouvé");
    return;
  }

  console.log(
    `Trouvé ${carrousels.length} images et ${radios.length} boutons radio`
  );

  radios.forEach((radio, index) => {
    radio.addEventListener("change", () => {
      console.log(`Radio ${index} sélectionné`);

      // Masquer toutes les images
      carrousels.forEach((carrousel) => {
        carrousel.style.opacity = 0;
      });

      // Afficher l'image correspondante
      if (carrousels[index]) {
        carrousels[index].style.opacity = 1;
      }
    });
  });
})();
