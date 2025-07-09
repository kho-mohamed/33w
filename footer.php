<?php
$footer_couleur = "#a9a9a9";
vague("#fffff", $footer_couleur); ?>
<footer class="piedpage" style="background-color: <?= $footer_couleur ?> ;">
    <div class="global piedpage__bloc">
        <section class="piedpage__ligne-1">
            <div class="piedpage__lien">
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav"
                )) ?>
            </div>
            <div class="piedpage__adresse">
                <h4>Adresse et recherche</h4>
                <span>adresse : 698 rue notre dame montreal</span>
                <div class="piedpage__recherche"><?php get_search_form() ?></div>
            </div>

            <div class="piedpage__description">Notre mission est d'inspirer et d'informer nos membres sur des
                destinations de voyage qui répondent à leurs attentes. Nous favorisons les échanges et le partage
                d’expériences à travers des activités sociales variées, telles que des rencontres, des conférences et
                des dîners.</div>
        </section>
        <section class="piedpage__ligne-2">
            <div class="piedpage__icone">
                <div class="piedpage__icone">

                    <?php icone_sociaux('#000000') ?>

                </div>
            </div>
        </section>

    </div>

</footer>
<script src="script/checkbox.js"></script>

</body>
<?php wp_footer(); ?>

</html>