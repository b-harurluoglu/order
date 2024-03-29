
# Getting started

## Installation

Clone the repository

    git clone git@github.com:b-harurluoglu/order.git

Switch to the repo folder

    cd order

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

    cp source/.env.example source/.env

Build the project

    docker-compose up -d

Install all the dependencies using composer

    docker-compose exec php composer install

Generate a new application key

    docker-compose exec php php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    docker-compose exec php php artisan migrate

Run the databse seeder

    docker-compose exec php php artisan db:seed

You can now access the server at http://order.localhost/

----------
