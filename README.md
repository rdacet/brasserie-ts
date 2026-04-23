# Brasserie Terroir & Savoirs — Site vitrine WordPress

## 1. Contexte du projet

La **Brasserie Terroir & Savoirs**, artisan brasseur situé dans les Hauts-de-France, souhaite moderniser son image en se dotant d'un **site vitrine** pour présenter sa gamme de bières et spiritueux.

**Cahier des charges client :**

- Faire apparaître le logo de la brasserie
- Afficher des photos de la production (cuves de brassage)
- Respecter un code couleur **cuivré** (beige, ocre, marron, orange)
- Proposer une **barre de navigation** en haut de page
- Présenter les produits avec une possibilité de consulter les détails (popup ou page)
- Anticiper de **futures exigences** (contenu évolutif)

Le choix de **WordPress** est imposé par le sujet, mais la réalisation visuelle a été codée **from scratch** en PHP/HTML/CSS (thème sur mesure) plutôt que via un page builder, afin de démontrer la maîtrise technique.

## 2. Démo en ligne

🔗 **[https://rdacetbrasserie.free.nf](https://rdacetbrasserie.free.nf)** — hébergé sur Infinity Free

## 3. Architecture du thème

```text
brasserie-ts/
├── style.css          ← Header WordPress obligatoire + feuille de style complète
├── functions.php      ← Enregistrement des menus, enqueue assets, catalogue produits
├── header.php         ← <head>, bandeau légal, logo, navigation
├── footer.php         ← Pied de page + wp_footer()
├── front-page.php     ← Page d'accueil (hero + à propos + produits + contact)
├── page.php           ← Template pour pages statiques WordPress
├── index.php          ← Fallback obligatoire (liste d'articles)
├── README.md          ← Ce fichier
└── assets/
    ├── js/
    │   └── main.js    ← Menu burger + ouverture/fermeture modal
    └── img/
        ├── logo.png
        ├── hero.jpg
        └── produits-01.png … produits-05.png
```

## 4. Installation locale

```bash
# Cloner le dépôt dans le dossier des thèmes WP
cd wp-content/themes
git clone https://github.com/<ton-user>/brasserie-ts.git
```

Puis, dans l'admin WordPress :

1. **Apparence → Thèmes → Activer** le thème *Brasserie T&S*
2. **Réglages → Lecture** → "Une page statique" → choisir la page d'accueil
3. **Apparence → Menus** → créer un menu avec 4 items (ancres `/#accueil`, `/#apropos`, `/#produits`, `/#contact`) et l'assigner à l'emplacement **Menu principal**
4. Installer le plugin **WPForms Lite** → créer un formulaire de contact simple → récupérer son ID

## 5. Mise en ligne (Infinity Free)

1. Créer un compte sur [infinityfree.com](https://infinityfree.com) + un sous-domaine gratuit
2. Installer WordPress via **Script installer**
3. Zipper le dossier `brasserie-ts/`
4. **Apparence → Thèmes → Ajouter → Téléverser un thème** → sélectionner le .zip → **Installer** → **Activer**
5. Uploader les images manquantes (`hero.jpg`) directement dans `wp-content/themes/brasserie-ts/assets/img/` via le File Manager cPanel

## 6. Captures d'écran

| Page | Aperçu |
|---|---|
| Accueil (hero) | ![Hero](docs/screens/hero.png) |
| À propos | ![À propos](docs/screens/apropos.png) |
| Produits | ![Produits](docs/screens/produits.png) |
| Modal produit | ![Modal](docs/screens/modal.png) |
| Contact | ![Contact](docs/screens/contact.png) |
| Mobile | ![Mobile](docs/screens/mobile.png) |

## 7. Compétences

**Bloc 1 — Support et mise à disposition de services informatiques**
- Installation et configuration d'un CMS (WordPress)
- Déploiement sur hébergement mutualisé (Infinity Free, File Manager cPanel)

**Bloc 2 — Conception et développement**
- Développement d'un thème PHP/HTML/CSS
- Gestion du WP Form
- Accessibilité
- Versionnage avec Git

**Compétences autres**
- Rédaction de documentation technique (ce README)
- Prise en compte d'un cahier des charges client

**Auteur :** Romain Dacet — BTS SIO SISR — 2025/2027
