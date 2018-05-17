# What is it for ?
This container will clone a given repository on startup and serve it with a web server (nginx + php-fpm).
There will be a management interface at ``yoursite.tld/git/`` to force a git pull.

For your convenience, set up a *Webhook* in your repo poining to ``yoursite.tld/git/hook.php`` that triggers to *push* events,
so that when you push to the **master** branch, your code is automatically pulled to the document root of this webserver

# Deployment
Set the following environnment variables :
```
GITHUB_URL=https://github.com/yourUsername/yourRepository  #without the ".git" !!!
BRANCH=master  #or any other branch you want to pull
```
The container exposes port 80
## Example
```
docker pull jeanribes/gitsync
docker run -d --name some-gitsync -e GITHUB_URL=https://github.com/nishanttotla/DockerStaticSite \
                -e BRANCH=master -p 8080:80 jeanribes/gitsync
```
# General use
The webhook will only run `git pull`, but if you need to hard-reset, just update in the management interface.

You can see the repo url and all the applied commits in the management interface

# Security
An attacker could potentially inject code through the GITHUB_URL and BRANCH env vars, but he would have already compromised your docker host, so ...
# TODO
Currently, the repo is cloned whenever you start (or restart) the container.
After the first startup, the clone just fails, but it's OK
