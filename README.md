# Site_cherie_japonais

## Mise en place de l'environnement de dev

> Prérequis : Apache HTTPd ou Nginx + PHP + dépendances

Créer un VHost qui pointe vers la racine du projet (ou un symlink vers la racine, par ex `/var/www/site_cherie_japonais` pointant vers le dossier racine).
Veuillez veiller à donner les accès en lecture et exécution au serveur web sur tous les dossiers parents dans l'arborescence (en particulier si le projet se situe dans votre `/home`, faites un petit `chmod a+rx /home/[monuser]`).

La seule configuration requise pour le VHost est de mettre les redirections des erreurs 403, 404 et 500 vers `/403.php`, `/404.php` et `/500.php`.
