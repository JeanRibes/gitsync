# What is it for ?
This container will clone a given repository on startup and serve it with a web server (nginx + php-fpm).
There will be a management interface at ``yoursite.tld/git/`` to force a git pull.

For your convenience, set up a *Webhook* in your repo poining to ``yoursite.tld/git/hook.php`` that triggers to *push* events,
so that when you push to the **master** branch, your code is automatically pulled to the document root of this webserver

# Deployment
Set the following environnment variables :
```
GITHUB_URL=https://github.com/yourUsername/yourRepository  #without the ".git" !!!
```
It is preferable to mount a volume on ``/var/www/html``
The container exposes port 80
## Example
```
docker volume create gitsync-repo
docker pull jeanribes/gitsync
docker run -d --name some-gitsync -v gitsync-repo:/var/www/html -e GITHUB_URL=https://github.com/nishanttotla/DockerStaticSite -p 8080:80 jeanribes/gitsync
```
# General use
The webhook will only run `git pull`, but if you need to hard-reset, just update in the management interface.

You can see the repo url and all the applied commits in the management interface

# Security
Although the only code injection I see would be through the environnment variable GITLAB_URL, I don't recommend using this elsewhere than in a dev environnment
# TODO
Currently, the repo is cloned whenever you start (or restart) the container.
After the first startup, the clone just fails, but it's OK
