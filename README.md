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
## 4. Mise en ligne (Infinity Free)

1. Créer un compte sur [infinityfree.com](https://infinityfree.com) + un sous-domaine gratuit
2. Installer WordPress via **Script installer**
3. Zipper le dossier `brasserie-ts/`
4. **Apparence → Thèmes → Ajouter → Téléverser un thème** → sélectionner le .zip → **Installer** → **Activer**
5. Uploader les images manquantes (`hero.jpg`) directement dans `wp-content/themes/brasserie-ts/assets/img/` via le File Manager cPanel

## 5. Captures d'écran

Acceuil :<img width="2559" height="1263" alt="image" src="https://github.com/user-attachments/assets/1df30eb1-6da7-41c0-9dda-1aacdbd457df" />

A propos : <img width="2559" height="1165" alt="image" src="https://github.com/user-attachments/assets/47ac8990-cf02-4f45-b4c7-faaab4a7d0a1" />

Produit : 

Contact : <img width="2559" height="1155" alt="image" src="https://github.com/user-attachments/assets/f7a6672b-5457-41bc-b242-24186ee49f35" />


**Auteur :** Romain Dacet — BTS SIO SISR — 2025/2027
