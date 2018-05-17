#!/bin/sh
cd /var/www/html
echo "cloning $GITHUB_URL.git using branch $BRANCH"
echo "be sure to remove the trailing .git or the setup will fail !"
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
