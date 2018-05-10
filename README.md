# Comment déployer
* Utiliser le conteneur https://github.com/mtxr/docker-php-nginx
et rajouter git avec `apk add git`
* dans le dossier /www du conteneur:
  - `git init`
  - `git remote add origin https://github.com/BdEINSALyon/site-dev.git`
  - `git fetch --all && git branch --set-upstream-to=origin/master master`
* Changer les permissions sur `/www` en les donnant à nginx : 
```
chown -R nginx:nginx .
```
Bien vérifier que l'utilisateur nginx (utilisé pour exécuter les commandes PHP) a toutes les permissions sur /www et /www/.git
