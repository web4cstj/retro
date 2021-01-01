# Exercice "Retro orienté objet"
Une classe PHP qui affiche du HTML. Cet exercice fait suite à l'exercice Retro.

## Préparation
1. Installer l'application "`retro-master`" (branche `master`).

## Directives
1. Créer le fichier vide `Retro.php`
1. Dans le fichier, créer la classe `Retro`
1. Ajouter les méthodes **statiques** suivantes :
    - html_titre()
    - html_logo()
    - html_menu()
    - html_pied()
    - html_pub()
    - html_entete() 
1. Programmer ces méthodes pour qu'elles **RETOURNENT** le contenu de leurs fichiers respectifs retrouvés dans le dossier "sections". Important: Faire un copier-coller du contenu et non un include dans la méthode.
    ```php
    static public function html_exemple() {
        $resultat = '';
        $resultat .= '<h1>Ceci est un exemple</h1>';
        return $resultat;
    }
    ```
1. Dans chacune des pages PHP
    1. Faire l'inclusion du fichier d'objet.
    1. Remplacer les instructions `include` par les `echo` apropriés.
1. Supprimer le dossier "sections".

