<?php
/**
 * Front page — Accueil de la Brasserie T&S
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
$products = bts_get_products();
?>

<!-- Hero -->
<section class="hero" id="accueil">
    <div class="container">
        <h1>L'art du brassage, au cœur du Nord</h1>
        <p>Bières artisanales et spiritueux d'exception, élaborés avec passion et respect du terroir des Hauts-de-France.</p>
        <a href="#produits" class="btn">Découvrir nos produits</a>
        <a href="#apropos" class="btn btn--outline">Notre histoire</a>
    </div>
</section>

<!-- À propos -->
<section id="apropos" class="alt">
    <div class="container">
        <div class="section-title">
            <span>Notre passion</span>
            <h2>Tradition &amp; savoir-faire</h2>
        </div>

        <div class="about">
            <div>
                <p>Nichée au cœur du nord de la France, la <strong>Brasserie Terroir &amp; Savoirs</strong> incarne la passion du brassage artisanal et la richesse des produits du terroir.</p>
                <p>Fondée par des amoureux de la bière et des spiritueux, notre brasserie associe tradition et innovation pour offrir des créations uniques, empreintes d'authenticité et de caractère.</p>
                <p>Grâce à une sélection rigoureuse des matières premières, nous élaborons des bières aux arômes subtils et équilibrés, ainsi que des spiritueux d'exception, distillés avec patience et savoir-faire.</p>
            </div>
            <div>
                <img src="<?php echo bts_img( 'logo.png' ); ?>" alt="Logo Brasserie T&amp;S">
            </div>
        </div>
    </div>
</section>

<!-- Produits -->
<section id="produits">
    <div class="container">
        <div class="section-title">
            <span>Notre gamme</span>
            <h2>Bières &amp; spiritueux</h2>
        </div>

        <div class="products-grid">
            <?php foreach ( $products as $p ) : ?>
                <article class="product-card"
                         data-slug="<?php echo esc_attr( $p['slug'] ); ?>"
                         data-name="<?php echo esc_attr( $p['name'] ); ?>"
                         data-image="<?php echo bts_img( $p['image'] ); ?>"
                         data-desc="<?php echo esc_attr( $p['desc'] ); ?>">
                    <div class="img-wrap">
                        <img src="<?php echo bts_img( $p['image'] ); ?>" alt="<?php echo esc_attr( $p['name'] ); ?>">
                    </div>
                    <h3><?php echo esc_html( $p['name'] ); ?></h3>
                    <p class="tagline"><?php echo esc_html( $p['tagline'] ); ?></p>
                    <div class="more">En savoir plus &rarr;</div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Contact -->
<section id="contact" class="alt">
    <div class="container">
        <div class="section-title">
            <span>Nous écrire</span>
            <h2>Contact</h2>
        </div>

        <div class="contact-grid contact">
            <div class="contact-info">
                <p><strong>Adresse</strong><br>
                Brasserie Terroir &amp; Savoirs<br>
                Hauts-de-France</p>

                <p><strong>Téléphone</strong><br>
                03 20 00 00 00</p>

                <p><strong>Email</strong><br>
                <a href="mailto:contact@brasserie-ts.fr">contact@brasserie-ts.fr</a></p>

                <p><strong>Horaires</strong><br>
                Du mardi au samedi<br>
                10h – 19h</p>
            </div>

            <div class="contact-form">
                <?php echo do_shortcode( '[wpforms id="22"]' ); ?>
            </div>
        </div>
    </div>
</section>

<!-- Modal produit -->
<div class="modal" id="product-modal" aria-hidden="true" role="dialog">
    <div class="modal-content">
        <button class="modal-close" aria-label="Fermer">&times;</button>
        <div class="img-wrap"><img src="" alt="" id="modal-img"></div>
        <div class="body">
            <h3 id="modal-title"></h3>
            <p id="modal-desc"></p>
        </div>
    </div>
</div>

<?php get_footer(); ?>
