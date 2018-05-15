#!/bin/sh
cd /var/www/html
echo "cloning $GITHUB_URL using branch $BRANCH"
read
git init
git remote add origin $GITHUB_URL.git
git pull origin master
git branch --set-upstream-to=origin/master master
git branch --set-upstream-to=origin/$BRANCH $BRANCH
git checkout $BRANCH
chown -R nobody:nobody .
rm index.php
touch supervisord.log
chmod a-r supervisord.log
echo "Now launching the webserver"
