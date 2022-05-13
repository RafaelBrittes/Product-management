# Product management

First of all thank you to check this project, it's a simple CRUD but i've used some cool pratics like Repository-pattern and features like user authentication.

This application is basically a management of products that can have tags related to them, it has user features, so some data can only be seen if you are logged, check the routes [documentation here](https://documenter.getpostman.com/view/20822352/Uyxbq9W1).

# To do list:

- [x] Create the Docker Setup.
- [x] Add business logic and core of the aplication.
- [x] Add user authentication by JWT with Sanctum.
- [ ] Add roles management with Spatie.
- [ ] Create seeders, factories and unit tests.
- [ ] Create front-end.

Feel free to fork or reuse the code!

# Tecnologies
In this project i've used the new version of Laravel (9 at this time), didnt used all that the framework can provide but i'm going to keep updating it and practicing on it.

Docker for the setup.

MySQL 5.7 with Adminer.

# Instalation
*Be sure to have Docker installed*.

Clone the repository to your PC.

Go to the project folder.

```sh
cd Product-Management/
```

Make the .env file
```sh
cp .env.example .env
```

Update the .env variables.
```dosini
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```

Run the Docker containers
```sh
docker-compose up -d
```

Access o container
```sh
docker-compose exec app bash
```

Install the dependencies
```sh
composer install
```

Generate the Laravel project key
```sh
php artisan key:generate
```

Run the migrations
```sh
php artisan migrate
```

Adminer open in http://localhost:8080/
Server: mysql
User: root
Password: root
Database: laravel

The main API URL is http://localhost:8989/. Please heck the documentation of the routes here: https://documenter.getpostman.com/view/20822352/Uyxbq9W1
