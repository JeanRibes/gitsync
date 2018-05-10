# Comment déployer
* Utiliser le conteneur *trafex/alpine-nginx-php7*
et **rajouter git** avec `apk --update add git`
* dans le dossier /var/www/html du conteneur:
  - `git init`
  - `git remote add origin https://github.com/BdEINSALyon/site-dev.git`
  - `git pull origin master && git branch --set-upstream-to=origin/master master`
* Changer les permissions sur `/var/www/html` en les donnant à nginx : 
```
chown -R nginx:nginx .
```
Bien vérifier que l'utilisateur nginx (utilisé pour exécuter les commandes PHP) a toutes les permissions sur /var/www/html et /var/www/html/.git

# Note
Pour que le site soit mis à jour automatiquement, il faut rajouter un webhook "push" dans ``https://url.du.site.tdl/hook.php``
Sinon en cliquant sur MaJ dans `/git.php` ça le fera
