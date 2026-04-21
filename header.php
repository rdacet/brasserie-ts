<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Brasserie Terroir &amp; Savoirs — Bières et spiritueux artisanaux des Hauts-de-France.">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="age-warning">
    L'abus d'alcool est dangereux pour la santé. À consommer avec modération.
</div>

<header class="site-header">
    <div class="container">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
            <img src="<?php echo bts_img( 'logo.png' ); ?>" alt="Logo Brasserie Terroir &amp; Savoirs">
            <span class="site-title">
                Brasserie T&amp;S
                <small>Terroir &amp; Savoirs</small>
            </span>
        </a>

        <button class="nav-toggle" aria-label="Ouvrir le menu" aria-expanded="false">&#9776;</button>

        <nav class="main-nav" aria-label="Navigation principale">
            <?php
            if ( has_nav_menu( 'primary' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => '',
                    'depth'          => 1,
                ) );
            } else {
                bts_fallback_menu();
            }
            ?>
        </nav>
    </div>
</header>

<main id="site-main">
