# Клонируем репозиторий
$ git clone git@gitlab.skillbox.ru:team_php4/megano-shop.git

# Устанавливаем зависимости Composer
```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```

или

```
./vendor/bin/sail composer install
```


# Запускаем Laravel Sail, предварительно установив Docker и docker-compose для Вашей системы
```
./vendor/bin/sail up -d
```

# Запускаем миграции
```
./vendor/bin/sail artisan migrate
```

# Компилируем frontend
```
./vendor/bin/sail npm run build
```

# Установка сидеров
```
./vendor/bin/sail artisan db:seed \\Database\\Seeders\\DemoDataSeeders\\DemoDataSeeder
```

# Установить telescope
...
sail composer require laravel/telescope
sail artisan telescope:install
sail artisan migrate
...

# Установить debugbar
...

...
