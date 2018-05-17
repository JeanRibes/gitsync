#!/bin/sh
cd /var/www/html
rm index.html
rm index.php
echo "cloning $GITHUB_URL using branch $BRANCH"
read
git init
git remote add origin $GITHUB_URL.git
git fetch --all
#git branch --set-upstream-to=origin/master master
#git branch --set-upstream-to=origin/$BRANCH $BRANCH
git checkout $BRANCH
chown -R nobody:nobody .
touch supervisord.log
chmod a-r supervisord.log
echo "Now launching the webserver"
