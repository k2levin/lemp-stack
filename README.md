Docker LEMP stack for PHP
=======================================

[![Build Status](https://travis-ci.org/k2levin/lemp-stack.svg?branch=master)](https://travis-ci.org/k2levin/lemp-stack)
[![GitHub issues](https://img.shields.io/github/issues/k2levin/lemp-stack.svg)](https://github.com/k2levin/lemp-stack/issues)
[![GitHub stars](https://img.shields.io/github/stars/k2levin/lemp-stack.svg)](https://github.com/k2levin/lemp-stack/stargazers)
[![GitHub forks](https://img.shields.io/github/forks/k2levin/lemp-stack.svg)](https://github.com/k2levin/lemp-stack/network)
[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)](https://raw.githubusercontent.com/k2levin/lemp-stack/master/LICENSE)

### Services in the stack:
* L - Linux (Alpine)
* E - Nginx
* M - MySQL
* P - PHP
* R - Redis
* N - NPM

### Usage:
- server up
```Bash
$ docker stack deploy -c docker-compose.yml local
```
- server down
```Bash
$ docker stack rm local
```
- connect server
```Bash
docker exec -it $(docker ps -f name=php -q) bash
```

### Note:
- I created convenient startup bash script with **alias** command => [Alias bash script](https://github.com/k2levin/lemp-stack/wiki/Alias-bash-script)
- If having issue with mouting volume, then use full path, ex: ```/c/Code/```

### Extra:
- Checkout branch [lamp-stack](https://github.com/k2levin/lemp-stack/tree/lamp-stack) if prefer Apache
