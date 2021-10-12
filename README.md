### BUild Develop Enviroment

local machine
```
$ git clone https://github.com/y-sugiyama654/recommendNote.git
$ cd recommendNote
$ docker-compose up -d
$ docker-compose exec phpfpm bash
```

phpfpm container
```
:/var/www# composer udate
:/var/www# composer install
:/var/www# mv .evn.example .env
:/var/www# php artisan key:generate
```

