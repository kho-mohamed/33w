<footer class="piedpage">
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
                <div class="piedpage__icone"> <a href="#" class="socieaux"><img
                            src="https://s2.svgbox.net/materialui.svg?ic=facebook&color=000" width="32"
                            height="32" /></a>
                    <a href="#" class="sociaux"><img src="https://s2.svgbox.net/social.svg?ic=instagram&color=000"
                            width="32" height="32" /></a>
                </div>
            </div>
        </section>

    </div>

</footer>
<script src="script/checkbox.js"></script>

</body>
<?php wp_footer(); ?>

</html>