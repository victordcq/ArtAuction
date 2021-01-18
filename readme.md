#Logins
Some seeded logins, to test out functionality
naam: 
	victor.declercq@student.odisee.be
	joris.maervoet@odisee.be
	jan.janssens@odisee.be
	kevin.picalausa@odisee.be
passwords: Azerty123

# Installation Art shop

## Vendors

go to map ArtAuction
```
composer install
```

##run containers in docker 
```
cd laradock
docker-compose up -d nginx mysql workspace
```
This should host the webpage in localhost:8081
if not check where the service runs with 
```
docker ps -a
```


## Create DB
```
docker-compose exec mysql bash
 >mysql -u root -p
 root
>DROP DATABASE vic
>CREATE DATABASE vic 
```
## load dump
```
docker-compose exec workspace bash
composer dump-autoload
```

## Migrate
*in /ArtAuction
```
php artisan migrate
```

## Seed database
```
php artisan db:seed
```
### link storage
```
php artisan storage:link
```
may need to delete link first. located in public




### When error in config files
```
php artisan config:clear
```

### When autoload not found
```
composer dump-autoload
```

### when app key error
```
php artisan key:generate
```

