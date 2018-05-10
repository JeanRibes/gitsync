#!/bin/sh
cd /var/www/html
git init
git remote add origin $GITHUB_URL.git
git pull origin master
git branch --set-upstream-to=origin/master master
chown -R nobody:nobody .
