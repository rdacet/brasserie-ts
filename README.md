# Brasserie Terroir & Savoirs — Site vitrine WordPress

> Thème WordPress sur mesure développé en HTML / CSS / PHP pour la **Brasserie Terroir & Savoirs** (Hauts-de-France), dans le cadre du projet de fin de première année **BTS SIO SLAM**.

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

## 3. Stack technique

| Couche | Technologie |
|---|---|
| CMS | WordPress 6.x |
| Langages | PHP 8, HTML5, CSS3, JavaScript (Vanilla) |
| Hébergement | Infinity Free (Apache + PHP + MySQL) |
| Éditeur | VS Code |
| Gestion de version | Git + GitHub |
| Typographies | Playfair Display (titres) + Inter (texte) via Google Fonts |
| Plugin tiers | **WPForms Lite** pour le formulaire de contact |

**Zéro framework CSS / zéro builder** : tout est écrit à la main pour rester léger et pédagogiquement parlant.

## 4. Fonctionnalités

- ✅ Page d'accueil une seule page (one-page) avec ancres : Accueil, À propos, Produits, Contact
- ✅ Header sticky avec logo + menu administrable depuis WordPress
- ✅ Bandeau légal permanent « L'abus d'alcool est dangereux pour la santé »
- ✅ Hero visuel avec image de cuves de brassage
- ✅ Galerie produits (5 cartes : Blonde, Brune, IPA, Whisky, Gin)
- ✅ **Modal produit** : clic sur une carte → popup avec description complète
- ✅ Section À propos / Histoire de la brasserie
- ✅ Formulaire de contact fonctionnel (WPForms)
- ✅ **Responsive** mobile-first (breakpoints 720 / 860 px) avec menu burger
- ✅ **Accessibilité** : `aria-label`, `aria-expanded`, fermeture modal au clavier (Échap)
- ✅ Menu dynamique administrable (`register_nav_menus`) avec fallback en dur

## 5. Architecture du thème

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

### Points clés du code

**`functions.php`** — Le catalogue produits est **stocké en dur** dans une fonction PHP `bts_get_products()`. Pour ce site vitrine de 5 produits, c'est plus simple qu'un Custom Post Type. Migration facile vers un CPT si la gamme s'étend.

**`front-page.php`** — Passe les données produit via des `data-*` attributes sur chaque `<article class="product-card">`, lues ensuite en JS pour remplir la modal.

**`assets/js/main.js`** — 70 lignes de Vanilla JS, sans dépendance. Gère :
- le toggle du menu mobile (`aria-expanded`)
- l'ouverture de la modal au clic produit
- la fermeture (clic sur ×, clic en dehors, touche Échap)
- le blocage du scroll du body quand la modal est ouverte

## 6. Installation locale

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
5. Mettre à jour l'ID dans `front-page.php` si différent de `22` :
   ```php
   <?php echo do_shortcode( '[wpforms id="22"]' ); ?>
   ```

## 7. Mise en ligne (Infinity Free)

1. Créer un compte sur [infinityfree.com](https://infinityfree.com) + un sous-domaine gratuit
2. Installer WordPress via **Softaculous**
3. Zipper le dossier `brasserie-ts/` (attention : sous Windows, préférer un script `.NET ZipFile` pour garder des slashes `/` — Compress-Archive insère des `\` qui font échouer l'upload WP)
4. **Apparence → Thèmes → Ajouter → Téléverser un thème** → sélectionner le .zip → **Installer** → **Activer**
5. Uploader les images manquantes (`hero.jpg`) directement dans `wp-content/themes/brasserie-ts/assets/img/` via le File Manager cPanel

## 8. Choix techniques

| Choix | Raison |
|---|---|
| Thème sur mesure (pas Astra/Divi/Elementor) | Démontrer la maîtrise technique WordPress, HTML/CSS/PHP |
| One-page + ancres | Un site vitrine 5 produits ne justifie pas de multi-pages |
| Données produits en dur dans `functions.php` | Simplicité ; migration vers CPT facile si la gamme grandit |
| Modal JS plutôt que page dédiée | Meilleure UX (pas de rechargement) ; SEO secondaire pour un site vitrine |
| Vanilla JS | Pas besoin de jQuery, aucune dépendance externe, JS < 2 ko |
| Google Fonts (Playfair + Inter) | Contraste serif/sans-serif = élégance artisanale |
| Palette cuivrée via custom properties CSS | Maintenance simple, cohérence visuelle |

## 9. Captures d'écran

| Page | Aperçu |
|---|---|
| Accueil (hero) | ![Hero](docs/screens/hero.png) |
| À propos | ![À propos](docs/screens/apropos.png) |
| Produits | ![Produits](docs/screens/produits.png) |
| Modal produit | ![Modal](docs/screens/modal.png) |
| Contact | ![Contact](docs/screens/contact.png) |
| Mobile | ![Mobile](docs/screens/mobile.png) |

## 10. Compétences BTS SIO mobilisées

**Bloc 1 — Support et mise à disposition de services informatiques**
- Installation et configuration d'un CMS (WordPress)
- Déploiement sur hébergement mutualisé (Infinity Free, File Manager cPanel)

**Bloc 2 — Conception et développement d'applications**
- Développement d'un thème PHP/HTML/CSS sur mesure
- Gestion du responsive (mobile-first, media queries)
- Accessibilité (ARIA)
- Versionnage avec Git

**Compétences transverses**
- Rédaction de documentation technique (ce README)
- Prise en compte d'un cahier des charges client
- Respect des contraintes légales (bandeau d'avertissement sur l'alcool)

## 11. Licence

MIT — Voir le fichier [LICENSE](LICENSE).

---

**Auteur :** Romain Dacet — BTS SIO SLAM — 2026
**Professeur référent :** Augustin Lecomte — [www.pedagogeek.fr](https://www.pedagogeek.fr)
