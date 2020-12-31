# Exercice "Retro"

## Préparation
1. Télécharger le dossier `retro_depart` et le mettre sur le disque D:. Il s’agit de l’application Web que vous devez faire.
1. Ouvrir le dossier de l'application Web dans VSCode.
1. Démarrer le serveur dans le terminal à l'aide de l'instruction suivante :
    ```cmd
    php -S localhost:8000
    ```
1. Changer l’extension des fichiers `.html` en `.php`.
1. Visualiser la page `index.php` dans le fureteur en passant par l'adresse `localhost:8000`. Elle devrait bien s’afficher malgré le changement d’extension de fichier.
1. Ouvrir la page `index.php` dans VSCode.
1. Ouvrir également **TOUS** les fichiers du dossier sections.
## Modification
1. Trouver la portion du code HTML qui représente le logo avec son lien.
1. Copier et coller ce code dans le fichier `logo.inc.php`.
1. Remplacer ce code HTML dans `index.php` par la fonction `include`, qui pointe sur `logo.inc.php`. Ne pas oublier l’ouverture des codes PHP.
1. Sauvegarder les 2 fichiers et visualiser les changements dans le fureteur.
1. Répéter l’opération pour les fichiers `titre.inc.php`, `pub.inc.php`, `menu.inc.php`, `pied.inc.php` et finalement `entete.inc.php`.
1. Remarquer la simplification du code HTML et appliquer les changements aux autres pages du site.
## Particularités
1. Si l’opération a bien été faite, le fichier `entete.inc.php` devrait contenir également des commandes `include`. C’est très normal.
1. On doit modifier les liens du menu et du logo afin de refléter les changements d’extension de fichiers.

