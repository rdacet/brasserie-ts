<?php

/**
 * Brasserie T&S — functions.php
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

/* ------------------------------------------------------------
 * Supports & setup
 * ------------------------------------------------------------ */

function bts_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	register_nav_menus( array(
		'primary' => __( 'Menu principal', 'brasserie-ts' ),
	) );
}
add_action( 'after_setup_theme', 'bts_setup' );

/* ------------------------------------------------------------
 * Styles & scripts
 * ------------------------------------------------------------ */

function bts_enqueue_assets() {
	// Google Fonts
	wp_enqueue_style(
		'bts-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap',
		array(),
		null
	);

	// Feuille de style du thème
	wp_enqueue_style( 'bts-main', get_stylesheet_uri(), array( 'bts-fonts' ), wp_get_theme()->get( 'Version' ) );

	// JS
	wp_enqueue_script(
		'bts-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'bts_enqueue_assets' );

/* ------------------------------------------------------------
 * Helper : image du thème
 * ------------------------------------------------------------ */

function bts_img( $name ) {
	return esc_url( get_template_directory_uri() . '/assets/img/' . $name );
}

/* ------------------------------------------------------------
 * Fallback menu si l'admin n'a pas encore créé de menu
 * ------------------------------------------------------------ */

function bts_fallback_menu() {
	echo '<ul>';
	echo '<li><a href="' . esc_url( home_url( '/#accueil' ) ) . '">Accueil</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/#apropos' ) ) . '">À propos</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/#produits' ) ) . '">Produits</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/#contact' ) ) . '">Contact</a></li>';
	echo '</ul>';
}

/* ------------------------------------------------------------
 * Catalogue produits (données statiques pour le vitrine)
 * ------------------------------------------------------------ */

function bts_get_products() {
	return array(
		array(
			'slug'    => 'blonde',
			'name'    => 'Bière Blonde',
			'tagline' => 'Équilibre parfait entre douceur et amertume.',
			'image'   => 'produits-01.png',
			'desc'    => 'Légère et rafraîchissante, la bière blonde de la Brasserie Terroir & Savoirs séduit par son équilibre parfait entre douceur et amertume. Brassée avec des malts soigneusement sélectionnés et des houblons aromatiques, elle offre des notes subtiles de céréales et une touche florale. Sa robe dorée limpide et sa mousse onctueuse en font un classique incontournable, idéal pour accompagner des moments conviviaux.',
		),
		array(
			'slug'    => 'brune',
			'name'    => 'Bière Brune',
			'tagline' => 'Riche et intense, arômes torréfiés.',
			'image'   => 'produits-02.png',
			'desc'    => 'Riche et intense, la bière brune de la Brasserie Terroir & Savoirs dévoile une palette de saveurs profondes. Ses malts torréfiés révèlent des arômes de chocolat noir, de caramel et une légère pointe de café. Sa texture ronde et son caractère généreux en font une bière réconfortante, parfaite pour les amateurs de saveurs puissantes et complexes.',
		),
		array(
			'slug'    => 'ipa',
			'name'    => 'Bière IPA',
			'tagline' => 'Audacieuse, houblonnée, finale sèche.',
			'image'   => 'produits-03.png',
			'desc'    => 'Audacieuse et aromatique, la bière IPA (India Pale Ale) de la Brasserie Terroir & Savoirs se distingue par ses houblons expressifs et son amertume affirmée. Elle libère des arômes intenses d\'agrumes, de fruits tropicaux et de résine de pin. Avec son profil vibrant et sa finale sèche, cette IPA est un choix parfait pour les amateurs de bières modernes et audacieuses.',
		),
		array(
			'slug'    => 'gin',
			'name'    => 'Gin',
			'tagline' => 'Plantes aromatiques locales, zestes d\'agrumes.',
			'image'   => 'produits-04.png',
			'desc'    => 'Ce gin artisanal signé Brasserie Terroir & Savoirs est une véritable ode à la nature. Élaboré à partir de plantes aromatiques locales et d\'épices soigneusement sélectionnées, il combine des notes fraîches de genièvre, des zestes d\'agrumes et des touches herbacées. Sa complexité et sa pureté en font un spiritueux raffiné, idéal pour des cocktails sophistiqués ou une dégustation pure.',
		),
		array(
			'slug'    => 'whisky',
			'name'    => 'Whisky',
			'tagline' => 'Vieilli en fûts de chêne, notes de vanille et de tourbe.',
			'image'   => 'produits-05.png',
			'desc'    => 'Le whisky de la Brasserie Terroir & Savoirs est un hommage à l\'artisanat et au terroir. Distillé avec soin et vieilli en fûts de chêne, il révèle une richesse aromatique exceptionnelle : des notes de vanille, d\'épices douces, de fruits secs et une pointe de tourbe. Ronde et élégante, cette eau-de-vie offre une dégustation unique, parfaite pour les connaisseurs.',
		),
	);
}
