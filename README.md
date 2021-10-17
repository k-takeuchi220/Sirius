### BUild Develop Enviroment

local machine
```
$ git clone https://github.com/k-takeuchi220/recommendNote.git
$ cd Sirius
$ docker-compose up -d
$ docker-compose exec phpfpm bash
```

phpfpm container
```
:/var/www# composer update
:/var/www# composer install
:/var/www# mv .evn.example .env
:/var/www# php artisan key:generate
```

