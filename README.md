# Biotopie Back

INSTALLATION

cloner le projet

changer le fichier .env.example en .env

npm i

composer install

php artisan key:generate

npm run dev (la commande se lance 1 fois) ou npm run watch (la commande se lance à chaque modifications)

php artisan serve


BASE DE DONNEES

lancer laragon ou wampp ou ...

dans le fichier .env changer DB_DATABASE=laravel par DB_DATABASE=biotopie, vérifier que le username et le passowrd sont bons

php artisan db:create (créer une base de données nommé biotopie)

php artisan migrate (ajoute les données dans la base)
